<?php

namespace App;

use App\HotelRoom;
use App\AdditionalServices;

class AdditionalSofa extends AdditionalServices
{
    private static $price = 500;

    public function getDescription()
    {
        return $this -> hotelRoom -> getDescription() . ", additional sofa";
    }

    public function getPrice()
    {
        return $this -> hotelRoom -> getPrice() + self::$price;
    }
}
