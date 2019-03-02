<?php


/**
 * Created by PhpStorm.
 * User: brendan
 * Date: 21/09/2018
 * Time: 5:35 PM
 */

?>
<title>Journlr</title>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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
        <span class="navbar-text navbar-right">Welcome, <?php echo $_SESSION['u_first']?> </span>
      <ol class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <a href="./settings.php"><i class="nav-link fas fa-wrench"></i>Settings</a>
        </li>
        <li class="nav-item">
          <a href="./logout.php"><span class="nav-link fas fa-sign-out-alt"></span>Sign Out</a>
        </li></ol>
	<?php  else: ?>
            <ol class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a href="./register.php"><span class="nav-link fas fa-user-plus"></span> Sign Up</a>
                </li>
                <li class="nav-item">
                    <a href="./login.php"><span class="nav-link fas fa-sign-in-alt"></span> Login</a>
                </li>
	   </ol> 
        <?php endif; ?>

</nav>
