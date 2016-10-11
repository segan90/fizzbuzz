
Hi <?php echo htmlspecialchars($_POST['name']); ?>.
Your desired number is: <?php echo (int)$_POST['numb']; ?> .<br>



<h2>Let's start iterate FIZZYBUZZY:</h2><br>

<?php

for ($i = 1; $i <= $_POST['numb']; $i++)
	{
	if($i % 3 == 0 && $i % 5 == 0) {
		echo "FizzBuzz <br />";	
	}
	else if($i % 3 == 0) {
		echo "Fizz <br />";
	}
	else if($i % 5 == 0) {
		echo "Buzz <br />";		
	}
	else {
		echo $i."<br />";	
	}	
}
	
?>
