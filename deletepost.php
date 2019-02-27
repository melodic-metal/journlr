<?php
session_start();
require("inc/db.php");
$postID = $_GET['id'];

if(!isset($_SESSION['u_id'])) {
	header("Location: login.php");
	return;
}
if (!isset($postID)) {
	header("Location: index.php");
}
else {
	$sql = "DELETE FROM JOURNLR WHERE id=$postID";
	mysqli_query($conn, $sql);
	header('Location: allposts.php');
}

?>

