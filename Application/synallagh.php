<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> Εισαγωγή Δεδομένων </title>
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

<body style="background-color:#16AB16">

<div id="center">
	<h1 align=center>Εισαγωγή Δεδομένων</h1>
      
	<form name="insert" method="post" action="synallagh_exe.php">
		<table width=300 border=0 align=center cellpadding=2 cellspacing=0>
			<tr>
				<td width=120 align=right><b>Id συναλλαγής:</b></td>
				<td width=180><input name="ID_SYNALLAGHS" type="password" size=10></td>
			</tr>
			<tr>
				<td align=right><b>Ημερομηνία και ώρα συναλλαγής :</b></td>
				<td><input name="HM_ORA" type="text" size=10></td>
			</tr>
            <tr>
				<td width=120 align=right><b>Ποσό συναλλαγής :</b></td>
				<td width=180><input name="POSO" type="text" size=10></td>
			</tr>
            <tr>
				<td width=120 align=right><b>Κωδικός συμβολαίου:</b></td>
				<td width=180><input name="KOD_SYMVOLAIOY" type="text" size=10></td>
			</tr>
			<tr>
				<td colspan="2" align=center><input type="reset" value="Καθαρισμός">
				<input type="submit" name="insert" value="Εισαγωγή"></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
		</table>

	</form>
	<center><button class="button"; onclick="location.href = 'index.php';"> Επιστροφή </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center>

</div>

</body>
</html>
