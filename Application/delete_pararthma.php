
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> Διαγραφή Δεδομένων </title>
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

<body style="background-color:#ff4d4d">

<div id="center">
	<h1 align=center>Διαγραφή Δεδομένων</h1>
      <p align=center>Παρακαλώ διαγράψτε τα στοιχεία του πίνακα με βάση το ID του παραρτήματος</p>
	<form name="delete" method="post" action="delete_pararthma_exe.php">
		<table width=300 border=0 align=center cellpadding=2 cellspacing=0>
			<tr>
				<td width=120 align=right><b>ID παραρτήματος:</b></td>
				<td width=180><input name="ID_PARARTHMATOS" type="text" size=10></td>
			</tr>
			<tr>
				<td colspan="2" align=center><input type="reset" value="Καθαρισμός">
				<input type="submit" name="delete" value="Διαγραφή"></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
		</table>

	</form>
	<center><button class="button"; onclick="location.href = 'index.php';"> Επιστροφή </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center>

</div>

</body>
</html>