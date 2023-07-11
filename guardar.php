<?php

include("db.php");

if (isset($_POST['Guardar_datos'])) {


    $expendiente = $_POST['expendiente'];
    $nombre = $_POST['nombre'];
    $matricula = $_POST['matricula'];
    $edad = $_POST['edad'];
    $edocivil = $_POST['edocivil'];
    $sexo = $_POST['sexo'];
    $domicilio = $_POST['domicilio'];
    $fecnac = $_POST['fecnac'];
    $telefono = $_POST['telefono'];
    $ocupacion = $_POST['ocupacion'];
    $l_o = $_POST['l_o'];
    $l_r = $_POST['l_r'];
    $t_r = $_POST['t_r'];
    $escolaridad = $_POST['escolaridad'];
    $religion = $_POST['religion'];
    $consultas = $_POST['consultas'];
    $tiempo_tratamineto = $_POST['tiempo_tratamineto'];

    $query = "INSERT INTO registro(expendiente, nombre, matricula, edad, edocivil, sexo, 
domicilio, fecnac, telefono, ocupacion, l_o, l_r, t_r, escolaridad, religion, consultas, tiempo_tratamineto) VALUES
('$expendiente', '$nombre', '$matricula', '$edad', '$edocivil', '$sexo', '$domicilio',  '$fecnac', '$telefono', 
'$ocupacion', '$l_o', '$l_r', '$t_r', '$escolaridad', '$religion', '$consultas', '$tiempo_tratamineto')";

    $result = mysqli_query($conn, $query);

}

$_SESSION['message'] = 'GUARDADO CON EXITO';
$_SESSION['message_type'] = "success";

header("Location: index.php");

?>