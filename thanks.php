<?php

$colors = ['#270082'];
    $random_color = $colors[array_rand($colors)];


$servername = "localhost";
$username = "root";
$password = "";
$db = "globalconsultancy";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
if(isset($_POST['submit']))
{
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $phone = $_POST['phone'];
	 $address = $_POST['address'];
	 $comment = $_POST['comment'];
	 $sql = "INSERT INTO contact (name,email,phone,address,comment)
	 VALUES ('$name','$email','$phone','$address','$comment')";
	 if (mysqli_query($conn, $sql)) {
		//echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
</head>
<body style="background: <?=$random_color;?>">
	<div class="container-fluid"><br />
		<div class="row">
			<div class="col-sm-4">
				<figure>
					<h1 style="color:white;text-align: center;font-family:Arial;margin:20px 20px 20px 20px;">Thanks</h1>
				</figure>
			</div>
			
			<div class="col-sm-4">
				<figure>
					<h2 style="color:white;text-align: center;font-family:Arial;margin:20px 20px 20px 20px;">We received your query and will call you shortly</h2>
				</figure>
			</div>
		</div>
	</div>


</body>
</html>
