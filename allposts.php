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
		<a href="#delModal" data-toggle="modal"></i><span class="fas fa-trash" data-confirm="Are you sure?"></span></a></small> <small><a href="editpost.php?id=<?php echo $post['id']; ?>"><span class="fas fa-edit"></span></a></small>

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

<div class="modal hide" id="delModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	<div class="modal-header">
        <h3 style="color: red">WARNING</h3>
    </div>
    <div class="modal-body">
        <h4>Delete</h4>
        <p>employee from the database?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <a class="btn btn-danger" href="deletepost.php?id=<?php echo $posts['id']; ?>"><i class="icon-trash icon-white"></i> Delete</a>
    </div>
  </div>
</div>
</div>
<?php
include 'inc/footer.php';
?>
</body>
</html>
