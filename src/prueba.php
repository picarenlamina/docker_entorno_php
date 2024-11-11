<?php
//$servername = "db";
//$username = "root";
//$password = "password";
//$dbname = "test";

$host= $_ENV["MYSQL_HOST"];
$username = $_ENV["MYSQL_USER"];
$password = $_ENV["MYSQL_PASSWORD"];
$dbname = $_ENV["MYSQL_DB"];

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM usuarios");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->fetchAll();
  //foreach( $result as $item ) {
  //  print( "<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $item["id"], $item["nombre"], $item["apellidos"]);
  //}
  print_r( $result );
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}


?>
