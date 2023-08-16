<?php
	include 'Connect.php';
?>

<?php
	$ONOMA_KATASKEUASTH = $_POST['ONOMA_KATASKEUASTH'];
	$XORA= $_POST['XORA'];
    $ETOS_IDRYSHS = $_POST['ETOS_IDRYSHS'];
    
	
	$qry="INSERT INTO KATASKEYASTHS VALUES('".$ONOMA_KATASKEUASTH."','".$XORA."','".$ETOS_IDRYSHS."')";
	
	$qry = mysqli_query($conne, $qry);
	echo "<button onclick=\"location.href='index.php';\"> Επιστροφή </button>";

	?>