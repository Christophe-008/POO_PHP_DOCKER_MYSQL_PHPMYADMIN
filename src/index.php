<?php
require 'vendor/autoload.php';

use MonApp\BienImmo;
use MonApp\Maison;
use MonApp\DBconfig;

$bien = new BienImmo(1000);
$maison = new Maison("5");

$db = new DBconfig;
// var_dump($db);
$db->connect();

var_dump($bien);
var_dump($maison);