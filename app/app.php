<?php

    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/WordFrequency.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        "twig.path" => __DIR__.'/../views'
    ));
    $app['debug'] = true;

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    $app->post("/results", function() use ($app) {
        $new_word_frequency = new WordFrequency($_POST['string'], $_POST['word']);
        $result = $new_word_frequency->wordFrequency();
        return $app['twig']->render('results.html.twig', array('result'=>$result));
    });


    return $app;
