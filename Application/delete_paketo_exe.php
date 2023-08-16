<?php
	include 'Connect.php';
?>

<?php
	$SMS = $_POST['SMS'];
    $DEDOMENA = $_POST['DEDOMENA'];
    $LEPTA_OMILIAS = $_POST['LEPTA_OMILIAS'];
    $ID_PAKETOU = $_POST['ID_PAKETOU'];

	
	$qry="DELETE FROM PAKETO WHERE ID_PAKETOU='$ID_PAKETOU'";
	
	$qryexe = mysqli_query($conne, $qry);
	
	echo "<button onclick=\"location.href='index.php';\"> Επιστροφή </button>";
?>