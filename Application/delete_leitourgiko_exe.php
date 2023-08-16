<?php
	include 'Connect.php';
?>

<?php
	$ONOMA_LOGISMIKOY = $_POST['ONOMA_LOGISMIKOY'];
    $EKDOSH = $_POST['EKDOSH'];
    $ONOMA_ETAIRIAS = $_POST['ONOMA_ETAIRIAS'];
    $ID_LEITOYRGIKOY = $_POST['ID_LEITOYRGIKOY'];
	
	$qry="DELETE FROM LEITOYRGIKO_SYSTHMA WHERE ID_LEITOYRGIKOY='$ID_LEITOYRGIKOY'";
	
	$qryexe = mysqli_query($conne, $qry);
	
	echo "<button onclick=\"location.href='index.php';\"> Επιστροφή </button>";
?>