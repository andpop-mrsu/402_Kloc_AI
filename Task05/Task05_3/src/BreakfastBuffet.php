<?php

namespace App;

use App\HotelRoom;
use App\AdditionalServices;

class BreakfastBuffet extends AdditionalServices
{
    private static $price = 500;

    public function getDescription()
    {
        return $this -> hotelRoom -> getDescription() . ", buffet breakfast";
    }

    public function getPrice()
    {
        return $this -> hotelRoom -> getPrice() + self::$price;
    }
}
