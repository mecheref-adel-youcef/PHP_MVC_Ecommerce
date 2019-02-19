<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="Public/images/icons/favicon.ico"/>
<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="Public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    
    <link rel="stylesheet" type="text/css" href="Public/css/Login.css">
</head>
<body>
    
    <div class="limiter">
		<div class="container-login">
			<div class="wrap-login">
				<div >
					<img src="Public/images/img-01.png" alt="IMG">
				</div>

				<form class="login-form " method="post" action="index.php?action=test_connexion">
					<span class="login-form-title">
						 Login
					</span>
                    <?php if (isset($errors)): ?>
                    <?=$errors?>
                    <?php endif;?>
                    <div class="wrap-input " data-validate = "Valid email is required: ex@abc.xyz">
                            
                        <input class="input" type="email" name="email" placeholder="Email">
						<span class="focus-input"></span>
						<span class="symbol-input">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
						
						
					</div>

					<div class="wrap-input " data-validate = "Password is required">
                            
						<input class="input" type="password" name="password" placeholder="Password">
						<span class="focus-input"></span>
						<span class="symbol-input">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						
					</div>
					
					<div class="container-login-form-btn">
						<button class="login-form-btn" name="login">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Not yet a member ?
						</span>
						<a class="txt2" href="index.php?action=singup">
							Sign up
						</a>

					</div>
				</form>
			</div>
		</div>
		
	</div>
	

	

</body>
</html>