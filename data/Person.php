<?php
class Person
{
    const AUTHOR = "Progarammer Zaman Now";

    var string $nama;
    var ?string $address = null;
    var string $country = "Indonesia";

    function __construct(string $nama , ?string $address)
    {
        $this->nama = $nama;
        $this->address = $address;
    }

    function sayHello(?string $nama)
    {
        if(is_null($nama)){
            echo "Hi, my name is $this->nama </br>";
        }else{
            echo "Hi $nama, my name is $this->nama </br>";
        }
    }

    function authorInfo()
    {
        echo "Author : " . self::AUTHOR . "</br>"; 
    }
}