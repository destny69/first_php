<?php



class Car {

    private $id;
    private $brand;

    private $color;
    private $vehicale_type = "car";
    

    public function __construct($id, $brand, $color) {

        $this->id = $id;
        $this->brand = $brand;
        $this->setcolor($color);

    }

    public function getbrand()
    {
        return $this->brand;
    }


    public function setcolor($color){

        $allowed_color = [
            'red',
            'green',
            'blue',
            'white',
            'black'

        ];

        if (in_array($color, $allowed_color))
        {
            $this->color = $color;
        }

    }

    public function getColor(){
        return $this->color;
        }
}





?>