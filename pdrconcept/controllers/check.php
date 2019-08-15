

<?php 

require_once 'sendEmails.php';

$password = 'ASH';
$token = MD5(rand(50,50)); // generate unique token
$password = MD5($password); //enc

echo $token."<br>";
echo $password;

$email = 'ashirafmawejje2@gmail.com';

 sendVerificationEmail($email, $token);


    ?>