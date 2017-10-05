<?php
namespace controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DefaultController
{
    public function greeting(Application $app)
    {
      return $app['twig']->render('defaultView.html.twig');
    }
}
