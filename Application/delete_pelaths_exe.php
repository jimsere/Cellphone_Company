<?php
	include 'Connect.php';
?>

<?php
	$ID = $_POST['ID'];
    $EPITHETO = $_POST['EPITHETO'];
    $ONOMA = $_POST['ONOMA'];
    $EMAIL = $_POST['EMAIL'];
    $THLEFONO = $_POST['THLEFONO'];

	
	$qry="DELETE FROM PELATHS WHERE ID='$ID'";
	//$qry1="SELECT FROM PELATHS WHERE ID=".$ID;

	
	$qryexe = mysqli_query($conne, $qry);
	//$qryexe1 =mysqli_query($conne, $qry1);
	//echo "$qryexe1";
	echo "<button onclick=\"location.href='index.php';\"> Επιστροφή </button>";
?>