<?php
	
	// LOGIN.PHP
	
	$name_error = "";
	$email_error = "";
	$password_error = "";
	$create_password_error = "";
	$create_email_error = "";
	
	//kontrollime, et keegi vajutas input nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo "keegi vajutas nuppu";
		
		
		if (isset($_POST["login"])) {
			
			//kontrollin, et e-post ei ole tühi
			if (empty($_POST["email"])) {
				$email_error = "See väli on kohustuslik";
				
			}
				
			//kontrollin, et parool ei ole tühi
			if (empty($_POST["password"])) {
				$password_error = "See väli on kohustuslik";
			} else {
				
				//kui oleme siia jõudnud, siis parool ei ole tühi
				//kontrollin, et oleks vähemalt 8 sümbolit pikk
				if(strlen($_POST["password"]) <8) {
					
					$password_error = "Peab olema vähemalt 8 tähemärki pikk";
				
				}
				
			}
		}
		else //registration field errors
		{
			if (empty($_POST["username"])) {
				$name_error = "See väli on kohustuslik";
				
			}
			if (empty($_POST["fullname"])) {
				$name_error = "See väli on kohustuslik";
				
			}
			if (empty($_POST["create_email"])) {
				$create_email_error = "See väli on kohustuslik";
				
			}
			if (empty($_POST["create_password"])) {
				$create_password_error = "See väli on kohustuslik";
			} else {
				
				
				if(strlen($_POST["create_password"]) <8) {
					
					$create_password_error = "Peab olema vähemalt 8 tähemärki pikk";
				
				}
				
			}
		}
	}	
	
		
	
?>
<html>
<head>
	<title>Kasutaja leht</title>
</head>
<body>
	<FONT FACE="arial">
	
	<h2>Logi sisse</h2>
	
	<form action="login.php" method="post">
		<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?> <br><br>
		<input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?> <br><br>
		<input type="submit" name="login" value="Logi sisse">
	</form>	
		
	<h2>Loo kasutaja</h2>
	
	<form action="login.php" method="post">
		<input name="fullname" type="text" placeholder="Täisnimi"> <?php echo $name_error; ?> <br><br>
		<input name="username" type="name" placeholder="Kasutajanimi"> <?php echo $name_error; ?> <br><br>
		<input name="create_email" type="email" placeholder="E-post"> <?php echo $create_email_error; ?> <br><br>
		<input name="create_password" type="password" placeholder="Parool"> <?php echo $create_password_error; ?> <br><br>
		<input type="submit" value="Sisesta">
	</form>	
	
	</FONT>
	
</body>

</html>