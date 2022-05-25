<?php

    session_start();

    include_once "conection.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $name = filter_input(INPUT_POST, 'name', FILTER_UNSAFE_RAW);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_UNSAFE_RAW); // Criptografia

    $sql = "SELECT id, name, email, password FROM records WHERE name = '$name';";
    $exec_sql = mysqli_query($con, $sql);
    $row_result = mysqli_fetch_assoc($exec_sql);

    if (password_verify($password, $row_result['password'])) {
        header("Location: login.php");

    } else {
        $_SESSION['msg'] = "<p style='color: red;'>Usuário ou senha inválidos! (1) <p>";
        header("Location: index.php");

    }

?>  