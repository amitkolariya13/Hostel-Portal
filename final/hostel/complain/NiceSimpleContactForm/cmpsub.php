<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Complain Box</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link href="images/logo.png" rel="icon" type="image/png" />
</head>

<body>

	<div id="page-wrap">

		<img src="images/title.gif" alt="NITT Complain Box" /><br /><br />
				
		<div id="contact-area">
			
			<form method="post" action="aftercmp.php">
				<label for="Name">Roll No:</label>
				<input type="text" name="roll" id="Name" />
				
				<label for="City">Address:</label>
				<input type="text" name="add" id="City" />
	
				<label for="Message">Complain:</label><br />
				<textarea name="cmp" rows="20" cols="20" id="Message"></textarea>

				<input type="submit" name="submit" value="Submit" class="submit-button" />
			</form>
			<br><br><br><br><br><br>
			<h1><font color="red">Your complain Will be taking care soon</font></h1>
			
			
		</div>
	
	</div>

</body>

</html>

