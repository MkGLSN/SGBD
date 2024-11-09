
<?php
$conex=mysqli_connect("localhost","id21493887_grecolagunas", "Saavedra_21", "id21493887_forms_estudiantes") or dir("No conecto, intenta de nuevo");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/editar.css">
    <title>Document</title>
</head>

<body>
    <table class="busc" align="center">
        <tr>
            <td>
                <h1>BUSCAR ALUMNOS</h1>
            </td>
        </tr>
        
        <tr>
            <td>
                <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <input type="text" name="nombre" placeholder="Escribe el Nombre">&nbsp;&nbsp;
                <input type="text" name="matricula" placeholder="Escribe la Matricula">&nbsp;&nbsp;&nbsp;
                <input type="submit" name="buscar" value="Buscar" class="bo" id="buscar">
                
            </form>
            </td>
        </tr>
    </table><br>
    <table class="registros" style="background-color: white; margin-top: 20px; margin-right: 10px; color:black; border: 1px;  border:1px grey solid; border-radius:8px; width:70%;">
        <thead>
            <tr>
                <td><b>Matricula</b></td>
                <td><b>Nombre</b></td>
                <td><b>Apellido Paterno</b></td>
                <td><b> Grado y Grupo</b></td>
            </tr>
        </thead>
<tbody>
<?php
    if(isset($_POST['buscar'])){

        $nombre = $_POST['nombre'];
        $matricula = $_POST['matricula'];

        if(empty($_POST['nombre']) && empty($_POST['matricula'])){
            echo "<script language='JavaScript'> alert('Ingresa el Nombre o la Matricula')</script>";
            location.assign('buscar.php');
        }else{
            if(empty($_POST['nombre'])){
                $sql = "select * from datos where matricula=".$matricula;
            }
            if(empty($_POST['matricula'])){
                $sql = "select * from datos where nombre like '%".$nombre."%'";
            }
            if(!empty($_POST['nombre']) && !empty($_POST['matricula'])){
                $sql = "select * from datos where matricula=".$matricula." and nombre like '%".$nombre."%'";
            }
        }
        $resultado=mysqli_query($conex,$sql);
        while($row=mysqli_fetch_assoc($resultado)){
            ?>
            <tr>
            <td><?php echo $row['matricula']?></td>
            <td><?php echo $row['nombre']?></td>
            <td><?php echo $row['ap'] ?></td>
            <td><?php echo $row['semestre'].'&nbsp;&nbsp;'?><?php echo $row['grupo']?></td>
            <td>
                <?php echo "<a href='editar.php?matricula=".$row['matricula']."'>Editar</a>"; ?>
            </td>
        </tr>
            <?php
        }
    }
    else{
        $sql = "select * from datos";
        $resultado=mysqli_query($conex,$sql);
        while($row=mysqli_fetch_assoc($resultado)){
?>
        <tr>
            <td><?php echo $row['matricula']?></td>
            <td><?php echo $row['nombre']?></td>
            <td><?php echo $row['ap'] ?></td>
            <td><?php echo $row['semestre'].'&nbsp;&nbsp;'?><?php echo $row['grupo']?></td>
            <td>
                <?php echo "<a href='editar.php?matricula=".$row['matricula']."'>Editar</a>"; ?>
            </td>
        </tr>
        <?php
        }
    }
?>
        </tbody>
    </table>
</body>
</html>
