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
<h1>super globals</h1>
<?php
    # $_SERVER SUPERGLOBAL
    $server = [
            'Host server name' => $_SERVER['SERVER_NAME'],
            'Http header' => $_SERVER['HTTP_HOST'],
            'server software' => $_SERVER['SERVER_SOFTWARE'],
            'doc root' => $_SERVER['DOCUMENT_ROOT'],
            'current page' => $_SERVER['PHP_SELF'],

    ];

    print_r($server);

    echo '<br>';

    $client = [
            'client info' => $_SERVER['HTTP_USER_AGENT'],
            'ip' => $_SERVER['REMOTE_ADDR'],
            'port' => $_SERVER['REMOTE_PORT']
    ];
    print_r($client)
?>


<?php
include '../inc/footer.php';
?>
</body>
</html>
