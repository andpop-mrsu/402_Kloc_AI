<?php

namespace App;

class Luxury implements HotelRoom
{
    private static $price = 3000;
    private static $description = "Luxury";

    public function getDescription()
    {
        return "Class: " . self::$description;
    }

    public function getPrice()
    {
        return self::$price;
    }
}
