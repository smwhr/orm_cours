<?php

require_once("bootstrap.php");

$console = \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
$console->run();
