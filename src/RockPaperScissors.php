<?php
    class RockPaperScissors{

      public $winningAttack;

      function playGame($first_input, $second_input){
        if($first_input === $second_input){
          return "Draw";
        }

        if($first_input === "rock" && $second_input === "scissors"){
          $this->winningAttack = "rock";
          return "Player 1";
        }
        if($first_input === "rock" && $second_input === "paper"){
          $this->winningAttack = "paper";
          return "Player 2";
        }
        if($first_input === "paper" && $second_input === "rock"){
          $this->winningAttack = "paper";
          return "Player 1";
        }
        if($first_input === "paper" && $second_input === "scissors"){
          $this->winningAttack = "scissors";
          return "Player 2";
        }
        if($first_input === "scissors" && $second_input === "paper"){
          $this->winningAttack = "scissors";
          return "Player 1";
        }
        if($first_input === "scissors" && $second_input === "rock"){
          $this->winningAttack = "rock";
          return "Player 2";
        }
      }

      // function checkWinner(){
      //   if($this->winningAttack === "rock"){
      //     return "rock"
      //   }
      // }
    }
?>
