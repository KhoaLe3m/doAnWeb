<?php
   
    include "user.php";
?>
<?php
    
    $class = new user();
    
    
    if  ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $userEmail = $_POST['email'];
        $userPass = md5($_POST['password']);
        $login_check = $class->login_user($userEmail,$userPass);
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
    
    <title> Login/Register Form</title>
</head>
<body>
    <div class="container">
        <div id="logreg-forms">
            <form class="form-signin" action="login.php" method="post">
                <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
                <span>
                    <?php
                    if(isset($login_check)){
                        echo $login_check;
                    }
                    ?>
                </span>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" name="email">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="password">
                
                <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
                
                <hr>
                
                <button class="btn btn-primary btn-block" type="button" id="btn-signup"onclick="location.href='signup.php';" ><i class="fas fa-user-plus"></i> Sign up New Account</button>
                </form>
                
                <br>
                
        </div>
    </div>
    
    <style>
        #logreg-forms form {
    width: 100%;
    max-width: 410px;
    padding: 15px;
    margin: auto;
    }
    #logreg-forms{
    width:412px;
    margin:10vh auto;
    background-color:#f3f3f3;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
    }

    </style>
    
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/script.js"></script>
</body>
</html>