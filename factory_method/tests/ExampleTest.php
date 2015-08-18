<?php

require_once dirname(__FILE__)."/../index.php";

class FactoryMethodTest extends PHPUnit_Framework_TestCase
{
    public function testBloggsCal()
    {
        // Кодируем в формат BloggsCal
        $bloggsEncoder = (new BloggsCommsManager())->getApptEncoder();
        $res = $bloggsEncoder->encode();

        $this->assertEquals('Данные закодированы в формате BloggsCal', $res);
    }

    public function testMega()
    {
        // Кодируем в формат Mega
        $megaEncoder = (new MegaCommsManager())->getApptEncoder();
        $res = $megaEncoder->encode();

        $this->assertEquals('Данные закодированы в формате Mega', $res);
    }
}