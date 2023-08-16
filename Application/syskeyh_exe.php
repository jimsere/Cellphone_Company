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

	
	$qry="INSERT INTO SYSKEYH VALUES('".$ID_SYSKEYHS."','".$MEGETHOS."','".$ID_KATOXOU."','".$ON_KATASKEYASTH."','".$KOD_LEITOYRGIKOY."','".$SYNDESH_DIKTIOY."')";
	
	$qry = mysqli_query($conne, $qry);
	echo "<button onclick=\"location.href='index.php';\"> Επιστροφή </button>";

	?>