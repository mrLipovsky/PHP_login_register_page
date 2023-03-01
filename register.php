<?php include('server.php');  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<form action="register.php" method="post">
    <!-- display validation error here-->
    <?php include('errors.php');  ?>
            <div class='input-group'>
                <label>Username: </label>
                <input type="text" id="username" value="<?php echo $username; ?>">
            </div>
            <div class='input-group'>
                <label>Email: </label>
                <input type="email" id="email" value="<?php echo $email; ?>">
            </div>
            <div class='input-group'>
                <label>Password: </label>
                <input type="text" id="password_1">
            </div>
            <div class='input-group'>
                <label>Confirm Password: </label>
                <input type="text" id="password_2">
            </div>
            <div class='input-group'>
                <button type="submit" name="register" class="btn">Register</button>
            </div>
            <p>
                Already member? <a href="login.php">Sign in</a>
            </p>
        </form>  

</body>
</html>