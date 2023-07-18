<?php

include './includes/data.php';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
</head>

<body>
    <main>
        <ul>
            <?php foreach ($hotels as $hotel) : ?>
                <li>
                    <p>Nome : <?= $hotel['name'] ?> </p>
                    <p>Descrizione : <?= $hotel['description'] ?> </p>
                    <p>Parking : <?= $hotel['parking'] ? 'Si' : 'No' ?> </p>
                    <p>Voto : <?= $hotel['vote'] ?> </p>
                    <p>Distanza dal centro : <?= $hotel['distance_to_center'] ?> km </p>
                </li>
            <?php endforeach ?>
        </ul>
    </main>
</body>

</html>