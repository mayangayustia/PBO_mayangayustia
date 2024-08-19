<?php
Class Shape{
    function draw(){}
}

class Circle extends Shape{
    function draw()
    {
        print "Circle has been draw.</br>";
    }
}

class Triangle extends Shape{
    function draw()
    {
        print "Triangle has been drawn.";
    }
}

class Ellipse extends Shape{
    function draw()
    {
        print "Ellipse has been drawn.";
    }
}
?>