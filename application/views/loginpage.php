<html>
        <head>
                <meta charset = "UTF-8">
                <title>BEAM</title>
				<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
				<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
				<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
        </head>
    <body>
		<style>
			body {
				background-image: url('assets/images/bg.jpg');
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: cover;
			}
			.w3-myfont2 {
				font-family: "Allerta Stencil", Sans-serif;
			}
			.w3-myfont {
				font-family: "Lobster", serif;
			}
		</style>
        <div class="">
		<img src="assets/images/logo.png" class="w3-display-topmiddle" alt="logo">
            <div class="w3-display-middle">
				<div class="w3-container">
					<form method="POST" action="authenticate.php">
						<div class="">
							<label class="w3-text-black w3-myfont2"><b>Username</b></label>
							<input class="w3-input w3-border w3-round-large" name="username" id="username" type="text"/>
						</div>
						<div class="">
							<label class="w3-text-black w3-myfont2"><b>Password</b></label>
							<input class="w3-input w3-border w3-round-large" name="password" id="password" type="password"/>
						</div>
						<div class="w3-container w3-center w3-margin-top">
							<input type="submit" name="submit" id="submit" class="w3-myfont2" value="Login"/>
						</div>
					</form>
				</div>
			</div>
			<p class="w3-display-bottommiddle w3-myfont">
				Not a member? <a href="registration.php" class="">Register Here</a>
            </p>
		</div>


    </body>
</html>