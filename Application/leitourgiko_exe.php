<?php
	include 'Connect.php';
?>

<?php
	$ONOMA_LOGISMIKOY = $_POST['ONOMA_LOGISMIKOY'];
	$EKDOSH = $_POST['EKDOSH'];
    $ONOMA_ETAIRIAS = $_POST['ONOMA_ETAIRIAS'];
    $ID_LEITOYRGIKOY = $_POST['ID_LEITOYRGIKOY'];

	
	$qry="INSERT INTO LEITOYRGIKO_SYSTHMA VALUES('".$ONOMA_LOGISMIKOY."','".$EKDOSH."','".$ONOMA_ETAIRIAS."','".$ID_LEITOYRGIKOY."')";
	
	$qry = mysqli_query($conne, $qry);
	echo "<button onclick=\"location.href='index.php';\"> Επιστροφή </button>";

	?>