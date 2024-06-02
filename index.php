

<?php 

    require_once 'classes/Car.php';

    $car = new Car(1,"BMW",'purple');
    echo $car->getbrand().'<br>';

    $car->setcolor('red');
    echo $car->getcolor();




?>