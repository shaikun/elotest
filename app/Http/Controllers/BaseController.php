<?php

namespace App\Http\Controllers;

use Twig\Environment;

class BaseController extends Environment
{
    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/elotest/resources/views');
        parent::__construct($loader, [
            'cache' => $_SERVER['DOCUMENT_ROOT'] . '/elotest/resources/compilation_cache',
        ]);
    }
}