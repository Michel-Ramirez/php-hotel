<?php

include './includes/data.php';

// $select_parking = $_GET['parking'];

// var_dump($select_parking);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Hotels</title>
    <style>
        header {
            height: 100px;
            border-bottom: 1px solid black;
            display: flex;
            align-items: center;
        }
    </style>
</head>

<body>
    <header>
        <?php include './includes/header.php' ?>
    </header>
    <main class="mt-5">
        <?php include './includes/main.php' ?>
    </main>
</body>

</html>