<?php
	include 'Connect.php';
?>

<?php
	$ID_PWLHTH = $_POST['ID_PWLHTH'];
	$ONOMA = $_POST['ONOMA'];
    $EPITHETO = $_POST['EPITHETO'];
    $EMAIL = $_POST['EMAIL'];
    $ID_PELATH = $_POST['ID_PELATH'];
    $KOD_PARARTHMATOS = $_POST['KOD_PARARTHMATOS'];

	
	$qry="INSERT INTO PWLHTHS VALUES('".$ID_PWLHTH."','".$ONOMA."','".$EPITHETO."','".$EMAIL."','".$ID_PELATH."','".$KOD_PARARTHMATOS."')";
	
	$qry = mysqli_query($conne, $qry);
	echo "<button onclick=\"location.href='index.php';\"> Επιστροφή </button>";

	?>