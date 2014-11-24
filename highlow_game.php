<?php

$luckynumber = rand(1, 100);



do{	

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

