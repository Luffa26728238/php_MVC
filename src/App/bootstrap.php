<?php


declare(strict_types=1);

require __DIR__ .  "/../../vendor/autoload.php";

use Framework\App;


$app = new App(); // create instance of app class

$app->get('/', ['App\Controllers\HomeController', 'home']);




dd($app);


return $app;
