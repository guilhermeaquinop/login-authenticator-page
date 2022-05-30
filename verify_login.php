<?php

    session_start();

    include_once "conection.php";

    $user = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $user = filter_input(INPUT_POST, 'user', FILTER_UNSAFE_RAW);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_UNSAFE_RAW); // Criptografia

    $sql = "SELECT * FROM logins WHERE email = '$email';";
    $exec_sql = mysqli_query($con, $sql);
    $row_result = mysqli_fetch_assoc($exec_sql);

    if (password_verify($password, $row_result['password'])) {
       /*  header("Location: login.php"); */
        echo json_encode("Welcome $user!");
    } else {
        /* header("Location: index.php"); */
        echo json_encode("Access denied!");
    }

?>  