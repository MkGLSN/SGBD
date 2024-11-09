<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="css/reporte.css" rel="stylesheet" type="text/css">
    <title>Estudiantes</title>
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
    </div>
        <div class="card">
          <br><h2 align="center">REPORTES</h2>
          <form method="post" action="datos_reportes.php">
            <table align="center">
                 <tr>
                    <td></td>
                    <td>Fecha:</td>
                    <td><input type="text" id="fec" name="fec" class="fec" placeholder="YYYY-MM-DD" maxlength="60"></td>
                    <td align="center">Maestro:</td>
                    <td><input type="text" id="maes" name="maes" class="maes" placeholder="Nombre del Maestro" maxlength="60"></td> 
                </tr>   
                 <tr>
                 <td>Alumno:</td>
                   <td><input type="text" id="alm" name="alm" class="alm" placeholder="Escribe el Nombre del Alumno" maxlength="30" ></td>
                    <td align="center">Semestre:</td>
                    <td><input type="text" id="sem" name="sem" class="sem" placeholder="Escribe tu Semestre" maxlength="60" ></td>
                    <td>Grupo:</td>
                    <td><input type="text" id="gru" name="gru" class="gru" placeholder="Escribe tu Grupo" maxlength="60" ></td>
                </tr>   
                <tr>
                <td>No. de Control:</td>
                    <td><input type="text" id="nc" name="nc" class="nc" placeholder="Escribe el No. de Control" maxlength="60" ></td>
                   <td align="center">Especialidad:</td>
                   <td><input type="text" id="espe" name="espe" class="espe" placeholder="Escribe la especialidad" maxlength="30" ></td> 
                   <td align="center">Motivo:</td>
                   <td><input type="text" id="mo" name="mo" class="mo" placeholder="Escribe el Motivo" maxlength="30" ></td>
                </tr>
                   <td colspan="7" style="text-align: center;"><input type="submit" value="Enviar" class="bo"></td>
                   <!--<td>2</td> -->
                   <!--<td>3</td> -->
                </tr>
            </table>
        </form>
         </div>

 </body>
</html>