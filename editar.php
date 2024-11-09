<?php
$conex=mysqli_connect("localhost","id21493887_grecolagunas", "Saavedra_21", "id21493887_forms_estudiantes") or dir("No conecto, intenta de nuevo");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/editar2.css">
    <title>Document</title>
</head>
<body>
<div class="header">
        <a href="principal.html"><img src="img/cecyteLogo.png" alt="" class="logo"></a>
        <div class="titulo">
        <a class="letras1" style="color: white;font-size: 38px; text-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);">Sistema de Acceso y Orden</a>
        <br><a class="letras2" style="color: white;font-size: 22px; text-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);">Centro de Estudios Científicos y Tecnológicos del Estado de Morelos</a><br>
        </div>
        <div class="btns">
        <input type="button" name="" id="" value="Regresar" onclick="regreso()" style="width: 200px; margin-top: 20px; margin-right: 10px; padding: 14px;">
        </div>
        <script>
                function regreso(){
                    window.location=("principal.html");
                }
            </script>
    </div><br><br>
    <?php
    if(isset($_POST['actu'])){
        $nom =$_POST['nombre'];
        $ap =$_POST['ap'];
        $am =$_POST['am'];
        $correo =$_POST['ce'];
        $nocontrol =$_POST['matricula'];
        $espe =$_POST['espe'];
        $tel =$_POST['tel'];
        $sem =$_POST['sem'];
        $gru =$_POST['gru'];

        $sql="update datos set nombre='".$nom."',ap='".$ap."',am='".$am."',correo='".$correo."',especialidad='".$espe."',telefono='".$tel."',
        semestre='".$sem."',grupo='".$gru."' where matricula='".$nocontrol."'";

        $resultado=mysqli_query($conex,$sql);

        if ($resultado) {
            echo"<script>
            confirm('Los datos se han actualizado correctamente');
            window.location.href='buscar.php';</script>";
           }else
           {
            echo"<script>
            alert('Error al actualizar los datos');
            window.location.href='buscar.php';</script>";
           }
           mysqli_close($conex);
    }
    else{
        $nocontrol=$_GET['matricula'];

        $sql="select * from datos where matricula='".$nocontrol."'";
        $resultado=mysqli_query($conex,$sql);

        $row=mysqli_fetch_assoc($resultado);

        $nom =$row["nombre"];
        $ap =$row["ap"];
        $am =$row["am"];
        $ce =$row["correo"];
        $nocontrol =$row["matricula"];
        $espe =$row["especialidad"];
        $tel =$row["telefono"];
        $sem =$row["semestre"];
        $gru =$row["grupo"];

        mysqli_close($conex);
    }
?>

    </table>
    <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
            <table align="center">
                <tr>
                    <td colspan="6" align="center"><h1 align="center" class="title">EDITAR ALUMNOS</h1></td>
                </tr>
                <tr>
                   <td><input type="text" id="nombre" name="nombre" class="nombre" maxlength="30" value="<?php echo $nom; ?>"></td> 
                   <td><input type="text" id="ap" name="ap" class="ap"  maxlength="30"  value="<?php echo $ap; ?>"></td> 
                   <td><input type="text" id="am" name="am" class="am" maxlength="30"  value="<?php echo $am; ?>"></td>
                </tr>
                <tr>
                    <td><input type="text" id="ce" name="ce" class="ce"  maxlength="60"  value="<?php echo $ce; ?>"></td>
                    <td><input type="text" id="nc" name="matricula" class="nc"  maxlength="60"  value="<?php echo $nocontrol; ?>"></td>
                    <td><input type="text" id="espe" name="espe" class="tele"  maxlength="60" value="<?php echo $espe; ?>"></td>
                </tr> 
                <tr>
                    <td><input type="text" id="tel" name="tel" class="tel"  maxlength="60" value="<?php echo $tel; ?>"></td>
                    <td><input type="text" id="sem" name="sem" class="sem"  maxlength="60" value="<?php echo $sem; ?>"></td>
                    <td><input type="text" id="gru" name="gru" class="gru"  maxlength="60" value="<?php echo $gru; ?>"></td>
                </tr>   
                <tr>
                   <td colspan="7" style="text-align: center;"><input type="submit" name="actu" value="Actualizar" class="bo" id="buscar" >
                   <input type="button" value="Regresar" class="bo" id="buscar" onclick="reg()">                                     
                </td>
                </tr>
            </table>
        </form>
        <script>
                function reg(){
                    window.location=("buscar.php");
                }
            </script>
</body>
</html>