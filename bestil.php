<?php session_start(); ?> 
<!DOCTYPE html>
<html lang="da">
<head>
	

</head>
<body id="body">

<?php
//$email = $_GET['booking_email'];
//$bnummer = $_GET['bookingnummer'];

require_once('db_con.php');

$sql = "SELECT Bestil.idBestil, Bestil.fNavn, Bestil.eNavn, Bestil.email, Bestil.adresse, Bestil.antal, Bog.titel, Bog.pris FROM Bestil, Bog GROUP BY Bestil.idBestil order by Bestil.idBestil desc;";
      $stmt = $con->prepare($sql);
      $stmt->bind_result($idBestil, $fNavn, $eNavn, $email, $adresse, $antal, $titel, $pris);
      $stmt->execute();
      
   
    if(isset($_POST['slet'])){
      $sql = "DELETE FROM Bestil WHERE idBestil = ?";
      $stmt = $con->prepare($sql);
      $stmt->bind_param('i', $idBestil);
      $stmt->execute();
		
          if ($stmt->affected_rows > 0){
            echo "<script type='text/javascript'>
              alert('Din bestilling er nu slettet');
            </script>";
          }
          else {
            echo "<script type='text/javascript'>alert('Kunne ikke slette din bestilling');</script>";
          }
        }
	
	if(empty($_SESSION['idAdmin_user'])){
		echo'Need to log in to see the secrets';
	}
	else{
		echo ' Velkommen til bestillinger ' .$_SESSION['navnAdmin_user']. '<br><br>';
		
	
	while($stmt->fetch()){
	?>	  
	 
    

<!-- YOUR BOOKING -->
<table class="bookings">
  <tr>
    <th>Titel</th>
    <th>Fornavn</th>
    <th>Efternavn</th>
    <th>Email</th>
    <th>Adresse</th>
    <th>Antal</th>
 
  </tr>
	<tr>
		
		<td><?=$titel?> </td>
		<td><?=$fNavn?></td>
		<td><?=$eNavn?> </td>
		<td><?=$email?> </td>
    <td><?=$adresse?> </td>
		<td><?=$antal?></td>
    <td>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <input type="hidden" value="<?=$idBestil?>" name="id">
		  <button name="submit" type="submit" value="del">Delete</button>
        
      </form>
    </td>
	</tr>
</table>



 <?php } 

	}
	

      if($submit = filter_input(INPUT_POST, 'submit')){
	if($submit == 'del') {
		
		$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT) 
			or die('Missing/illegal id parameter');
		
		
		require_once('db_con.php');
		$sql = 'DELETE  FROM Bestil WHERE idBestil=?';
		$stmt = $con->prepare($sql);
		$stmt->bind_param('i', $id);
		$stmt->execute();
	
		if($stmt->affected_rows > 0){
			              echo "<script type='text/javascript'>
    		alert('Bestilling er nu slettet');
            </script>";

		
		}
		else {
			echo "<script type='text/javascript'>
    		alert('Bestilling kunne ikke slettes');
            </script>";
		}
	}
	else {
		die('Unknown cmd: '.$submit);
	}
	}

      
?>






</body>
</html>



