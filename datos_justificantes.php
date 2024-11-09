<?php
 $conex=mysqli_connect("localhost","id21493887_grecolagunas", "Saavedra_21", "id21493887_forms_estudiantes") or dir("No conecto, intenta de nuevo");
 
  $fece =$_POST['fece'];
  $fecc =$_POST['fecc'];
  $nc =$_POST['nc'];
  $sem =$_POST['sem'];
  $gru =$_POST['gru'];
  $esp =$_POST['espe'];
  $alm =$_POST['alm'];
  $mo =$_POST['mo'];

  $est = "INSERT INTO justificantes(fec_emi,fec_cad,matricula,semestre,grupo,especialidad,alumno,motivo) VALUES 
  ('$fece','$fecc','$nc','$sem','$gru','$esp','$alm','$mo')";

   $ejecutar=mysqli_query($conex, $est);

   if ($ejecutar) {
    echo"<script>
    alert('Los datos se han almacenado correctamente');
    window.location.href='Justificantes.php';</script>";
   }else
   {
    echo"<script>
    alert('Error al almacenar los datos');
    window.location.href='Justificantes.php';</script>";
   }
   mysqli_close($conex);
?>