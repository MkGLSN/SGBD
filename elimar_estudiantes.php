<?php

$conex=mysqli_connect("localhost","id21493887_grecolagunas", "Saavedra_21", "id21493887_forms_estudiantes") or dir("No conecto, intenta de nuevo");
  $co =$_POST['nc'];
  $matricula = "DELETE FROM datos Where matricula = '$co'";
  $ejecutar = mysqli_query($conex,$matricula);

  if ($ejecutar) {
   echo"<script>
   alert('Los datos se eliminaron correctamente');
   window.location.href='elimini.php'</script>";
   }else
   {
   echo"<script>
   alert('Los datos no se eliminaron correctamente');
   .location.href='elimini.php'</script>";
   }
  
  mysqli_close($conex);
  

?>