<?php
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase {

    function testGetHello() {
        $h = new Hello();
        $value = $h->getHello;
        $this->assertEquals($value, "hello");
    }
}