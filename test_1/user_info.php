<?php
// variables
$fname = $_POST["fname"];
$surname = $_POST["surname"];
$idNum = $_POST["idNum"];
$dob = $_POST["dob"];

// validates the id and its length
if (is_numeric($idNum) && strlen($idNum) < 13) {
    die("ID has to be 13 digits");
} elseif (strlen($idNum) > 13) {
    die("your id number is more than 13 digits long");
} else {
    echo ("");
}

// checks for empty id number input
if (empty($idNum)) {
    echo ("id cannot be empty");
}

// validates the name
if (empty($fname) || preg_match("/[^a-zA-Z0-9]+/", $fname)) {
    die("please enter valid name");
}

// checks if the surname is empty
if (empty($surname)) {
    die("please enter surname");
}

// checks if Date Of Birth is empty
if (empty($dob)) {
    die("please enter valid dob");
}

// database connection variables
$host = "localhost";
$dbname = "devprox_test_1";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    die("connection error" . mysqli_connect_error());
}

$sql = "INSERT INTO `data`(`fname`, `surname`, `idNum`, `dob`) VALUES ('$fname','$surname','$idNum','$dob')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
