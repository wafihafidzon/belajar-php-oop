<?php
require_once "data/Person.php";

$wafi = new Person("Wafi", "Malang");
$wafi->nama = "Budi";
$wafi->sayHello("wafi");

$eko = new Person("Budi", "Surabaya");
$eko->nama = "Budi";
$eko->sayHello(null);

$wafi->authorInfo();
$eko->authorInfo();