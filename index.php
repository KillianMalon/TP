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
    .contenair{
        padding: 5%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: grey;
        font-size: 3rem;
        color: black;
    }
    img{
        height: 300px;
    }
</style>
<body>
<header>

    <?php require './components/nav.php'; ?>

</header>
<div >
    <div class="contenair">Site E-commerce</div>
    <div style="display: flex; align-items: center; flex-direction: column; text-align: center">


        <?php
        session_start();
        echo session_id();
        ?>
<?php




if (array_key_exists('page', $_GET)) {
    if ($_GET['page'] === "panier") {
        require './pages/panier.php';
    } elseif ($_GET['page'] === "deconnexion") {
        require './pages/deconnexion.php';
    }elseif ($_GET['page'] === "boutique") {
        require './pages/boutique.php';
    }else{
        require './index.php';
    }
}
?>
</div>
