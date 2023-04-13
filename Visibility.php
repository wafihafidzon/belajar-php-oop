<?php

require_once "data/Product.php";

$apel = new Product("Apel", "23000");

echo $apel->getNama();
echo $apel->getHarga();