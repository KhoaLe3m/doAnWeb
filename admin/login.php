
<?php
    
    include "../views/user.php";
?>
<?php
    
    $class = new User();
    
    
    if  ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $adminEmail = $_POST['adminEmail'];
        $password = md5($_POST['password']);
        $login_check = $class->login_admin($adminEmail,$password);
        
    }
    
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
	
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="login.php" method="post">
			<h1>Admin Login</h1>
			<span>
                    <?php
                    if(isset($login_check)){
                        echo $login_check;
                    }
                    ?>
            </span>
			<div>
				<input type="text" placeholder="Email" required="" name="adminEmail"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#"></a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>