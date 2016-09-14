<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RockPaperScissors.php';
    date_default_timezone_set('America/New_York');

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
      return $app['twig']->render('home.html.twig');
    });

    $app->post("/result", function() use ($app){
      $player1 = $_POST['player_one'];
      $player2 = $_POST['player_two'];
      $newGame = new RockPaperScissors;
      $newGame->playGame($player1, $player2);
      return $app['twig']->render('result.html.twig', array('result'=> $newGame, 'player1'=>$player1, 'player2'=>$player2));
    });

    return $app;
?>
