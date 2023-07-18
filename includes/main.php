<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome Hotel</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio riservato</th>
                <th scope="col">Voto</th>
                <th scope="col">Distanza dal centro</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotels as $hotel) : ?>
                <tr>
                    <th scope="row"> <?= $hotel['name'] ?> </th>
                    <td> <?= $hotel['description'] ?> </td>
                    <td> <?= $hotel['parking'] ? 'Si' : 'No' ?> </td>
                    <td> <?= $hotel['vote'] ?> </td>
                    <td> <?= $hotel['distance_to_center'] ?> km</td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>