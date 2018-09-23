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


<div class="container align-vertical" style="width:40%">
    <div class="form-group align-self-center ">
        <div class=""></div>

        <?php

        $query = 'SELECT * FROM journlr ORDER BY created_at DESC';
        $result = mysqli_query($conn, $query);

        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //var_dump($posts);

        mysqli_free_result($result);
        mysqli_close($conn);

        ?>
        <h1>All Posts</h1>
        <?php foreach ($posts as $post): ?>
        <div>
            <div>
                <h3><?php echo $post['title'] ?></h3>
                <small><?php echo $post['created_at']; ?></small>
                <div>
                    <p>
                    <?php echo $post['postbody']; ?>
                </div>
            </div>
        </div>
        <input type="hidden" value="<?php echo $post['id']; ?>">
    </div>
    <?php endforeach; ?>
</div>

<?php
include 'inc/footer.php';
?>
</body>
</html>
