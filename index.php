<?php
    include_once 'Views/partials/head.php';
    require_once 'data.php';
    var_dump($cars);


?>
<?php
foreach($cars as $car){
    echo "<p>" . $car['name'] . "</p>";
}

foreach($cars as $car){
?>
<div class="card" style="width: 18rem;">
  <img src="public/img/<?= $car['picture']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $car['name'] ?></h5>
    <p class="card-text"><?= $car['price'] ?></p>
    <a href="car.php?id=<?= $car['id']?>" class="btn btn-primary">Voir Plus</a>
  </div>
</div>
<?php

}
?>

<?php
    include_once 'Views/partials/footer.php';
?>


