<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet">
	<meta charset="UTF-8">
	<title>Signup</title>
	<style>
		body {
			background: #eee !important;
		}

		.wrapper {
			margin-top: 80px;
			margin-bottom: 80px;
		}

		.form-signin {
			max-width: 380px;
			padding: 15px 35px 45px;
			margin: 0 auto;
			background-color: #fff;
			border: 1px solid rgba(0, 0, 0, 0.1);
		}

		.form-signin-heading {
			margin: auto;
			margin-bottom: 30px;
			
		}



		.form-control {
			position: relative;
			font-size: 16px;
			height: auto;
			padding: 10px;
			@include box-sizing(border-box);
		}

		input[type="text"] {
			margin-bottom: -1px;
			border-bottom-left-radius: 0;
			border-bottom-right-radius: 0;
		}

		.button {
			margin-top: 20px;
			display: block;
			width: 100%;
			padding-right: 0;
			padding-left: 0;
			padding: 10px 16px;
			font-size: 18px;
			line-height: 1.33;
			border-radius: 6px;
			color: #fff;
			background-color: #428bca;
			border-color: #357ebd;

		}

		.warning_message{
			
			margin: auto;
			margin-top: 20px;
			font-size: 18px;
			color: red;
		}
	</style>
</head>

<body>
	<div class="wrapper">
		<form class="form-signin">
			<h2 class="form-signin-heading">Please Signup new User here</h2>
			<input type="text" name="userName" placeholder="User Name" class="form-control">

			<br>


			<button name="signup" value="signup" type="signup" class="button">
				Signup
			</button>
		
	

	<?php
	$wrong_user_name = 0;
	if (isset($_GET['signup'])) { //if user clicked the login button, do following:

		$user_name = $_GET['userName'];

		if($user_name == ""){
			echo "<p class='warning_message'>Please Input a valid user name</p>";
			
		}

		else{
			$h = fopen("../../users.txt", "a+");

		    while (!feof($h)) { //check the user.txt file 
			    $user_in_userstxt = trim(fgets($h));

			    if ($user_name == $user_in_userstxt) { //if the user name exists
				    echo "<p class='warning_message'>User name exists, please change another one.</p>";
                    $wrong_user_name = 1;
			    }
		    }

		    if ($wrong_user_name == 0) { //Sign up if the name does not exists
			
			    $txt = $user_name."\n";
                fwrite($h, $txt);
                mkdir("../../userfiles/".$user_name);
                echo "<p class='warning_message'>Signup Success!</p>";
		    }
		    fclose($h);
		}
		
	}





	?>
	</form>

    <button class="button" onclick="location.href='login_check.php'">Return to Login</button>

</div>
</body>

</html>