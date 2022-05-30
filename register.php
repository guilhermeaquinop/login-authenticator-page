<?php

session_start();

header('Content-Type: application/json');

include_once "conection.php";

$user = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];

$user = filter_input(INPUT_POST, 'user', FILTER_UNSAFE_RAW);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = password_hash(filter_input(INPUT_POST, 'password', FILTER_UNSAFE_RAW), PASSWORD_DEFAULT); // Criptografia


if (!empty($user) && !empty($email) && !empty($password)){
    
    $sql = "INSERT INTO logins(user, email, password, created) VALUES ('$user', '$email', '$password', NOW());";
    $exec_sql = mysqli_query($con, $sql);

    if (mysqli_insert_id($con)) {
        echo json_encode("Your account has been successfully registered!");
    } else {
        echo json_encode("This email is already in use!");
    }
}

?>  