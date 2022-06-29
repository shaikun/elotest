<?php

use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Homepage setup
|--------------------------------------------------------------------------
|
| Homepage initialization for now, to be replaced with routing
|
*/

require "../resources/bootstrap.php";

$testController = new TestController();
echo $testController->index();