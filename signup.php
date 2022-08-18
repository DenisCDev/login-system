<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/index.css" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>Sign up</title>
</head>
<body>
 <form>
    <h1>New Account</h1>
    
    <div class="geral-error animate__animated animate__shakeX">
        Error to the final user
    </div>

    <div class="input-group">
        <img class="input-icon" src="img/name.png" alt="name">
        <input class="error-input" type="text" placeholder="Type your complete name">
        <div class="error">
            Please inform a valid name
        </div>
    </div>

    <div class="input-group">
        <img class="input-icon" src="img/email.png" alt="email">
        <input type="email" placeholder="Type your email">
    </div>

    <div class="input-group">
        <img class="input-icon" src="img/password1.png" alt="createpassword">
        <input type="passsword" placeholder="Type your password">
    </div>

    <div class="input-group">
        <img class="input-icon" src="img/password2.png" alt="confirmpassword">
        <input type="password" placeholder="Repeat your password">
    </div>

    <div class="input-group">
        <input type="checkbox" id="terms" name="terms">
        <label>By registering you agree to our <a class="link" href="">privacy policy</a> and <a href="">terms of use</a></label>
    </div>

    <button class="btn-green" type="submit">Sign up</button>
    <a href="index.php">Sign in</a>
 </form> 
</body>
</html>