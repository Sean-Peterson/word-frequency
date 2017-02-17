<?php

    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/WordFrequency.php";

    $app = new Silex\Application();

    session_start();
    if (empty($_SESSION['chess'])) {
      $_SESSION['chess'] = array();
    }


    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        "twig.path" => __DIR__.'/../views'
    ));
    $app['debug'] = true;

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig', array('something'=>$something));
    });


    return $app;
