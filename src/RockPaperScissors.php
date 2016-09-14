<?php
    class RockPaperScissors{

      function playGame($first_input, $second_input){
        if($first_input === $second_input){
          return "Draw";
        }
        if($first_input === "rock" && $second_input === "scissors"){
          return "Player 1";
        }
        if($first_input === "rock" && $second_input === "paper"){
          return "Player 2";
        }
        if($first_input === "paper" && $second_input === "rock"){
          return "Player 1";
        }
        if($first_input === "paper" && $second_input === "scissors"){
          return "Player 2";
        }
        if($first_input === "scissors" && $second_input === "paper"){
          return "Player 1";
        }
        if($first_input === "scissors" && $second_input === "rock"){
          return "Player 2";
        }
      }
    }
?>
