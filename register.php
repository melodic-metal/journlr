<?php

/**
 * Created by PhpStorm.
 * User: brendan
 * Date: 21/09/2018
 * Time: 5:33 PM
 */
include 'inc/header.php';
?>
<?php
include 'inc/navbar.php';
?>

<div class="container align-vertical" style="width:30%">
    <div class=" align-self-center ">
        <form class="text-center border border-light p-10">
            <p class="h4 mb-4">Register for Journlr</p>
            <div class="form-group">
                <!-- first name -->
                <input type="text" id="registerFirstName" class="form-control mb-4" placeholder="Enter First Name">
                <!-- last name -->
                <input type="text" id="registerFirstName" class="form-control mb-4" placeholder="Enter Family Name">
            </div>
            <div class="form-group">
                <!-- E-mail -->
                <input type="email" id="registerEmail" class="form-control mb-4" placeholder="E-mail">
            </div>
            <!-- Password -->
            <div class="form-group">
                <input type="password" id="registerPassword" class="form-control" placeholder="Password"
                       aria-describedby="defaultRegisterFormPasswordHelpBlock">
            </div>
            <!-- Terms of service -->
            <div class="form-group form-check ml-auto">
                <input type="checkbox" id="registerConfirmTOS" class="form-check-input ">
                <label for="registerConfirmTOS" class="form-check-label">Confirm </label><a href="./tos.php"> Terms of
                    Service</a>
                <!-- Sign up button -->
            </div>
            <div class="form-group">
                <button class="btn btn-info my-4 btn-block" type="submit">Register</button>
            </div>

        </form>
    </div>
</div>

<footer>
    <?php
    include 'inc/footer.php';
    ?>
</footer>
</html>
