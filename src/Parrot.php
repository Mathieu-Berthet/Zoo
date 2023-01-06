<?php

namespace App;
class Parrot extends Animal implements CanFly
{
    protected function getNoise():string // Le cri du perroquet
    {
        return "coco \n";
    }
}