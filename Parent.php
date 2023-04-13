<?php

require_once "data/Shape.php";

use Shape\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorner();

$rectangle = new Rectangle();
echo $rectangle->getCorner();
echo $rectangle->getCornerParent();