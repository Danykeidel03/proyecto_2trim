<?php

require 'conexion.php';
$db = new Conexion();

//INICIAR SESION BD

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $json = file_get_contents('php://input');
    if (isset($json) ){
        $user = json_decode($json);

        $username = $user ->username;
        $pass = $user ->pass;

        // $sql = "INSERT INTO users (fullname, username, email, pass, height, weight, birthday, activities) VALUES('$fullname', '$username', '$email', '$pass', '$height', '$weight', '$birthday', '$activities')";
        $sql = "SELECT id FROM `users` WHERE email like '{$username}' and pass like '{$pass}'";
        // echo $sql;
        try {
            // $db->query($sql);
            $result = $db->query($sql);
            $alumnos = $result->fetch_all(MYSQLI_ASSOC);
            header("HTTP/1.1 201 Created");
            echo json_encode($alumnos);
        } catch (mysqli_sql_exception $e) {
            header("HTTP/1.1 404 Not Found");
        }
    } else {
        header("HTTP/1.1 400 Bad Request");
    }
}
