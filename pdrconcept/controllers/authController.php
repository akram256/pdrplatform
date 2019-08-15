<?php
require_once 'sendEmails.php';
//require_once 'random_compat\lib\random.php';
session_start();
$username = "";
$phone = "";
$email = "";
$errors = array();
$data = "";

//$conn = new mysqli('localhost', 'root', 'LFf4SBySR8Ky0fxU', 'verify-user');

$conn = new mysqli('localhost', 'root', '', 'verify-user');

// SIGN UP USER
if (isset($_POST['signup-btn'])) {
    if (empty($_POST['username'])) {
        $errors['username'] = 'Username required';
    }
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email required';
    }
    if (empty($_POST['password'])) {
        $errors['password'] = 'Password required';
    }
    if (isset($_POST['password']) && $_POST['password'] !== $_POST['passwordConf']) {
        $errors['passwordConf'] = 'The two passwords do not match';
    }

    if (empty($_POST['phone'])) {
        $errors['phone'] = 'Phone number required';
    }
    
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $token = MD5(rand(50,50));
    //bin2hex(random_bytes(50)); // generate unique token
    $password = MD5($_POST['password']);
    //password_hash($_POST['password'], PASSWORD_DEFAULT); //encrypt password
    
    // Check if email already exists
    $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $errors['email'] = "Email already exists";
    }


    $sql = "SELECT * FROM users WHERE phone='$phone' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $errors['email'] = "Phone number already exists";
    }

    
    if (count($errors) === 0) {
        $query = "INSERT INTO users SET username=?, phone = ?, email=?, token=?, password=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('sssss', $username, $phone, $email, $token, $password);
        $result = $stmt->execute();
        
        if ($result) {
            $user_id = $stmt->insert_id;
            $stmt->close();
            
            // TO DO: send verification email to user
           // sendVerificationEmail($email, $token);
            
            $_SESSION['id'] = $user_id;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['verified'] = false;
            $_SESSION['message'] = 'You are logged in!';
            $_SESSION['type'] = 'alert-success';
            header('location: index.php');
        } else {
            $_SESSION['error_msg'] = "Database error: Could not register user";
        }
    }
}

// LOGIN
if (isset($_POST['login-btn'])){
//if ($_POST['login-btn'] == "enter") {
    if (empty($_POST['username'])) {
         $errors['username'] = 'Username or email required';
        // echo "here1";
    }
    if (empty($_POST['password'])) {
          $errors['password'] = 'Password required';
         // echo "here2";
    }

    $username = $_POST['username'];
    $password = MD5($_POST['password']);
    
         //echo $username.'--'.$password;
         //echo "here3";
         //exit;
    
    if (count($errors) === 0) {
       // $query = "SELECT * FROM users WHERE username=? AND email=? LIMIT 1";
        $query = "SELECT * FROM users WHERE username=? AND password=? LIMIT 1";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ss', $username, $password);
        
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
           // if (password_verify($password, $user['password'])) { // if password matches
             //   $stmt->close();
            $rowcount = mysqli_num_rows($result);

            if ($rowcount > 0) {
                
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['verified'] = $user['verified'];
                $_SESSION['message'] = 'You are logged in!';
                $_SESSION['type'] = 'alert-success';
                header('location: allin.php');
                exit(0);
           // }
            } else { // if password does not match
                $errors['login_fail'] = "Wrong username / password";
            }
        } else {
            $_SESSION['message'] = "Database error. Login failed!";
            $_SESSION['type'] = "alert-danger";
        }
    }
}