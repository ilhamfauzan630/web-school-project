<html>
	<head>
		<title>Pendaftaran Siswa</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    	<link href="../css/carousel.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<link rel="stylesheet" href="css/input.css">
	</head>

	<body>
	<header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0054da;">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="assets/logo.gif" alt="" width="30" class="d-inline-block align-text-top">
                    SMK DKC
                </a>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="liststruktur.html">Struktur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="halaman/fasilitas.html">Fasilitas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
	<main>
		<hr class="border-primary border-3 opacity-75">
		<div align="center" class="text-white"><strong><font size="6" face="Courier New, Courier, mono">FORM PENDAFTARAN SISWA</font></strong></div>
			<form name="form1" method="post" action="pendaftaran/proses.php">
			<div class="inputBox">
				<input type="text" name="nama" id="nama" required>
				<span>Nama Lengkap</span>
			</div>
			<br>
			<div class="inputBox">
				<input type="text" name="alamat" id="alamat" required>
				<span>Alamat</span>
			</div>
			<br>
			<div class="inputBox">
				<input type="text" name="email" id="email" required>
				<span>E-mail</span>
			</div>
			<br>
			<div class="inputBox">
				<input type="number" name="nom" id="nom" required>
				<span>Nomer Hp</span>
			</div>
			<br>
			<div class="inputBox">
				<input type="number" name="nom" id="mtk" required>
				<span>Nilai Matematika</span>
			</div>
			<br>
			<div class="inputBox">
				<input type="text" name="komentar" id="komentar" required>
				<span>Komentar</span>
			</div>
			<br>
			<button type="submit" name="submit" class="btn btn-primary btn-lg">Kirim</button>
			</form>
			
			
	</main>
	</body>
</html>