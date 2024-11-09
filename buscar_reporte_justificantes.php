<?php
$conex=mysqli_connect("localhost","id21493887_grecolagunas", "Saavedra_21", "id21493887_forms_estudiantes") or dir("No conecto, intenta de nuevo");

if(isset($_GET['enviar'])){
    $busqueda = $_GET['busqueda'];
    $consulta = $conex->query("SELECT * FROM reportes WHERE matricula LIKE '%$busqueda%'");

    while($row = $consulta->fetch_array()){
        echo $row['fecha'].' ';
        echo $row['alumno'].' ';
        echo $row['maestro'].' ';
        echo $row['motivo'].'<br>';
    }
}else{
    echo'<b>Registro no Encontrado</b>';
}

if(isset($_GET['enviar'])){
    $busqueda = $_GET['busqueda'];
    $consulta = $conex->query("SELECT * FROM justificantes WHERE matricula LIKE '%$busqueda%'");

    while($row = $consulta->fetch_array()){
        echo $row['fec_emi'].' ';
        echo $row['fec_cad'].' ';
        echo $row['alumno'].' ';
        echo $row['motivo'].'<br>';
    }
}else{
    echo'<b>Registro no Encontrado</b>';
}
?>