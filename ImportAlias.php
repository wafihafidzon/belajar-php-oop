<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use data\One\Conflict as Conflict1;
use data\Two\Conflict as Conflict2;
use function Helper\helpMe as Help;
use const Helper\APPLICATION as APP;

$conflict1 = new Conflict1();
$conflict1 = new Conflict2();

Help();
echo APP;