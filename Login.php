
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log in</title>
    <link rel="stylesheet" href="Login.css">
</head>
<body>
    <div class="center">
        <img src="image/logo 2.jpg" class="logo">
        <h1>Teacher/Admin Log in</h1>
        <form name="form" action="MIS.html" method="POST">
            <div class="txt_field">
                <input type="text" id="username" name="username" required>
                <span></span>
                <label for="username">Username</label>
            </div>
            <div class="txt_field">
                <input type="password" id="password" name="password" required>
                <span></span>
                <label for="password">Password</label>
            </div>
            <div>
                <a href="forgot_password.php" class="passs">Forgot Password?</a><br>
                <a href="forgot_password.php" class="passs">Create New Account</a>
            </div>
           <input type="submit" value="Login">
        </form>   
    </div>
</body>
</html>