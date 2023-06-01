<!doctype html>
<html>
<head>
<meta charset="utf-8"> 
<title>NoSQL Injection PoC</title> 
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
td{
  padding: 4px;
}
</style>
</head>
<body>

<?php

// Enabling Composer Packages
require __DIR__ . '/vendor/autoload.php';

// Get environment variables
$local_conf = getenv();
define('DB_USERNAME', $local_conf['DB_USERNAME']);
define('DB_PASSWORD', $local_conf['DB_PASSWORD']);
define('DB_HOST', $local_conf['DB_HOST']);

// Connect to MongoDB
$db_client = new \MongoDB\Client('mongodb://'. DB_USERNAME .':' . DB_PASSWORD . '@'. DB_HOST . ':27017/');

$db = $db_client->selectDatabase('nosqlinj');
$collection = $db->users;
print("Connection OK!");



$param = $_GET['parameter'];
$query = [ "username" => $param ];
// Example of PHP REGEX search syntax, which we want to inject
// $query = [ 'data' => [ '$regex': => '\d+' ]];

$cursor = $collection->find($query);
print '<table>';
print '<tr><th>username</th><th>first name</th><th>last name</th><th>role</th></tr>';
foreach ($cursor as $document) {
    echo "<tr><td>{$document['username']}</td><td>{$document['first_name']}</td><td>{$document['last_name']}</td><td>{$document['role']}</td></tr>";
}
print "</table>";


?>

</body>
</html>

