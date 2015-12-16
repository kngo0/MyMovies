<?php

// Register service providers.
$app->register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

$app['twig'] = $app->share($app->extend('twig', function(Twig_Environment $twig, $app) {
    $twig->addExtension(new Twig_Extensions_Extension_Text());
    return $twig;
}));

    

// Register services.
$app['dao.category'] = $app->share(function ($app) {
    return new MyMovies\DAO\CategoryDAO($app['db']);
});
$app['dao.movie'] = $app->share(function ($app) {
    $movieDAO = new MyMovies\DAO\movieDAO($app['db']);
    $movieDAO->setCategoryDAO($app['dao.category']);
    return $movieDAO;
});

