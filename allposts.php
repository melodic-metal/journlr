<?php
include 'inc/header.php';
echo "<title>All Posts | Journlr</title></head><body>";
include 'inc/navbar.php';
?>

<?php
if(!isset($_SESSION['u_id'])) {
    header("Location: login.php");
}
?>
<div class="container">
	<div class="align-vertical" >
    		<div class="form-group align-self-center ">
                	<?php

        $query = "SELECT * FROM JOURNLR WHERE owner_id='".$_SESSION['u_id']."' ORDER BY created_at DESC";
        $result = mysqli_query($conn, $query);

        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //var_dump($posts);

        mysqli_free_result($result);
        mysqli_close($conn);

        ?>
        <?php foreach ($posts as $post): ?>

            <div class="post border">
                <h3 class="title"><a href="viewpost.php?id=<?php echo $post['id']?>"><?php echo $post['title'] ?></a></h3>
                <small><p class="centred date"><?php echo $post['created_at']; ?></p>
		<a class="date" href="deletepost.php?id=<?php echo $post['id']; ?>"><span class="fas fa-trash"></span></a></small> <small><a href="editpost.php?id=<?php echo $post['id']; ?>"><span class="fas fa-edit"></span></a></small>

                <hr>
                <div class="postbody">
                    <p>
                    <?php echo nl2br($post['postbody']); ?>
                </div>
        </div>
        <input type="hidden" value="<?php echo $post['id']; ?>">
        <br/>

    <?php endforeach; ?>




</div>
</div>
</div>

<?php
include 'inc/footer.php';
?>
</body>
</html>
