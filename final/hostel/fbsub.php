<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>feedback form</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link href="images/logo.png" rel="icon" type="image/png" />
</head>

<body>

	<div id="page-wrap">

		<img src="images/title1.gif" alt="NITT Feedback Form" /><br /><br />
				
		<div id="contact-area">
			
			<form method="post" action="afterfb.php">
				<label for="Name">Roll No:</label>
				<input type="text" name="roll" id="Name" />
				
				<label for="Message">Feedback:</label><br />
				<textarea name="fb" rows="20" cols="20" id="Message"></textarea>

				<input type="submit" name="submit" value="Submit" class="submit-button" />
			</form>
			<br><br><br><br><br><br>
			<h1><font color="red">Your feedback can improve our services</font></h1>
			
			
		</div>
	
	</div>

</body>

</html>