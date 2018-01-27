<?php
	// This will report on PHP errors but it will cause a "Cannot modify header information - headers already sent by ..." error message if header information is already sent
	// error_reporting(E_ALL); ini_set('display_errors', 'on'); echo " "; ob_flush();
	
	if(isset($_GET['message']))
	{
		// load font and image, calculate width of text
		$font = 'C:\Windows\Fonts\times.ttf';
		$size = 12;
		$im = ImageCreateFromPNG('button.png');
		$tsize = imagettfbbox($size, 0, $font, $_GET['message']);

		// center
		$dx = abs($tsize[2] - $tsize[0]);
		$dy = abs($tsize[5] - $tsize[3]);
		$x = ( imagesx($im) - $dx ) / 2;
		$y = ( imagesy($im) - $dy ) / 2 + $dy;

		// draw text
		$black = ImageColorAllocate($im, 0, 0, 0);
		ImageTTFText($im, $size, 0, $x, $y, $black, $font, $_GET['message']);

		// return image
		header('Content-type: image/png');
		ImagePNG($im);
		exit;
	}
?>

<html>
	<head><title>Button Form</title></head>
	
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
			Enter message to appear on button:
			<input type="text" name="message" /><br />
			<input type="submit" value="Create Button" />
		</form>
	</body>
</html>