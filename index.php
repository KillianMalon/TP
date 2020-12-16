<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">

    <!-- Milligram CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>Hello, world!</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    div .container{
        width:8000px;
        /*margin: 20px;*/
    }
</style>
<body>


<div class="container">


    <?php require './components/nav.php'; ?>
<!--    <?php //require './components/navigation.php'; ?>-->

</div>

<?php


if (array_key_exists('page', $_GET)) {
    if ($_GET['page'] === "panier") {
        require './pages/panier.php';
    } elseif ($_GET['page'] === "deconnexion") {
        require './pages/deconnexion.php';
    } else {
        require './pages/Home.php';
    }
}

?>
