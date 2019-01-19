<?php

function getFoto($id) {
    $host = "sandbox2.ufps.edu.co";
    $user = "ufps_55";
    $pw = "ufps_11";
    $db = "ufps_55";
    
    $conn = new mysqli($host, $user, $pw, $db);
    if ($conn->connect_error) {
        die("conexion fallida :" . $conn->connect_error);
    }

    $sql = "select foto from usuario where cedula='" . $id . "'";
    $result = mysqli_query($conn, $sql);

    $r = mysqli_fetch_array($result);
    $str = 'data:image/jpeg;base64,' . base64_encode($r['foto']);
    return $str;
}


