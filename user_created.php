<?php
session_start();
$name=$_SESSION['name'];
$user_alias=implode($name);
extract($_POST);
date_default_timezone_set("Asia/Kolkata");
$date = date("Y-m-d H:i:s");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include("./database/db_connection.php");
$select_user=mysqli_query($con, "SELECT uname FROM user WHERE alias='$user_alias'");
$user = mysqli_fetch_array($select_user);
if(isset($_POST['submit']) && $user != 0)
{

$password=mysqli_real_escape_string($con,$_POST["password"]);
$encrypt=sha1($password);
$token = "qwertyuiopasdfghjklmnbvcxzQWERTYUIOPASDFGHJKLMNBVCXZ1234567890*/=";
$token = str_shuffle($token);
$token = substr($token, 0, 20);
$sql=mysqli_query($con, "SELECT password FROM user WHERE uname='ram'");
		
		if(mysqli_num_rows($sql)>0)
		{
			
			echo "Strictly Not allowed";
			echo "\n$token";
			echo "\n".mysqli_num_rows($sql);

		}

		else
		{
			$query = mysqli_query($con, "UPDATE `user` SET `password` = '$encrypt', `email` = '$email', `mobile` = '$mobile', `doc` = '$date', `token` = '$token' WHERE uname = '$user[0]'");
				if($query)
					{

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//Server settings
	$mail = new PHPMailer();                              // Passing `true` enables exceptions
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    // $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'sbkrish91@gmail.com';                 // SMTP username
    $mail->Password = 'rani1122';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('reachme@sbkrish.com', 'Kitchen Diary');
    $mail->addAddress('ranimaniyan@gmail.com');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('noreply@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
/*    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
*/
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Account Verification';
    $mail->Body    = "Hi $user[0], <br><br>Please click the link below to verify your account. 
    	<br><br><a href = 'http://localhost/kitchen_diary/verify_account.php?email=$email&token=$token'> https://hungers.000webapphost.com/verify_account.php?email=$email&token=$token </a> 
    	<br><br>Thanks & Regards, <br>Balakrishnan S | Kitchen Diary";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if($mail->send())
    {
    // echo 'You have been registered! Please verify your email!';
    	echo '<script> window.location.href="home.php?nu"</script>';
						$msg = "You have been registered! Please verify your email!";
					}
					else {
						echo "Something went wrong.";
					}
					} else {
						echo "fail";
					}
				}
			} else {
				echo "submit fail";
			}