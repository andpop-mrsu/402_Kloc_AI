<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Product;
use App\ProductCollection;
use App\ManufacturerFilter;
use App\MaxPriceFilter;

class FilterTest extends TestCase
{
    public function testFilter()
    {
        $p1 = new Product();
        $p1->name = 'Chocolate';
        $p1->price = 160;
        $p1->discount = 40;
        $p1->manufacturer = 'Red October';

        $p2 = new Product();
        $p2->name = 'Marmalade';
        $p2->price = 120;
        $p2->manufacturer = 'Lamzur';

        $p3 = new Product();
        $p3->name = 'Biscuit';
        $p3->price = 70;
        $p3->manufacturer = 'Lyubyatovo';


        $collection = new ProductCollection([$p1, $p2, $p3]);
        $resultCollection = $collection->filter(new MaxPriceFilter(70));
        $this -> assertSame(2, count($resultCollection -> getProductsArray()));
        $resultCollection = $collection->filter(new ManufacturerFilter('Lamzur'));
        $this -> assertSame(1, count($resultCollection -> getProductsArray()));
        $this -> assertSame('Marmalade', $resultCollection -> getProductsArray()[0] -> name);
    }
}
