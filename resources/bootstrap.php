<?php

use Illuminate\Database\Capsule\Manager as Capsule;


/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require __DIR__ . '/../vendor/autoload.php';
}


/*
|--------------------------------------------------------------------------
| Register Eloquent and database
|--------------------------------------------------------------------------
|
| Initializing the settings of de database and starting Eloquent on it
|
*/

$capsule = new Capsule;
$capsule->addConnection([
    "driver"    => "mysql",
    "host"      => "127.0.0.1",
    "database"  => "test",
    "username"  => "root",
    "password"  => ""
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();


/*
|--------------------------------------------------------------------------
| Register Twig
|--------------------------------------------------------------------------
|
| Initializing Twig for php view templating
|
*/

//$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'\views');
//$twig = new \Twig\Environment($loader, [
//    'cache' => __DIR__.'\compilation_cache',
//]);