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
<h1>arrays</h1>
<?php
//indexed arrays
$people = array('george', 'sarah', 'jack');
$ids = array(23, 55, 12);
$cars = ['holden', 'toyota', 'ford'];
$cars[3] = 'car';
$cars[] = 'bmw'; //if you don't know what index you're at

echo count($cars);
echo $people[1];
echo $ids[2];
echo $cars[0];
print_r($cars);
var_dump($cars);

//associative array
$people = array('brad' => 35, 'dan' => 32, 'sara' => 37);
$ids = [22 =>'brad', 44 => 'dan', 63=> 'sara' ];
echo $ids[22];
echo $people['brad'];
$people['jill'] = 42;
echo $people['jill'];

// multidimensional arrays
$cars = array(
        array('honda', 20, 10),
        array('toyota', 30, 20),
        array('ford', 23, 12),
);
echo $cars[1][2];
?>


<?php
include '../inc/footer.php';
?>
</body>
</html>
