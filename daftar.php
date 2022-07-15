<html>
	<head>
		<title>Pendaftaran Siswa</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    	<link href="../css/carousel.css" rel="stylesheet">
	</head>

	<body>
	<hr class="border-primary border-3 opacity-75">
		<div align="center"><strong><font size="6" face="Courier New, Courier, mono">FORM PENDAFTARAN SISWA</font></strong></div>
			<form name="form1" method="post" action="pendaftaran/proses.php">
				<table width="58%" border="0" align="center">
					<tr>
						<td>Nama Lengkap</td>
						<td><input name="nama" type="text" id="nama"></td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td><input name="alamat" type="text" id="alamat"></td>
					</tr>

					<tr>
						<td>E-Mail</td>
						<td><input name="email" type="text" id="email"></td> 
					</tr>

					<tr>
						<td>Nomer Hp</td>
						<td><input name="nom" type="number" id="nom"></td>
					</tr>

					<tr>
						<td>Nilai Matematika</td>
						<td><input name="nom" type="number" id="mtk"></td>
					</tr>

					<tr>
						<td>Komentar</td>
						<td><textarea name="komentar" id="komentar" placeholder="Alasan atau motivasi anda"></textarea></td> </textarea>
					</tr>

					<tr>
						<td></td>
						<td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
					</td>
					</tr>
				</table>
			</form>
			<hr class="border-primary border-3 opacity-75">
	</body>
</html>