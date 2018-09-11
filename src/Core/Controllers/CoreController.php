<?php
namespace Core\Controllers;


use Silex\Application;

class CoreController
{
    public function index(Application $app) {
        return $app['twig']->render('core/index.html.twig');
    }
}