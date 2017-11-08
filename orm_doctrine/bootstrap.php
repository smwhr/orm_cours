<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once("vendor/autoload.php");

$config = Setup::createAnnotationMetadataConfiguration([
    __DIR__."/src"
  ], true);

$conn = [
    "driver" => "pdo_mysql",
    "host"   => "127.0.0.1",
    "dbname" => "cinema",
    "user"   => "cinema",
    "password" => "cinema21"
];

$entityManager = EntityManager::create($conn, $config);