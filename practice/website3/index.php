<?php
/**
 * Created by PhpStorm.
 * User: brendan
 * Date: 22/09/2018
 * Time: 4:02 PM
 */


if(isset($_POST['name'])) {
    $name = htmlentities($_POST['name']);
    echo $name;
}
?>

<html>
<head>
    <title>Journlr</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"
          id="bootstrap-css">

    <link rel="stylesheet" href="../../css/screen.css">

</head>
<body>
<?php
//include '../../inc/navbar.php';

?>
<h1>get_post</h1>
    <form method="POST" action="./index.php">
        <div>
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name">

        </div>
        <div>
            <label for="email">email</label><br>
            <input type="text" name="email" id="email">

        </div>
        <input type="submit" value="Submit">
    </form>


    <?php
    include '../../inc/footer.php';
    ?>
</body>
</html>
