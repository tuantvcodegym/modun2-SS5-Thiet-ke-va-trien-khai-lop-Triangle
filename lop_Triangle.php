<?php
class Triangke{
    public $side1 = 1.0;
    public $side2 = 1.0;
    public $side3 = 1.0;
}
class Shape extends Triangke{
    function __construct($side1, $side2, $side3){
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }
    function getArea(){
        $a = $this->side1 + $this->side2 + $this->side3;
        $b = $this->side1+$this->side2-$this->side2;
        $c = $this->side2+$this->side3-$this->side1;
        $d = $this->side3+$this->side1-$this->side2;
        return sqrt(($a*$b*$c*$d) / 4) . '<br>';
    }
    function getPerimeter(){
        return $this->side1+$this->side2+$this->side3 . '<br>';
    }
    function tostring(){
        echo 'Tam giac co cac canh la: ' . $this->side1 . ' ' . $this->side2 . ' ' . $this->side3;
    }
}
$triangke = new Shape(12,5,10);
echo $triangke->getArea();
echo $triangke->getPerimeter();
echo $triangke->tostring();
?>