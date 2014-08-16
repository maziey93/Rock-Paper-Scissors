/* Rules:

  -Rock breaks Scissors
  -Scissors cuts Paper
  -Paper covers Rock

*/

<?php

/* 
script for rock paper scissors game

*/

$new = array("rock", "paper", "scissors");
 $input1 = $new[array_rand($new)];
 Print "First player is: ".strtoupper($input1)."<br>";
 $input2 = $new[array_rand($new)];
 Print "Second player is: ".strtoupper($input2)."<br>";


switch ($input1) {
	case "rock":
	if ($input2 == "paper") {
		echo "paper wins";
	}
	else if ($input2 == "scissors"){
		echo "rock wins";
	}
	break;

	case "paper":
	if ($input2 == "rock") {
		echo "paper wins";
	}
	elseif ($input2 == "scissors") {
		echo "rock wins";
	}
	break;

	case "scissors":
	if ($input2 == "rock") {
		echo "rock wins";
	}
	elseif ($input2 == "paper" ) {
		echo "scissors loses";
	}
	break;

	default:
	if ($input1 == $input2) {
		echo "its a tie!";
	}
}
