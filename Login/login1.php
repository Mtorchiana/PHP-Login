<!--   
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link type="text/css" rel="stylesheet" href="Formato.css"  media="screen,projection"/>
    <title>Login</title>

</head>
<body>
    <div class="container">
        <h1>Bienvenido</h1>
    <form class="loginform" name="loginformulario" id="loginformulario" action="index.php?action=log"  method="post">
          <div class="">
            <input  placeholder="Email" id="Mail" type="mail" name="Mail" required="required">
            </div>
            <div class="blue-text text-darken-2">
            <input id="Password" placeholder="Password" type="password" name="Password"  required="required">
            </div>
          <button class="btingresar" type="submit" name="action">Ingresar</button>
            <p class="btregistrarse"><a href="Signup.php">Registrarse</a></p>
</form>
</body>
</html>-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/util.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="container">
            <div class="container-login">
                <div class="wrap-login">
                    <form class="login-form validate-form">
                        <div class="iso"></div>
                        <span class="login-title p-b-43">
                            Login
                        </span>
                    
                        <div class="wrap-input validate" data-validate = "Valid email is required">
                            <span class="label-input">E-mail: </span>
                            <input class="input1" type="text" name="email">
                            <span class="focus-input"></span>
                            </span>
                        </div>

                        <div class="wrap-input validate" data-validate="Password is required">
                            <input class="input1" type="password" name="pass" placeholder="Constraseña">
                            <span class="focus-input"></span>
                        </div>
                        
                        <div class="contact-form-checkbox">
                            <input class="input-checkbox" id="check" type="checkbox">
                            <label class="label-checkbox" for="check">
                                Recordar mis datos
                                <a href="#" class="forgot">Olvidé mi contraseña</a>
                            </label>
                        </div>

                        <div class="container-login-btn">
                            <button class="login-btn">Login</button>
                        </div>
                    </form>
                </div>
        <script src="js/main.js"></script>
        
            </div>
    </body>
