<?php

$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "I'm going to think of numbers between 1 and 10 (inclusive). Do you think you can guess correctly?\n";

function guessNumber(){
  global $play_count, $correct_guesses, $guess_high, $guess_low;
  $play_count++;
  $rand = rand(1,10);
  echo "\n Make your guess: \n";
  $response = readline(">> ");
  $guess = intval($response);
  echo "Round: $play_count\nMy Number: $rand\nYour guess: $guess";
    if ($guess === $rand){
        $correct_guesses++; 
    }

    if ($guess > $rand){
        $guess_high++;
    }

    if ($guess < $rand){
        $guess_low++;
    }
    
    if ($guess > 10) {
      echo "\nToo high! (Keep it below 10)\n";
    } elseif ($guess < 0) {
      echo "\nToo low! (Keep it above 0)\n";
    }

    $percent_correct = $correct_guesses/$play_count * 100;
    echo "\nYou get the number correct $percent_correct % of the time after $play_count rounds!\n";
    if ($guess_high > $guess_low) {
      echo "When you guessed wrong, you tended to guess high.";
      } else {
        echo "When you guessed wrong, you tended to guess low.";
      }
};

guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
