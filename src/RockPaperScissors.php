<?php
    class RockPaperScissors{

      public $winningAttack;
      public $computerHand;

      function playGame($first_input, $second_input){
        if($first_input === Null && $second_input === Null){
          return Null;
        }
        else if($first_input === $second_input){
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

      function computerAI() {
        $computerchoice = rand(1,3);
        $computerHand;
        if($computerchoice <= 1){
          $this->computerHand = "rock";
        }
        if($computerchoice <= 2 && $computerchoice > 1){
          $this->computerHand = "paper";
        }
        if($computerchoice <= 3 && $computerchoice > 2){
          $this->computerHand = "scissors";
        }
      }
    }
?>
