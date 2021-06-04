<!DOCTYPE html>
<html>
<head>
</head>
<body>
	
<?php
	$bookname = $_GET['bookname'];
	$authorname = $_GET['authorname'];
	$date = $_GET['date'];
	$month = $_GET['month'];
	$year = $_GET['year'];
	echo "yay...";
	

	// Database connection
	$conn = new mysqli('localhost','root','','books');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		if ($stmt = $conn->prepare("INSERT INTO `booksdata`(`bookname`, `authorname`, `date`, `Month`, `Year`) VALUES (?,?,?,?,?)")){
		$stmt->bind_param("ssiii", $bookname, $authorname, $date, $month, $year);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
	else{
		echo "shit...";
	}
	}
?>
</body>
</html>