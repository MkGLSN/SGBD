<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/eliminar.css">
        <title>Eliminar Alumnos</title>
    </head>
<body>
    
    <div class="header">
        <a href="principal.html"><img src="img/cecyteLogo.png" alt="" class="logo"></a>
        <div class="titulo">
        <a class="letras1" style="color: white;font-size: 38px; text-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);">Oscar Greco Saavedra lagunas</a>
        <br><a class="letras2" style="color: white;font-size: 22px; text-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);">Proyecto de Nivelacion</a><br>
        </div>
        <div class="btns">
        <input type="button" name="" id="" value="Regresar" onclick="regreso()" style="width: 200px; margin-top: 20px; margin-right: 10px; padding: 14px;">
        </div>
    </div>
 <form method="post" action="elimar_estudiantes.php">
            <table align="center">
                <tr><td colspan="8" align="center"><h2>ELIMINAR ALUMNO</h2></td></tr>
                <tr>
                   <td>Nombre:</td>
                   <td><input type="text" id="nombre" name="nombre" class="nombre" placeholder="Escribe el Nombre" maxlength="30"></td> 
                   <td>Apellido Paterno:</td>
                   <td><input type="text" id="ap" name="ap" class="ap" placeholder="Escribe el Apellido Paterno" maxlength="30"></td> 
                   <td>No. de Control:</td>
                   <td><input type="text" id="nc" name="nc" class="nc" placeholder="Escribe la Matricula" maxlength="60" ></td>
                </tr>
                <tr>
                   <td colspan="8" align="center"><input type="submit" value="Eliminar" class="bo"  onclick="mostrar()"></td>
                </tr>
            </table>
       
            <script>
                function regreso(){
                    window.location=("principal.html");
                }
            </script>
        </form>
              <iframe src="datos_reportes.php" width="1000px" height="800px" frameborder="0"></iframe>

</body>    
</html> 