<?php
	include 'Connect.php';
?>

<?php
	$HM_EN = $_POST['HM_EN'];
    $KOD_PELATH = $_POST['KOD_PELATH'];
    $ID_SYMVOLAIOY = $_POST['ID_SYMVOLAIOY'];
    $KOD_PAK = $_POST['KOD_PAK'];

	
	$qry="DELETE FROM SYMVOLAIO WHERE ID_SYMVOLAIOY='$ID_SYMVOLAIOY'";
	
	$qryexe = mysqli_query($conne, $qry);
	
	echo "<button onclick=\"location.href='index.php';\"> Επιστροφή </button>";

	?>