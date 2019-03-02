<?php
/**
 * Created by PhpStorm.
 * User: brendan
 * Date: 27/09/2018
 * Time: 6:39 PM
 */

include 'inc/header.php';
echo "<title>View Post | Journlr</title>";
include 'inc/navbar.php';

$postid = $_GET['id'];
$query = "SELECT * FROM JOURNLR WHERE ID='$postid'";

//$post = mysqli_query($conn, $query);
$result = mysqli_query($conn, $query);
$posts = mysqli_fetch_array($result, MYSQLI_ASSOC);


?>

        <div class="container align-vertical main-container">
            <div class="post">
                <h3><?php  ?></h3>
                <small><p class="centered date"><?php echo $posts['title'];?></p></small>
                <small><p class="centered date"><a href="deletepost.php?id=<?php echo $postid?>">Delete</a></small>
		
                <hr>
                <div class="postbody">
                    <p>
                    	<?php echo nl2br($posts['postbody']); ?>
		    </p>
                </div>
            </div>
        </div>


