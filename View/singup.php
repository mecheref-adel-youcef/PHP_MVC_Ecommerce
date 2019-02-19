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
				<br>

				<form class="login-form " method="post" action="index.php?action=inscription">
					<span class="login-form-title">
						 Create Account
					</span>

				</hr>


					<div class="wrap-input " data-validate = "Valid email is required: ex@abc.xyz">
                            
							<input class="input" type="text" name="first_name" placeholder="First Name">
							<span class="focus-input"></span>
							<span class="symbol-input">
								<i class="fa fa-user" aria-hidden="true"></i>
							</span>
							
							
					</div>

					<div class="wrap-input " data-validate = "Valid email is required: ex@abc.xyz">
                            
							<input class="input" type="text" name="last_name" placeholder="Last Name">
							<span class="focus-input"></span>
							<span class="symbol-input">
								<i class="fa fa-user" aria-hidden="true"></i>
							</span>
							
							
					</div>

					<div class="wrap-input " data-validate = "Valid email is required: ex@abc.xyz">
                            
                        <input class="input" type="email" name="email" placeholder="Email">
						<span class="focus-input"></span>
						<span class="symbol-input">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
						
						
					</div>


                    <?php if (isset($errors)): ?>
                        <?=$errors?>
                    <?php endif;?>
					<div class="wrap-input " data-validate = "Password is required">
                            
						<input class="input" type="password" name="password_1" placeholder="Password">
						<span class="focus-input"></span>
						<span class="symbol-input">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						
					</div>


					<div class="wrap-input " data-validate = "Password is required">
                            
							<input class="input" type="password" name="password_2" placeholder="Repeat Password">
							<span class="focus-input"></span>
							<span class="symbol-input">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
							
						</div>

                    <div class="wrap-input " data-validate = "Valid email is required: ex@abc.xyz">

                        <input class="input" type="text" name="adress" placeholder="Adress">
                        <span class="focus-input"></span>
                        <span class="symbol-input">
								<i class="fa fa-user" aria-hidden="true"></i>
							</span>


                    </div>

					<div class="text-center p-t-12">
							<label  for="ckb1">
								<span class="txt1">
									Already a member ?
								</span>
								<a class="txt2" href="index.php?action=login">
										Log in
								</a>	
							</label>
					</div>
		
					<div class="container-login-form-btn">
						<button class="login-form-btn" name="sing-up">
							Sing up
						</button>
					</div>

					
						 
					
				</form>
			</div>
		</div>
		
	</div>
	

	

</body>
</html>