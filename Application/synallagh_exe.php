<?php
	include 'Connect.php';
?>

<?php
	$ID_SYNALLAGHS = $_POST['ID_SYNALLAGHS'];
	$HM_ORA = $_POST['HM_ORA'];
    $POSO = $_POST['POSO'];
    $KOD_SYMVOLAIOY = $_POST['KOD_SYMVOLAIOY'];

	
	$qry="INSERT INTO SYNALLAGH VALUES('".$ID_SYNALLAGHS."','".$HM_ORA."','".$POSO."','".$KOD_SYMVOLAIOY."')";
	
	$qry = mysqli_query($conne, $qry);
	echo "<button onclick=\"location.href='index.php';\"> Επιστροφή </button>";

	?>