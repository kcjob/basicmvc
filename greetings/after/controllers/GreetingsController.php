<?php
namespace controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class GreetingsController
{
  public function hello(Application $app)
  {
    return $app['twig']->render('helloView.html.twig');
  }

  public function bye(Application $app)
  {
    return $app['twig']->render('goodbyeView.html.twig');
  }




}
