<?php
/**
 * Created by PhpStorm.
 * User: brendan
 * Date: 22/09/2018
 * Time: 10:54 AM
 */
include 'inc/header.php';
echo "<title>All Posts | Journlr</title></head><body>";
include 'inc/navbar.php';
?>

<?php
if(!isset($_SESSION['u_id'])) {
    header("Location: login.php");
}
?>
<div class="container-fluid align-vertical main-container" >
    <div class="form-group align-self-center ">
        <div class=""></div>

        <?php

        $query = "SELECT * FROM journlr WHERE owner_id='".$_SESSION['u_id']."' ORDER BY created_at DESC";
        $result = mysqli_query($conn, $query);

        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //var_dump($posts);

        mysqli_free_result($result);
        mysqli_close($conn);

        ?>
        <h1>All Posts</h1>
        <?php foreach ($posts as $post): ?>
        <div class="posts-container">
            <div class="post">
                <h3><?php echo $post['title'] ?></h3>
                <small><p class="centred"><?php echo $post['created_at']; ?></p></small>
                <hr>
                <div class="postbody">
                    <p>
                    <?php echo nl2br($post['postbody']); ?>
                </div>
            </div>
        </div>
        <input type="hidden" value="<?php echo $post['id']; ?>">
        <br/>

    <?php endforeach; ?>


<?php
include 'inc/footer.php';
?>
</body>
</html>
