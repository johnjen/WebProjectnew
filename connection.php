<?php
	session_start();

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "jayjayodhiambo";
	$dbname = "cafeteria";

	$conn = new mysqli ($dbhost,$dbuser,$dbpass,$dbname);
  //Check connection
	if ($conn->connect_error){
		echo "Connection failed";

	}
	else {
		echo "Connection was successful";
	}

	$name = $_POST['name'];
	$email = $_POST['email'];
	$date = $_POST['date'];
	$no_of_people = $_POST['no_of_people'];
	$special = $_POST['special'];

	$sql= "INSERT INTO reservation (name, email, date, no_of_people, preference) VALUES ('$name','$email','$date', '$no_of_people', '$special')";
	
	if (!mysqli_query($conn,$sql)) {
		echo "Not inserted";
	}
	else{
		echo "Inserted";
	}

?>