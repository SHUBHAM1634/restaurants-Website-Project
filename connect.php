<?php
 	$Name = $_POST['Name'];
 	$email = $_POST['email'];
 	$massage = $_POST['massage'];
    $number = $_POST['number']
 
 	/*Database connection*/
 	$conn = new mysqli('localhost','root','','test');
 	if($conn->connect_error){
 		echo "$conn->connect_error";
 		die("Connection Failed : ". $conn->connect_error);
 	} else {
 		$stmt = $conn->prepare("insert into registration(Name, email, massage,number) values(?, ?, ?)");
 		$stmt->bind_param("sssi", $Name, $email , $massage,$number);
 		$execval = $stmt->execute();
 		echo $execval;
 		echo "Registration successfully...";
 		$stmt->close();
 		$conn->close();
 	}
 ?>