<?php

namespace App;
class Parrot extends Animal implements CanFly
{
    protected function getNoise():string
    {
        return "coco \n";
    }
}