<?php
require_once "data/Person.php";

$person = new Person("Wafi", "Malang");
$person->nama = "Wafi";
$person->address = "Malang";


echo "Nama : $person->nama </br>";
echo "Nama : $person->address </br>";
echo "Nama : $person->country </br>";

