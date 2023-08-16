<?php
	include 'Connect.php';
?>

<?php
	$ID_PARARTHMATOS = $_POST['ID_PARARTHMATOS'];
	$POLH = $_POST['POLH'];
    $ODOS = $_POST['ODOS'];
    $TK = $_POST['TK'];
    $THLEFONO = $_POST['THLEFONO'];

	
	$qry="INSERT INTO PARARTHMA VALUES('".$ID_PARARTHMATOS."','".$POLH."','".$ODOS."','".$TK."','".$THLEFONO."')";
	
	$qry = mysqli_query($conne, $qry);
	echo "<button onclick=\"location.href='index.php';\"> Επιστροφή </button>";

	?>