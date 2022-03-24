<?php

namespace App;

class Standard implements HotelRoom
{
    private static $price = 2000;
    private static $description = "Standard";

    public function getDescription()
    {
        return "Class: " . self::$description;
    }

    public function getPrice()
    {
        return self::$price;
    }
}
