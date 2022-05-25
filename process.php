<?php

session_start();
header('Content-Type: application/json');

include_once "conection.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$name = filter_input(INPUT_POST, 'name', FILTER_UNSAFE_RAW);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = password_hash(filter_input(INPUT_POST, 'password', FILTER_UNSAFE_RAW), PASSWORD_DEFAULT); // Criptografia


if (!empty($name) && !empty($email) && !empty($password)){
    
    $sql = "INSERT INTO records (name, email, password, created) VALUES ('$name', '$email', '$password', NOW());";
    $exec_sql = mysqli_query($con, $sql);

    if (mysqli_insert_id($con)) {
        echo json_encode("Your account has been successfully registered!");
    } else {
        echo json_encode("deu merda");
    }
}

?>  