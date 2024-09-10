<?php
    include_once 'Views/partials/head.php';
    require_once 'data.php';
    require_once 'function.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $car = findCarById($cars, $id);

        if ($car !== null) {
            ?>
                <h1><?= $car['name'] ?></h1>
                <p>Prix : <?= $car['price'] ?>€</p>
                <img src="public/img/<?= $car['picture']?>" class="card-img-top" alt="...">

        <?php
        } else {
            echo "<p>Voiture non trouvée</p>";
        }

    } else {
        header('Location: /404.php');
        exit;
    }

?>


<?php
    include_once 'Views/partials/footer.php';
?>