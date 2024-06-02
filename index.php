

<?php 

    require_once 'classes/Car.php';

    $car = new Car(1,"BMW",'red');
    echo $car->getBrand().'<br>';

 
    echo $car->getColor();



?>