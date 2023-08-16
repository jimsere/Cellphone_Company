<?php
	include 'Connect.php';
?>

<?php
	$HM_EN = $_POST['HM_EN'];
	$KOD_PELATH = $_POST['KOD_PELATH'];
    $ID_SYMVOLAIOY = $_POST['ID_SYMVOLAIOY'];
    $KOD_PAK = $_POST['KOD_PAK'];

	
	$qry="INSERT INTO SYMVOLAIO VALUES('".$HM_EN."','".$KOD_PELATH."','".$ID_SYMVOLAIOY."','".$KOD_PAK."')";
	
	$qry = mysqli_query($conne, $qry);
	echo "<button onclick=\"location.href='index.php';\"> Επιστροφή </button>";

	?>