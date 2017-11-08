<?php
use Illuminate\Database\Capsule\Manager as Capsule;

require_once("vendor/autoload.php");

$conn = [
    "driver" => "mysql",
    "host"   => "127.0.0.1",
    "database" => "cinema",
    "username"   => "cinema",
    "password" => "cinema21",
    "port" => 3306,
    "charset" => "utf8",
    "collation" => "utf8_unicode_ci"
];

$capsule = new Capsule();
$capsule->addConnection($conn);

$capsule->setAsGlobal();
$capsule->bootEloquent();