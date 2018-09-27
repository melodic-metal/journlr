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
<h1>dates</h1>
<?php
//set time zone
date_default_timezone_set('Australia/Perth');

echo date('d');
echo date('m');
echo date('Y');
echo date('l');
echo date('Y/m/d');
echo date('h');
echo date('i');
echo date('s');
echo date('a');
echo date('h:i:sa');

$timestamp = mktime(10, 14,54, 11, 27, 1986);
echo date('d/m/Y h:i:sa', $timestamp);

$timestamp2 = strtotime('7:00pm March 22 2016');
$timestamp3 = strtotime('tomorrow');
$timestamp3 = strtotime('next Sunday');
echo $timestamp2;
echo date('d/m/Y h:i:sa', $timestamp3);
?>


<?php
include '../inc/footer.php';
?>
</body>
</html>
