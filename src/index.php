<?php
require 'vendor/autoload.php';

use MonApp\BienImmo;
use MonApp\Maison;

$bien = new BienImmo(1000);
$maison = new Maison("5");

var_dump($bien);
var_dump($maison);