<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form action="login.php" method="POST">
            <div class='input-group'>
                <label>Username: </label>
                <input type="text" id="username">
            </div>
            <div class='input-group'>
                <label>Password: </label>
                <input type="text" id="password_1">
            </div>
            <div class='input-group'>
                <button type="submit" name="register" class="btn">Login</button>
            </div>
            <p>
                Not yet member? <a href="register.php">Sign up</a>
            </p>
        </form>  

</body>
</html>