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

<div class="container align-vertical" style="width:40%">
    <div class=" align-self-center ">

        <form method="POST" action="register.php">
            <div class="input-group">

                <input style="width:48% " class="form-control " placeholder="First Name" name="firstname" type="text"/>
                &nbsp;
                <input style="width:48% " class="form-control " placeholder="Last Name" name="lastname" type="text"/>
            </div>
            <div class="controls">
                <!-- E-mail -->
                <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail">
            </div>
            <!-- Password -->
            <div class="controls form-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
            </div>
            <hr>
            <!-- Terms of service -->
            <div class="form-group form-check ml-auto">
                <input type="checkbox" id="registerConfirmTOS" class="form-check-input ">
                <label for="registerConfirmTOS" class="form-check-label">Confirm </label><a href="./tos.php"> Terms
                    of
                    Service</a>
                <!-- Sign up button -->
            </div>
            <div class="form-group">
                <button class="btn btn-info my-4 ml-auto" type="submit" name="submit">Register</button>
                <button class="btn btn-light my-4 mr-auto" type="button">Cancel</button>

            </div>

        </form>
    </div>
</div>
<?php
if (isset($_POST['submit'])) {
    $firstName = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];


    if(empty($firstName) ||empty($lastName) || empty($email) || empty($password) ) {
        header('Location: register.php?error=empty');
        exit();
    } else {
        /*if (!preg_match("/^[a-zA-Z]*$", $firstName) || !preg_match("/^[a-zA-Z]*$", $lastName)) {
            header('Location: register.php?error=invalid');
            exit();
        } else {*/
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header('Location: response.php?error=email');
                exit();
            } else {
                $query = "SELECT * FROM users WHERE email='$email'";
                $result = mysqli_query($conn, $query);
                $result_check = mysqli_num_rows($result);

                if ($result_check > 0) {
                    header('Location: register.php?error=taken');
                    exit();
                } else {
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    $query = "INSERT INTO users (email, password, firstname, lastname) VALUES('$email', '$hashedPassword', '$firstName', '$lastName')";
                    mysqli_query($conn, $query);
                    header("Location: register.php?error=success");
                    exit();
                }
            }
        }


    /*
    if (mysqli_query($conn, $query)) {
        header('Location: /journlr/allposts.php');
    } else {
        echo "Error" . mysqli_error($conn);
    }*/
}
?>


<footer>
    <?php
    include 'inc/footer.php';
    ?>
</footer>
</html>