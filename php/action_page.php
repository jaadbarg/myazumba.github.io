<?php
$fname = filter_input(INPUT_POST, 'fname');
$subject = filter_input(INPUT_POST, 'subject');
if (!empty($fname)){
if (!empty($subject)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "mshSQLiin!"; //sqlPassboi
$dbname = "zumbadb";  //name of database
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO account (username, password)
values ('$username','$password')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Please enter a first name";
die();
}
}
else{
echo "Please enter a subject";
die();
}
?>