<?php
/**
 * Created by PhpStorm.
 * User: inidentificable
 * Date: 28-06-15
 * Time: 01:59 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/assets/imagenes/favico.ico">

    <title>Cúmulo</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="/assets/css/carousel.css" rel="stylesheet">
    <?php
    if (htmlspecialchars($_GET["ip"]) == 'indexCumulo') {
        echo '<link href="/assets/css/signin.css" rel="stylesheet">';
    } elseif (htmlspecialchars($_GET["ip"]) == 'Interno/Home') {
        echo '<link href="/assets/css/dashboard.css" rel="stylesheet">';
    }
    ?>

</head>
<body>