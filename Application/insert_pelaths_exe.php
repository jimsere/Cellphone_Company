<?php
	include 'Connect.php';
?>

<?php
	$ID = $_POST['ID'];
	$EPITHETO = $_POST['EPITHETO'];
    $ONOMA = $_POST['ONOMA'];
    $EMAIL = $_POST['EMAIL'];
    $THLEFONO = $_POST['THLEFONO'];

	
	$qry="INSERT INTO PELATHS VALUES('".$ID."','".$EPITHETO."','".$ONOMA."','".$EMAIL."','".$THLEFONO."')";
	
	$qry = mysqli_query($conne, $qry);
	echo "<button onclick=\"location.href='index.php';\"> Επιστροφή </button>";

	?>