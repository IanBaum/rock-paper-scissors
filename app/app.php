<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RockPaperScissors.php';
    date_default_timezone_set('America/New_York');

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
      return $app['twig']->render('home.html.twig');
    });

    $app->get('/oneplayer', function() use ($app) {
      return $app['twig']->render('one_player.html.twig');
    });

    $app->get('/twoplayer', function() use ($app) {
      return $app['twig']->render('two_player.html.twig');
    });

    $app->post("/result_one", function() use ($app){
      $player1 = $_POST['player_one'];
      $player2 = $_POST['player_two'];
      $newGame = new RockPaperScissors;
      $newGame->playGame($player1, $player2);
      return $app['twig']->render('result.html.twig', array('result'=> $newGame, 'player1'=>$player1, 'player2'=>$player2));
    });

    $app->post("/result_two", function() use ($app){
      $newGame = new RockPaperScissors;
      $newGame->computerAI();
      $player1 = $_POST['player_one'];
      $player2 = $newGame->computerHand;
      $newGame->playGame($player1, $player2);
      return $app['twig']->render('result.html.twig', array('result'=> $newGame, 'player1'=>$player1, 'player2'=>$player2));
    });

    return $app;
?>
