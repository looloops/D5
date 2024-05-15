<?php
include __DIR__ . '/header.php';
include __DIR__ . '/classes/Product.php';
include_once __DIR__ . '/getCard.php';

?>



<h2 class="my-5">Gestione prodotti</h2>


<div class="row gy-3 mb-5">

    <?php

    $products = [];

    foreach ($articoli as $row) {
        $products[] = new Product($row['id'], $row['nome'], $row['prezzo'], $row['img']);
    }

    foreach ($products as $row) {
        $row->render();
    }

    ?>




</div>




<?php

include __DIR__ . '/footer.php';

?>