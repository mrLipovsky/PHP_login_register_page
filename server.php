<?php 
session_start();

$username = "";
$email = "";
$errors = array();
// connect to DB
$db = mysqli_connect('localhost', 'root', '', 'registration');

if (isset($_POST['registration'])) {
    $username = mysql_real_escape_string($_POST['username']);
    $email = mysql_real_escape_string($_POST['email']);
    $password_1 = mysql_real_escape_string($_POST['password_1']);
    $password_2 = mysql_real_escape_string($_POST['password_2']);


//ensure that form field are filed properly
if (empty($username)) {
    array_push($errors, "Username is reguired");
}
if (empty($email)) {
    array_push($errors, "Email is reguired");
}
if (empty($password_1)) {
    array_push($errors, "Password is reguired");
}
if ($password_1 != $password_2) {
    array_push($errors, "Confirm password is reguired");
}


// if there is not erro save user to DB
if (count($errors) == 0) {
    $password = md5($password_1); //encrypt password before starting in DB(security)
    $sql = "INSERT INTO users (username, email, password)
            VALUES ('$username', '$email', '$password')";
    mysql_query($bd, $sql);
    
}
}

//log user in from login page
if (isset($_POST['login'])){
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);


//ensure that form field are filed properly
if (empty($username)) {
    array_push($errors, "Username is reguired");
}
if (empty($password)) {
    array_push($errors, "Password is reguired");
}
if (count($error) == 0) {
    $password = md5($password); //encrypt password before starting in DB(security)
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysgl_query($db, &query);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are logged in";
        header('location: index.php'); //redirect to home page
    } else {
        array_push($errors, "Wrong username password combination ");
        // header('location: login.php');
    }
}

}

//logout
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}


?>