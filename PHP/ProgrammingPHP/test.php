<?php 
/*
	function outer ($a)
	{
		function inner ($b)
		{
			echo "there $b";
		}
		
		echo "$a, hello ";
	}

	// outputs "well, hello there reader"
	outer("well");
	inner("reader");
*/
?>

<!DOCTYPE html>
<html>
	<body>

	<?php
/*
		echo "Echo: <h2>PHP is Fun!</h2>";
		echo "Echo: Hello world!<br>";
		echo "Echo: I'm about to learn PHP!<br>";
		echo "Echo: This ", "string ", "was ", "made ", "with multiple parameters.";
		
		print "Print: <h2>PHP is Fun!</h2>";
		print "Print: Hello world!<br>";
		print "Print: I'm about to learn PHP!<br>";
		$txt1 = "Learn PHP";
		$txt2 = "W3Schools.com";
		print "Print: $txt1 . Study PHP at " . $txt2 . "<br>";
		print "Print: This " . "string " . "was " . "concatenated " . "with multiple strings.";
		print nl2br("<br><br>");
		
		$array = array("really long string here, boy", "this", "middling length", "larger");
		usort($array, function($a, $b) {
		 return strlen($a) - strlen($b);
		});
		
		print_r($array);
*/

		echo 'Current PHP version: ' . phpversion(). '<br>';		
		
		$n = 12;
		echo "You are the {$n}th person";
		print nl2br("<br>");
		echo "You are the $n th person";
		
		$bar = "this is not printed";
		$foo = "$bar"; // single quotes
		print("<br>$foo<br>");
		
		$string = str_pad('Fred Flintstone', 30, "-");
		echo "{$string}:35:Wilma<br>";

		preg_match("/(.*), (.*)/", "First, Last", $output_array);
		print_r($output_array);
		
		print("<br>");
		
		preg_match("/(,)/", "You have 42 magic, beans", $test);
		print_r($test);
		
		print("<br>");
		
		preg_match("/([0-9]+)/", "You have 42 magic beans", $captured);
		print_r($captured);
		
		print("<br>");
		
$message = <<< END
	To: you@youcorp
	From: me@mecorp
	\nSubject: pay up
	Pay me or else!
END;

		preg_match("/^subject: (.*)/im", $message, $match);
		print_r($match);
		
		print("<br>");
		
		$p = '/(a+|b+)*\.+$/';
		$s = 'abababababbabbbabbaaaaaabbbbabbababababababbba..!';
		
		if (preg_match($p, $s)) 
		{
			echo "Y";
		}
		else 
		{
			echo "N";
		}
	?> 

	</body>
</html>