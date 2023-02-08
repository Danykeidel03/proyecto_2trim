<?php

require 'conexion.php';
$db = new Conexion();

//INSERTAR USUARIOS A LA BASE DE DATOS

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $json = file_get_contents('php://input');
    if (isset($json) ){
        $user = json_decode($json);

        $fullname = $user ->fullname;
        $username = $user ->username;
        $email = $user ->email;
        $pass = $user ->pass;
        $height = $user ->height;
        $weight = $user ->weight;
        $birthday = $user ->birthday;
        $activities = $user ->activities;

        $sql = "INSERT INTO users (fullname, username, email, pass, height, weight, birthday, activities) VALUES('$fullname', '$username', '$email', '$pass', '$height', '$weight', '$birthday', '$activities')";


        try {
            $db->query($sql);
            header("HTTP/1.1 201 Created");
            echo json_encode($db->insert_id);
        } catch (mysqli_sql_exception $e) {
            header("HTTP/1.1 400 Bad Request");
        }
    } else {
        header("HTTP/1.1 400 Bad Request");
    }
}


// //INICIAR SESION BD

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $json = file_get_contents('php://input');
//     if (isset($json) ){
//         $user = json_decode($json);

//         $username = $user ->username;
//         $pass = $user ->pass;

//         // $sql = "INSERT INTO users (fullname, username, email, pass, height, weight, birthday, activities) VALUES('$fullname', '$username', '$email', '$pass', '$height', '$weight', '$birthday', '$activities')";
//         $sql = "SELECT * FROM users WHERE email like $username and pass like $pass ";

//         try {
//             $db->query($sql);
//             header("HTTP/1.1 201 Created");
//             echo json_encode($db->insert_id);
//         } catch (mysqli_sql_exception $e) {
//             header("HTTP/1.1 400 Bad Request");
//         }
//     } else {
//         header("HTTP/1.1 400 Bad Request");
//     }
// }
