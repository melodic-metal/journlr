<?php
/**
 * Created by PhpStorm.
 * User: brendan
 * Date: 22/09/2018
 * Time: 10:54 AM
 */

include 'inc/header.php';
echo "<title>Post an entry | Journlr</title></head><body onload=\"setTimeAndDate()\">";
if(!isset($_SESSION['u_id'])) {
    header("Location: login.php");
}

$Parsedown = new Parsedown();


?>

<?php

include 'inc/navbar.php'; ?>
<div class="container">
<div class="align-vertical addpost">
    <div class="form-group align-self-center ">
        <form class="text-center border border-light p-5" action="addpost.php" method="post">
            <label for="datePicker">Date</label>
            <input type="date" id="datePicker" name="datePicker" class="form-control">
            <label for="timePicker"></label>
            <input type="time" id="timePicker" name="timePicker" class="form-control">
            <hr>
            <label for="postTitle">Title</label>
            <input type="text" placeholder="How was your day?" id="postTitle" name="postTitle" class="form-control" required>
            <hr>
            <label for="postBody">Type your post</label><br/>
	    <div id="buttons">
	    	<button type="button">B</button> <button type="button">I</button> <button type="button">U</button>
  	    </div>
            <textarea name="postBody" id="postBody" cols="30" rows="10" class="form-control" required></textarea>
            <hr>
            <button type="submit" id="submitPost" name="submitPost" class="btn btn-info my-4">Submit Post
            </button>
            <?php
            if (isset($_POST['submitPost'])) {
                $date = mysqli_real_escape_string($conn, $_POST['datePicker']);
                $time = mysqli_real_escape_string($conn, $_POST['timePicker']);
                $title = htmlentities(mysqli_real_escape_string($conn, $_POST['postTitle']));
                $body = htmlentities(mysqli_real_escape_string($conn, $_POST['postBody']));
		$markdown = $Parsedown->line($body);
                $username = $_SESSION['u_id'];
                $firstName = $_SESSION['u_first'];
                $lastName = $_SESSION['u_last'];

                $query = "INSERT INTO JOURNLR(owner_id, firstName, lastName, title, postbody, created_at) VALUES('$username', '$firstName', '$lastName',  '$title', '$markdown', '$date $time')";
                if(mysqli_query($conn, $query)) {
                    header('Location: allposts.php');
                }
                else {
                    echo "Error: ".mysqli_error($conn);
                }
            }

            ?>
        </form>
    </div>
</div>
</div>
<?php
include 'inc/footer.php';
?>
</body>
</html>
