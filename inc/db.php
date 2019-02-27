<?php
/**
 * Created by PhpStorm.
 * User: brendan
 * Date: 23/09/2018
 * Time: 11:45 AM
 */
require('config.php');
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(mysqli_connect_errno()) {
        echo("Sorry, database unavailable: ". mysqli_connect_errno());
}

//$result = $mysqli->query("SELECT * FROM journlr");
//if($result->num_rows) {echo "$result";}
