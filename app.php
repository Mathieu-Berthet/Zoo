<?php
namespace App;

require __DIR__ . '/vendor/autoload.php';
//require __DIR__ . '/src/Animal.php';

$animals = [new Fish("Poisson 1 "),
            new Fish("Poisson 2 "),
            new Fish("Poisson 3 "),
            new Fish("Poisson 4 "),
            new Fish("Poisson 5 "),
            new BubbleFish("Poisson bulle 1 "),
            new BubbleFish("Poisson bulle 2 "),
            new BubbleFish("Poisson bulle 3 "),
            new CatFish("Poisson chat 1 "),
            new CatFish("Poisson chat 2 "),
            new ClownFish("Poisson clown "),
            new Elephant("Elephant 1 "),
            new Elephant("Elephant 2 "),
            new Zebra("Zebre "),
            new Parrot("Perroquet 1 "),
            new Parrot("Perroquet 2 "),
            new Parrot("Perroquet 3 "),
            new Parrot("Perroquet 4 "),
            new Parrot("Perroquet 5 "),
            new Parrot("Perroquet 6 "),
            new Parrot("Perroquet 7 "),
            new Parrot("Perroquet 8 "),
            new Parrot("Perroquet 9 "),
            new Parrot("Perroquet 10 "),
            new Dove("Colombe 1 "),
            new Dove("Colombe 2 ")];


foreach($animals as $animal)
{
    echo $animal->getName()."fait : ".$animal->Noise();
}