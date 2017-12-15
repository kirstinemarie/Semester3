<?php session_start();

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>

<?php 
	if(filter_input(INPUT_POST, 'submit')){
		
	$navnAdmin_user = filter_input(INPUT_POST, 'navnAdmin_user')
		or die('Missing/illegal navn parameter');
		
	$kode = filter_input(INPUT_POST, 'kode')
		or die('Missing/illegal kode parameter');
		
	require_once('db_con.php');
		
	$sql= 'SELECT idAdmin_user, kodeAdmin_user FROM Admin_user WHERE navnAdmin_user=?';
		
	$stmt = $con->prepare($sql);
		
	$stmt->bind_param('s', $navnAdmin_user);
		
	$stmt->execute();
		
	$stmt->bind_result($idAdmin_user, $kodehash);
	
		
	
while($stmt->fetch()){		
	}
			
		if(password_verify($kode, $kodehash)){
			echo "<script>window.open('bestil.php','_self')</script>";
			$_SESSION['idAdmin_user'] = $idAdmin_user;
			$_SESSION['navnAdmin_user'] = $navnAdmin_user;
		}
		else{
			echo 'illegal username/password combination' .$navnAdmin_user .$kode .$kodehash;
		}}
	
	?>
	
	
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">


		
		<input type="text" name="navnAdmin_user"  placeholder="brugernavn" required>
			
		<input type="password" name="kode" placeholder="password" required>
		
	
		<input type='submit' id="send" value="login" name="submit">
		
		</div>
		</div>
	
	</form>
</body>
</html>