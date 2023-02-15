<?php
$name = $_POST['first_name'];
$email = $_POST['email'];
$fp = fopen("storingemail.txt","a");
$savestring = "Name : ". $name . PHP_EOL . "Email : " . $email . PHP_EOL  . "----------------------------------------------------------------------------------------";
fwrite($fp, $savestring);
fclose($fp);
 if($name && $email) {
            header('location: thanks.html');
        }
?>