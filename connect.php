<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','pweb_s2_uas');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
		$execval = $stmt->execute();?>
        <!DOCTYPE html>
<html>
<head>
   <title>UAS PWEB SEM 2</title>
   <link rel="stylesheet" href="connect.css" type="text/css">
</head>
<body>
    <nav class="navbar">
        <div class="menu">
            <label for="">Pemograman WEB</label>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="@">Social Media</a>
                <ul class="dropdown">
                    <li><a href="https://discord.gg/GvypmEy">Discord</a></li>
                    <li><a href="https://web.facebook.com/fachriahmad.fauzi">Facebook</a></li>
                    <li><a href="https://instagram.com/fachri_a.f">Instagram</a></li>
                    <li><a href="https://twitter.com/FachriFaf">Twitter</a></li>
                </ul>
            </li>
            <li><a href="register.php">Registration</a></li>
            <li><a href="biodata.php">About</a></li>
        </ul>
        </div>
    </nav>
    <div class="main">
        <?php
		echo "Registration successfully...";?>
    </div>
</body>
</html>
         <?php
        
		$stmt->close();
		$conn->close();
	}
?> 