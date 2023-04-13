<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use data\One\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conlict1 =  new Conflict();
$conlict2 =  new Conflict();

helpMe();
echo APPLICATION;

