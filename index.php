<?php
namespace App;

use App;
use App\Home;
use App\Welcome;

include_once("vendor/autoload.php");

$home = new Home();
$home->index();

