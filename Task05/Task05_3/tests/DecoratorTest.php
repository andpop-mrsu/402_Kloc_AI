<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Economy;
use App\Standard;
use App\Luxury;
use App\DedicatedInternet;
use App\AdditionalSofa;
use App\FoodDelivery;
use App\Dinner;
use App\BreakfastBuffet;

class DecoratorTest extends TestCase
{
    public function testDecorator()
    {
        $hotelRoom1 = new Economy();
        $hotelRoom1 = new DedicatedInternet($hotelRoom1);
        $hotelRoom1 = new Dinner($hotelRoom1);
        $this -> assertSame("Class: Economy, dinner, dedicated Internet", $hotelRoom1 -> getDescription());
        $this -> assertSame(1900, $hotelRoom1 -> getPrice());
        $hotelRoom2 = new Standard();
        $hotelRoom2 = new FoodDelivery($hotelRoom2);
        $this -> assertSame("Class: Standard, room service", $hotelRoom2 -> getDescription());
        $this -> assertSame(2300, $hotelRoom2 -> getPrice());
    }
}
