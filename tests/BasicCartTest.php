<?php

include "src/Register.php";


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
        $var = new \Rolfisub\BasicCart\BasicCart();
        $this->assertTrue(is_object($var));
        unset($var);
    }

    public function testSomething()
    {
        $o = new \Rolfisub\BasicCart\BasicCart();
        $o->setOrder(new \Rolfisub\BasicCart\Entity\Order());

        var_dump(json_encode($o->getModel()));
    }

}
