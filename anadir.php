<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="css/anadir.css" rel="stylesheet" type="text/css">
    <title>Estudiantes</title>
</head>
 <body>
    <div class="header">
        <a href="principal.html"><img src="img/cecyteLogo.png" alt="" class="logo"></a>
        <div class="titulo">
        <a class="letras1" style="color: white;font-size: 38px; text-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);">Oscar Greco Saavedra Lagunas</a>
        <br><a class="letras2" style="color: white;font-size: 22px; text-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);">Proyecto de Nivelacion</a><br>
        </div>
        <div class="btns">
        <input type="button" name="" id="" value="Regresar" onclick="regreso()" style="width: 200px; margin-top: 20px; margin-right: 10px; padding: 14px;">
        </div>
    </div>
    <script>
                function regreso(){
                    window.location=("principal.html");
                }
            </script>
        <div class="card">
          <form method="post" action="datos_estudiante.php">
            <table align="center">
                <tr>
                    <td colspan="6" align="center"><h2 align="center" class="title">AÑADIR ESTUDIANTES</h2></td>
                </tr>
                <tr>
                   <td>Nombre:</td>
                   <td><input type="text" id="nombre" name="nombre" class="nombre" placeholder="Escribe tu Nombre" maxlength="30" ></td> 
                   <td>Apellido Paterno:</td>
                   <td><input type="text" id="ap" name="ap" class="ap" placeholder="Escribe tu Apellido Paterno" maxlength="30" ></td> 
                   <td>Apellido Materno:</td>
                   <td><input type="text" id="am" name="am" class="am" placeholder="Escribe tu Apellido Materno" maxlength="30" ></td>
                </tr>
                <tr>
                    <td>Correo Estudiantil:</td>
                    <td><input type="text" id="ce" name="ce" class="ce" placeholder="Escribe tu Correo" maxlength="60" ></td>
                    <td>No. de Control:</td>
                    <td><input type="text" id="nc" name="nc" class="nc" placeholder="Escribe tu Matricula" maxlength="60" ></td>
                    <td>Especialidad</td>
                    <td><input type="text" id="espe" name="espe" class="tele" placeholder="Escribe tu Especialidad" maxlength="60"></td>
                </tr> 
                <tr>
                    <td>Telefono:</td>
                    <td><input type="text" id="tel" name="tel" class="tel" placeholder="Escribe tu Telefono" maxlength="60" ></td>
                    <td>Semestre:</td>
                    <td><input type="text" id="sem" name="sem" class="sem" placeholder="Escribe tu Semestre" maxlength="60" ></td>
                    <td>Grupo:</td>
                    <td><input type="text" id="gru" name="gru" class="gru" placeholder="Escribe tu Grupo" maxlength="60" ></td>
                </tr>   
                <tr>
                   <td colspan="7" style="text-align: center;"><input type="submit" value="Añadir" class="bo"></td>
                   <!--<td>2</td> -->
                   <!--<td>3</td> -->
                </tr>
            </table>
        </form>
         </div>

 </body>
</html>