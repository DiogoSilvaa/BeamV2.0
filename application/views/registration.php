<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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

        <section class="">
			<img src="assets/images/logo.png" class="w3-display-topmiddle" alt="logo">
            <div class="w3-display-middle">
                <div class="w3-container">
                    <form action="process.php" method="POST"  id="" class="w3-container">
                        <h2 class=""></h2>
                        <div class="">
							<label class="w3-text-black w3-myfont2"><b>Username</b></label>
                            <input type="text" class="w3-input w3-border w3-round-large" name="username" id="username" required/>
                        </div>
                        <div class="">
							<label class="w3-text-black w3-myfont2"><b>Password</b></label>
                            <input type="password" class="w3-input w3-border w3-round-large" name="password" id="password" required/>
                        </div>
                        <div class="">
							<label class="w3-text-black w3-myfont2"><b>Confirm Password</b></label>
                            <input type="password" class="w3-input w3-border w3-round-large" name="password1" id="password1" required/>
                        </div>
						<div class="">
							<label class="w3-text-black w3-myfont2"><b>Administrator Code</b></label>
                            <input type="text" class="w3-input w3-border w3-round-large" name="admincode" id="admincode" required/>
                        </div>           
                        <div class="w3-container w3-center w3-margin-top">
                            <input type="submit" name="submit" id="submit" class="w3-myfont2" value="Register"/>
                        </div>
                    </form>
                </div>
            </div>
				<p class="w3-display-bottommiddle w3-myfont">
					Already a member? <a href="loginpage.php" class="">Log In Here</a>
                </p>
        </section>

    </div>

   
</body>
</html>