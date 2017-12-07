<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	require_once('db_con.php');
	
	$filter = array(
	"subject"=> FILTER_SANITIZE_STRING, 
	"content"=> FILTER_SANITIZE_STRING, 
	"username"=> FILTER_SANITIZE_STRING
	);
	//samler form data som array 
	$formData = filter_input_array(INPUT_GET, $filter);
	//print_r($formData);
		$subject = $formData['subject'];
		$content = $formData['content'];
		$username = $formData['username'];
	
	if($subject){
		$stmt = $con->prepare("INSERT INTO postit(subject, content, username) VALUES (?, ?, ?)");
		
		$stmt->bind_param("sss", $subject, $content, $username);
	
		$stmt->execute();
		echo 'New result History added to database';
		
		$stmt->close();
	}
	?>
	
	<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
	
	<input type="text" name="username" placeholder="Navn"><br><br>
		
		<input type="text" name="subject" placeholder="Overskrift"><br><br>
		<input type="text" name="content" placeholder="Notens indhold"><br><br>
		<input type="text" name="username" placeholder="Navn"><br><br>
		<input type="submit" value="Tilføj" name="cmd">
		
		
		
	</form>
</body>
</html>