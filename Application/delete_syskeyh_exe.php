<?php
	include 'Connect.php';
?>

<?php
	$ID_SYSKEYHS = $_POST['ID_SYSKEYHS'];
	$MEGETHOS = $_POST['MEGETHOS'];
    $ID_KATOXOU = $_POST['ID_KATOXOU'];
    $ON_KATASKEYASTH = $_POST['ON_KATASKEYASTH'];
    $KOD_LEITOYRGIKOY = $_POST['KOD_LEITOYRGIKOY'];
    $SYNDESH_DIKTIOY = $_POST['SYNDESH_DIKTIOY'];

	
	$qry="DELETE FROM SYSKEYH WHERE ID_SYSKEYHS='$ID_SYSKEYHS'";
	
	$qryexe = mysqli_query($conne, $qry);
	
	echo "<button onclick=\"location.href='index.php';\"> Επιστροφή </button>";
?>