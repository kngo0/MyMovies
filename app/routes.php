<?php

use Symfony\Component\HttpFoundation\Request;

// Page d'accueil
$app->get('/', function () use ($app) {
    return $app['twig']->render('index.html.twig');
})->bind('home');

// Détails sur un film
$app->get('/movie/{id}', function($id) use ($app) {
    $movie = $app['dao.movie']->find($id);
    return $app['twig']->render('film.html.twig', array('movie' => $movie));
})->bind('movie');

// Liste de tous les films
$app->get('/movie/', function() use ($app) {
    $movies = $app['dao.movie']->findAll();
    return $app['twig']->render('films.html.twig', array('movies' => $movies));
})->bind('movies');



