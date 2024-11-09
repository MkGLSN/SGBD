<?php
 $conex=mysqli_connect("localhost","id21493887_grecolagunas", "Saavedra_21", "id21493887_forms_estudiantes") or dir("No conecto, intenta de nuevo");
 
  $nom =$_POST['nombre'];
  $ap =$_POST['ap'];
  $am =$_POST['am'];
  $correo =$_POST['ce'];
  $nocontrol =$_POST['nc'];
  $espe =$_POST['espe'];
  $tel =$_POST['tel'];
  $sem =$_POST['sem'];
  $gru =$_POST['gru'];

  $est = "INSERT INTO datos(matricula,nombre,ap,am,correo,especialidad,telefono,semestre,grupo) VALUES 
  ('$nocontrol','$nom','$ap','$am','$correo','$espe','$tel','$sem','$gru')";

   $ejecutar=mysqli_query($conex, $est);

   if ($ejecutar) {
    echo"<script>
    alert('Los datos se han almacenado correctamente');
    window.location.href='anadir.php';</script>";
   }else
   {
    echo"<script>
    alert('Error al almacenar los datos');
    window.location.href='anadir.php';</script>";
   }
   mysqli_close($conex);
?>