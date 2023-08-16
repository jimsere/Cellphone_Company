
<?php
	include 'Connect.php';
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Εμφάνιση Δεδομένων</title>
<style>
    h1 { color: Black;}
    h1 { font-size:300%;}
    h1 {font-family:Arial;}
.button {
  background-color: red;
  border: none;
  color: red;
  padding: 8px 20px;
  height:50px; width:150px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}
.button {
  background-color: grey;
  color: black;
  border: 2px solid #555555;
  margin-left:50px;
}

.button:hover {
  background-color: #555555;
  color: red;
}    
</style>
</head>

<body style="background-color:#8c8c8c">

<div id="center">

<table border=2 align=center>

	<tr>
    <th colspan="5" bgcolor="0099cc">ΛΕΙΤΟΥΡΓΙΚΆ ΣΥΣΤΉΜΑΤΑ</th></tr>
    <tr><th bgcolor="66ff33" width=80>Όνομα λογισμικού</th>
		<th  bgcolor="66ff33" width=80>Έκδοση</th>
        <th bgcolor="66ff33" width=80>Όνομα εταιρίας</th>
        <th bgcolor="66ff33" width=80>ID λειτουργικού</th>

	</tr>

<?php
	$qry = "SELECT * FROM LEITOYRGIKO_SYSTHMA";
	
	$result = mysqli_query($conne, $qry);
	
	while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
		
        echo ("<tr><td><div align=\"center\"> $row[0]</div></td>
				<td><div align=\"center\"> $row[1] </div></td>
                <td><div align=\"center\"> $row[2] </div></td>
                <td><div align=\"center\"> $row[3] </div></td>
                </tr>");
	}
?>

</table>

<center><button class="button"; onclick="location.href = 'index.php';"> Επιστροφή </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center>
</div>

</body>
</html>
