<?php
/**
 * Created by PhpStorm.
 * User: brendan
 * Date: 22/09/2018
 * Time: 4:02 PM
 */
?>

<html>
<head>
    <title>Journlr</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"
          id="bootstrap-css">

    <link rel="stylesheet" href="../css/screen.css">

</head>
<body>
<?php
include '../inc/navbar.php';
?>
<h1>functions</h1>
<?php
    function simpleFunction() {
        echo 'hello world';
    }
    simpleFunction();

    function sayHello($name = 'world') {
        echo 'hello '.$name;
    }
    sayHello('bob');

    function addNumbers($num1, $num2) {
        return $num1 + $num2;
    }
    echo addNumbers(2, 5);

    $myNum = 10;
    function addFive($num) {
        $num += 5;
    }


?>


<?php
include '../inc/footer.php';
?>
</body>
</html>
