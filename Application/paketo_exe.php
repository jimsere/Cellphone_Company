<?php
	include 'Connect.php';
?>

<?php
	$SMS = $_POST['SMS'];
	$DEDOMENA = $_POST['DEDOMENA'];
    $LEPTA_OMILIAS = $_POST['LEPTA_OMILIAS'];
    $ID_PAKETOU = $_POST['ID_PAKETOU'];

	
	$qry="INSERT INTO PAKETO VALUES('".$SMS."','".$DEDOMENA."','".$LEPTA_OMILIAS."','".$ID_PAKETOU."')";
	
	
	//mysql_query("INSERT videousers SET user_name='$user',user_password='$pass', contact_person='$cperson', organisation='$organ', contact_tel='cphone', email='$email'");
	
	$qry = mysqli_query($conne, $qry);
	echo "<button onclick=\"location.href='index.php';\"> Επιστροφή </button>";

	?>