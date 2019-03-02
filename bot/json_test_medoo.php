<?php
require  'src/medoo.php';
	 
	// Using Medoo namespace
	use Medoo\Medoo;
	 
	$database = new Medoo([
		// required
		'database_type' => 'mysql',
		'database_name' => 'epiz_20520988_holiday_hungers',
		'server' => 'sql204.epizy.com',
		'username' => 'epiz_20520988',
		'password' => 'PCgRLfZQ',
	 
		// [optional]
		//'charset' => 'utf8',
		//'port' => 3306,
	 
		// [optional] Table prefix
		//'prefix' => 'PREFIX_',
	 
		// [optional] Enable logging (Logging is disabled by default for better performance)
		'logging' => true,
	 

	 
		// [optional] driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
		'option' => [
			PDO::ATTR_CASE => PDO::CASE_NATURAL
		],
	 
		// [optional] Medoo will execute those commands after connected to the database for initialization
		'command' => [
			'SET SQL_MODE=ANSI_QUOTES'
		]
	]);
	
	$messenger_id = $_GET['messenger_user_id'];
	$first_name = $_GET['first_name'];
	$last_name = $_GET['last_name']; 
	$gender = $_GET['gender'];
//	$user_type = $_GET['user_type'];
//	$source = $_GET['biz_name'];
//	$email = $_GET['email_address'];
//	$phone = $_GET['phone_number'];
	//$registration_date = date("Y-m-d");
	$date = $_GET['date'];
	
	//Switches for testing
	//echo "ID: ".$messenger_id."</br>";
	//echo "First Name: ".$first_name."</br>";
	//echo "Last Name: ".$last_name."</br>";
	//echo "Gender: ".$gender."</br>";
	//echo "Biz Name: ".$source."</br>";
	//echo "Email: ".$email."</br>";
	//echo "Phone: ".$phone."</br>";
	
	$database->insert("json_test", [
		"messenger_id" => $messenger_id,
		"date" => $date,
		"first_name" => $first_name,
		"last_name" => $last_name,
		"gender" => $gender
	//	"user_type" => $user_type,
	//	"source" => $source,
	//	"email_address" => $email,
	//	"phone_number" => $phone,
		//"registration_date" => $registration_date
	]);

echo $messenger_id." ".$date." ".$first_name." ".$last_name." ".$gender;
?>
