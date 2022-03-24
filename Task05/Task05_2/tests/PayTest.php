<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\PayPal;
use App\CreditCard;
use App\PayPalAdapter;
use App\CreditCardAdapter;

class PayTest extends TestCase
{
    public function testAdapters()
    {
        $paypal = new PayPal('customer@yandex.com', 'password');
        $cc = new CreditCard(1234567890112233, "01/24");
        $paypalAdapter = new PayPalAdapter($paypal);
        $ccAdapter = new CreditCardAdapter($cc);
        $this -> assertSame("Your authorization code:", $ccAdapter -> collectMoney(1340));
        $this -> assertSame("Payment via PayPal is success!", $paypalAdapter -> collectMoney(100));
    }
}
