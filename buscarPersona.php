<?php
$conex=mysqli_connect("localhost","id21493887_grecolagunas", "Saavedra_21", "id21493887_forms_estudiantes") or dir("No conecto, intenta de nuevo");

if(isset($_GET['enviar'])){
    $busqueda = $_GET['busqueda'];
    $consulta = $conex->query("SELECT * FROM datos WHERE matricula LIKE '%$busqueda%'");

    while($row = $consulta->fetch_array()){
        echo $row['nombre'].' ';
        echo $row['ap'].' ';
        echo $row['am'].' ';
        echo $row['matricula'].'<br>';
    }
}else{
    echo'<b>Registro no Encontrado</b>';
}
?>