<?php
/**
 * Created by PhpStorm.
 * User: brendan
 * Date: 22/09/2018
 * Time: 10:54 AM
 */
include 'includes/header.php';
echo "<title>All Posts | Journlr</title>";

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
                    <?php foreach($posts as $post): ?>
                        <h3><?php echo $post['title']?></h3>
                        <small><?php echo $post['created_at'];?></small>
                        <div class="jumbotron">
                            <?php echo $post['postbody']; ?>

                        </div>
                        <input type="hidden" value="<?php echo $post['id'];?>">
                    <?php endforeach; ?>
                </div>
</div>
<?php
include 'includes/footer.php';
?>
</body>
</html>
