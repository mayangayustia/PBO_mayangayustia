<?php
Class Shape {
    const PI = 3.142;
    function __call($name,$arg){
        if($name == 'area')
        switch(count($arg)){
            case 0 : return 0;
            case 1 : return 1;
            case 2 : return 2;
        }
    }
}
$circle = new Shape();
echo $circle->area(3);
$rect = new Shape();
echo $rect->area(8,6);
?>