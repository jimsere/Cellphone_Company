<?php
	include 'Connect.php';
?>

<?php
	$ONOMA_KATASKEYASTH = $_POST['ONOMA_KATASKEYASTH'];
    $XORA = $_POST['XORA'];
    $ETOS_IDRYSHS = $_POST['ETOS_IDRYSHS'];

	
	$qry="DELETE FROM KATASKEYASTHS WHERE ONOMA_KATASKEYASTH='$ONOMA_KATASKEYASTH'";
	
	$qryexe = mysqli_query($conne, $qry);
	
	echo "<button onclick=\"location.href='index.php';\"> Επιστροφή </button>";
?>