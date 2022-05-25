<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pagelogin.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> <!-- Boxicos -->
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>
    <main class="main_container">

        <div class="modal__back" id="modal-back">
            <div class="modal__container" id="modal-container">
                <form action="process.ph" method="post" class="form__singup">
                    <div id="modal-back-close" onclick="closeModal()">
                        <i class='bx bx-x'></i>
                    </div>

                    <h1 class="form__title">Sing Up</h1>

                    <div class="form__div">
                        <input type="text" name="name" class="form__input" id="name-singup" placeholder=" ">
                        <label for="" class="form__label">User</label>
                    </div>
                    <div class="form__div">
                        <input type="email" name="email" class="form__input" id="email-singup" placeholder=" ">
                        <label for="" class="form__label">E-mail</label>
                    </div>
                    <div class="form__div">
                        <input type="password" name="password" class="form__input"id="password-singup" placeholder=" ">
                        <label for="" class="form__label">Password</label>
                    </div>

                    <input type="submit" class="form__button" value="Sing Up">
                </form>
            </div>
        </div>
        
        <div class="home__container">
            <section class="l-form">
                <form action="verifyLogin.php" method="POST" class="form__singin">
                    <h1 class="form__title">Sing In</h1>

                    <div class="form__div">
                        <input type="text" name="name" class="form__input" placeholder=" ">
                        <label for="" class="form__label">User</label>
                    </div>
                    <div class="form__div">
                        <input type="email" name="email" class="form__input" placeholder=" ">
                        <label for="" class="form__label">E-mail</label>
                    </div>
                    <div class="form__div">
                        <input type="password" name="password"class="form__input" placeholder=" ">
                        <label for="" class="form__label">Password</label>
                    </div>
                    
                    <div class="form__forgot"><a href="#">Forgot password?</a></div>

                    <input type="submit" class="form__button" value="Sing In">

                    <div class="form__new">Don't have an account? <strong onclick="openModal()">Create</strong></div>
                </form>
            </section>
        </div>
        

    </main>
   <script src="js/index.js"></script>
</body>
</html>