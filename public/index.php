<?php

include  __DIR__  . "/../src/App/funtions.php";
//bootstrap  return $app (instance of App class)
$app  = include __DIR__ . '/../src/App/bootstrap.php';  // store instance




$app->run();
