<?php

require_once dirname(__FILE__)."/../index.php";

class FactoryMethodTest extends PHPUnit_Framework_TestCase
{
    public function testApptBloggsCal()
    {
        // Кодируем в формат BloggsCal
        $bloggsEncoder = (new BloggsCommsManager())->getApptEncoder();
        $res = $bloggsEncoder->encode();

        $this->assertEquals('Данные Appointment закодированы в формате BloggsCal', $res);
    }

    public function testAppointmentMega()
    {
        // Кодируем в формат Mega
        $megaEncoder = (new MegaCommsManager())->getApptEncoder();
        $res = $megaEncoder->encode();

        $this->assertEquals('Данные Appointment закодированы в формате Mega', $res);
    }

    public function testTtdBloggsCal()
    {
        // Кодируем в формат BloggsCal
        $bloggsEncoder = (new BloggsCommsManager())->getTtdEncoder();
        $res = $bloggsEncoder->encode();

        $this->assertEquals('Данные Ttd закодированы в формате BloggsCal', $res);
    }

    public function testTtdMega()
    {
        // Кодируем в формат Mega
        $megaEncoder = (new MegaCommsManager())->getTtdEncoder();
        $res = $megaEncoder->encode();

        $this->assertEquals('Данные Ttd закодированы в формате Mega', $res);
    }

    public function testContactBloggsCal()
    {
        // Кодируем в формат BloggsCal
        $bloggsEncoder = (new BloggsCommsManager())->getContactEncoder();
        $res = $bloggsEncoder->encode();

        $this->assertEquals('Данные Contact закодированы в формате BloggsCal', $res);
    }

    public function testContactMega()
    {
        // Кодируем в формат Mega
        $megaEncoder = (new MegaCommsManager())->getContactEncoder();
        $res = $megaEncoder->encode();

        $this->assertEquals('Данные Contact закодированы в формате Mega', $res);
    }
}