<?php


/**
 * Created by PhpStorm.
 * User: brendan
 * Date: 21/09/2018
 * Time: 5:35 PM
 */

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <div id="navbar-header">
            <a class="navbar-brand" href="#">Journlr</a>
        </div>

        <ul class="nav navbar-nav mr-auto">
            <li class="nav-item navbar"><a href="./index.php">Home</a></li>
            <?php if (isset($_SESSION['u_id'])): ?>
                <li class="nav-item navbar"><a href="./addpost.php">Add Post</a></li>
                <li class="nav-item navbar"><a href="./latest.php">Latest</a></li>
		<li class="nav-item navbar"><a href=./allposts.php>All posts</a></li>

            <?php endif; ?>
        </ul>


        <?php if (isset($_SESSION['u_id'])):
           ?>
            <ol class="nav navbar-nav navbar-right">
                <li class="nav-item testing"><?php

                    print "<p>Welcome, " . $_SESSION["u_first"]."</p>";

                    ?>
		</li>
                <li class="nav-item">
                    <a href="./settings.php"><span class="nav-link fas fa-wrench"></span> Settings</a>
                </li>
                <li class="nav-item">
                    <a href="./logout.php"><span class="nav-link fas fa-sign-out-alt"></span> Sign Out</a>
                </li>
            </ol>

        <?php  else: ?>
            <ol class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a href="./register.php"><span class="nav-link fas fa-user-plus"></span> Sign Up</a>
                </li>
                <li class="nav-item">
                    <a href="./login.php"><span class="nav-link fas fa-sign-in-alt"></span> Login</a>
                </li>

        <?php endif; ?>

    </div>
</nav>

