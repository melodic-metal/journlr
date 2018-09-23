<?php

/**
 * Created by PhpStorm.
 * User: brendan
 * Date: 21/09/2018
 * Time: 5:33 PM
 */
?>
    <html>
    <head>
        <title>Register | Journlr</title>
        <link rel="stylesheet" href="css/screen.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
              integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
              crossorigin="anonymous">
    </head>
<?php
include 'includes/navbar.php';
?>
    <div class="container align-vertical" style="width:30%">
        <div class="form-group align-self-center ">
            <form class="text-center border border-light p-5">
                <p class="h4 mb-4">Login</p>


                <!-- E-mail -->
                <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

                <!-- Password -->
                <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">

                <button class="btn btn-info my-4 btn-block" type="submit">Sign in</button>
            </form>
        </div>
    </div>

<?php
include 'includes/footer.php';
?>