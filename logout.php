<?php
/**
 * Created by PhpStorm.
 * User: brendan
 * Date: 27/09/2018
 * Time: 4:01 PM
 */

session_start();
$_SESSION = array();
session_destroy();
header("Location: login.php");
exit();
