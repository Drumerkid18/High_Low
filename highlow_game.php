<?php

$luckynumber = mt_rand(1, 100);
$count = 0;


do{	

$count++;

fwrite(STDOUT, 'Guess a Number!' . PHP_EOL);

$number = fgets(STDIN);

	if($number == $luckynumber){
		echo 'Congradulations, You Won!' . PHP_EOL;
	} 
	elseif($number < $luckynumber){
		fwrite(STDOUT, 'Higher' . PHP_EOL);
	}
	else {
		fwrite(STDOUT, 'Lower' . PHP_EOL);
	}

} while($number != $luckynumber);

echo "It took you $count tries to get it correct\n";
