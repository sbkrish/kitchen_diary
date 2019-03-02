<?php
// Connection data (server_address, database, name, poassword)
/*$hostdb = 'localhost';
$namedb = 'kitchen_diary';
$userdb = 'root';
$passdb = '';
*/
$hostdb = 'sql204.epizy.com';
$namedb = 'epiz_20520988_holiday_hungers';
$userdb = 'epiz_20520988';
$passdb = 'PCgRLfZQ';


  // Connect and create the PDO object
  $db = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
  $messenger_id = $_GET['messenger_user_id'];
$stmt = $db->prepare("select * from json_test where messenger_id = $messenger_id");
$stmt->execute();
$myarr=array();
while($data=$stmt->fetch()){
    $myarr[]=$data;
    
}

    
  // echo json_encode($myarr);
   
   $file = fopen('data.json' ,'w');
   fwrite($file, json_encode($myarr, JSON_FORCE_OBJECT));
   
   $url = 'data.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed

//echo $characters[0]->first_name;
//echo $characters[0]->last_name;
//echo $characters[0]->email_address;
//echo json_encode($data);
//messenger_id = 2596033687081021 //bala



  // Define and perform the SQL SELECT query
  //$messenger_id = $_GET['messenger_user_id'];
  //$sql = "SELECT * FROM `users` WHERE `messenger_id` = $messenger_id";
  //$result = $conn->query($sql);
  

