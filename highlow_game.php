<?php

$count = 0;

if ($argc == 3){

	if (is_numeric($argv[1])){
		$low = $argv[1];
	}
		else {
			echo "Please input numeric value for low number\n";
			$low = trim(fgets(STDIN));
			echo "\n";
		}
	if (is_numeric($argv[2])){
		$high = $argv[2];
	}
		else {
			echo "Please input numeric value for high number\n";
			$high = trim(fgets(STDIN));
			echo "\n";
		}
	
} 
else {
	$low = 1;
	$high = 100;

}
$luckynumber = mt_rand($low, $high);

do {	

	$count++;

	fwrite (STDOUT, 'Guess a Number!' . PHP_EOL);

		$number = trim(fgets(STDIN));
		if (is_numeric($number)){

			if ($number == $luckynumber){
				echo 'Congradulations, You Won!' . PHP_EOL;
			} 
			elseif ($number < $luckynumber){
				fwrite(STDOUT, 'Higher' . PHP_EOL);
			}
			else {
				fwrite(STDOUT, 'Lower' . PHP_EOL);
			}
		}
		else {
			fwrite(STDOUT, "Sorry, Please input numeric value\n");
		}

} while ($number != $luckynumber);

echo "It took you $count tries to get it correct\n";


