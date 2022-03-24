<?php

namespace App;

use App\HotelRoom;

class Economy implements HotelRoom
{
    private static $price = 1000;
    private static $description = "Economy";

    public function getDescription()
    {
        return "Class: " . self::$description;
    }
    public function getPrice()
    {
        return self::$price;
    }
}
