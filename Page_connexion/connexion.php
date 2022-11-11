<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/connexion.css">
    <link  rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"> 
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <title>Connexion</title>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form method="POST" action="session_administration.php" class="box">
                    <h1>Login</h1>
                    <p class="text-muted"> Please enter your login and password!</p> 
                    <input type="text" name="Username" placeholder="Username" id="Username"> 
                    <input type="password" name="password" placeholder="Password" id="password"> 
                   <!-- <a class="forgot text-muted" href="#">Forgot password?</a> -->
                    <p id="sp"></p>
                    <input type="submit" name="" value="Login" href="#" id="button">
                    <div class="col-md-12">
                        <ul class="social-network social-circle">
                            <li><a href="https://www.facebook.com" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.Twitter.com" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.Google.com" class="icoGoogle" title="Google +"><i class="fab fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
</body>
</html>
