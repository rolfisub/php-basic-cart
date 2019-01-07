<?php

include "src/Register.php";

use Rolfisub\BasicCart\Entity\Address;
use Rolfisub\BasicCart\Entity\Customer;
use Rolfisub\BasicCart\Entity\Item;
use Rolfisub\BasicCart\Entity\Order;
use Rolfisub\BasicCart\BasicCart;

use PHPUnit\Framework\TestCase;


class BasicCartTest extends TestCase
{

    /**
     * Just check if the BasicCart has no syntax error
     *
     * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
     * any typo before you even use this library in a real project.
     *
     */
    public function testIsThereAnySyntaxError()
    {
        $var = new BasicCart();
        $this->assertTrue(is_object($var));
        unset($var);
    }

    public function testSomething()
    {
        $o = new BasicCart(
            new Order(

            )
        );

        var_dump(json_encode($o->getModel(), JSON_PRETTY_PRINT));
    }

}
