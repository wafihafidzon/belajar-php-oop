<?php

class Manager {

    var string $nama;
    var string $title;

    public function __construct(string $nama = "", string $title = "Manager")
    {
        $this->nama = $nama;
        $this->title = $title;
    }

    function sayHello(string $nama)
    {
        echo "Hai saya $this->title, Nama saya $nama </br>";
    }
}

class vicePrecident extends Manager {

    public function __construct(string $nama = "")
    {
        return parent::__construct($nama, "VP");
    }

    function sayHello(string $nama)
    {
        echo "Hai saya $this->title, Nama saya $nama </br>";
    }
}