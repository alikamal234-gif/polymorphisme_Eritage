<?php

abstract class Shape
{
    public function whatAmI(): string
    {
        return "I'm a shape";
    }

    abstract public function calculateSurface(): float;

}

class Da2ira extends Shape
{
    private $r;
    public function __construct($r)
    {
        $this->r = $r;
    }

    public function whatAmI(): string
    {
        return "Ana Da2ira";
    }

    public function calculateSurface(): float
    {
        return 3.14 * $this->r * $this->r;// (Pi*r^2)
    }
}

class Moraba3 extends Shape
{
    private $dil3;


    public function __construct($dil3)
    {
        $this->dil3 = $dil3;
    }

    public function whatAmI(): string{
        return parent::whatAmI(). ", But exactly I'm a Moraba3";
    }


    public function calculateSurface(): float
    {
        return $this->dil3 * $this->dil3;
    }

    public static function goodBye(){
        echo " I'm a static function";
    }
}

// $s= new Shape();

$c = new Da2ira(2);

$m = new Moraba3(4);

echo $c->calculateSurface() . "\n";
echo $c->whatAmI() . "\n";
echo $m->calculateSurface() . "\n";
echo $m->whatAmI() . "\n";

Moraba3::goodBye();