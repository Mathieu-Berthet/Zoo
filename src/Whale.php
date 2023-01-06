<?php

namespace App;
class Whale extends Animal
{
    protected function getNoise():string
    {
        return "splash \n";
    }
}