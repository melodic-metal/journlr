<?php

/**
 * Created by PhpStorm.
 * User: brendan
 * Date: 21/09/2018
 * Time: 5:33 PM
 */
include 'inc/header.php';
include 'inc/navbar.php';
?>


    <div class="container align-vertical" style="width:30%">
        <div class="form-group align-self-center ">
            <form class="text-center border border-light p-5" method="POST">
                <p class="h4 mb-4">Login</p>


                <!-- E-mail -->
                <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail">

                <!-- Password -->
                <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">

                <button class="btn btn-info my-4 btn-block" type="submit">Sign in</button>
            </form>
        </div>
    </div>

<?php
if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($_POST['email']);
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $passwordStored = mysqli_query($conn, "SELECT password FROM USERS WHERE email='$email'");
    if ($password = $passwordStored) {
        $_SESSION['loggedin'] = true;
    }
    else {
        echo 'failed';
    }

}
?>

<?php
include 'inc/footer.php';
?>