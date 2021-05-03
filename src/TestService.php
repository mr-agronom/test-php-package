<?php
namespace TestPHPPackage;

class TestService
{
    public static function hello(string $name = 'mr Agronom')
    {
        echo 'Hello ' . $name;
    }
}