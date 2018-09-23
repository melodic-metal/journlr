<?php
session_start();
/**
 * Created by PhpStorm.
 * User: brendan
 * Date: 21/09/2018
 * Time: 5:35 PM
 */
$_SESSION['loggedIn'] = false;
?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <div id="navbar-header">
                <a class="navbar-brand" href="#">Journlr</a>
            </div>
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item navbar"><a href="./index.php">Home</a></li>
            </ul>
            <?php if(!$_SESSION['loggedIn']): ?>
            <ol class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a href="./register.php"><span class="nav-link fas fa-registered"></span> Sign Up</a>
                </li>
                <li class="nav-item">
                    <a href="./login.php"><span class="nav-link fas fa-sign-in-alt"></span> Login</a>
                </li>
                <?php endif; ?>
            <?php if($_SESSION['loggedIn']): ?>
            <ol class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a href="./settings.php"><span class="nav-link fas fa-wrench"></span> Settings</a>
                </li>
                <li class="nav-item">
                    <a href="./signout.php"><span class="nav-link fas fa-sign-out-alt"></span> Sign Out</a>
                </li>
            </ol>
            <?php endif; ?>
            </ol>
        </div>
    </nav>

