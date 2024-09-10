<?php
    include_once 'Views/partials/head.php';
    require_once 'data.php';
    var_dump($cars);

    function findCarById($cars, $id){
        foreach($cars as $car){
            if($car['id'] == $id){
                return $car;
            }
        }
        return null;
    }
?>


<?php
    include_once 'Views/partials/footer.php';
?>