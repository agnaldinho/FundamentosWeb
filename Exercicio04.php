<?php
// $servername = "localhost";
// $username = "root";
// $password = "";

// // Create connection
// $conn = new mysqli($servername, $username, $password);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// // Create database
// $sql = "CREATE DATABASE 5SI";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }

// $conn->close();
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "5SI";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Pessoa (
idPessoa INT AUTO_INCREMENT PRIMARY KEY,
nomePessoa VARCHAR(30) NOT NULL,
idadePessoa int NOT NULL,
emailPessoa VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Pessoa created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>