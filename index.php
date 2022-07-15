<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <title>Hello, world!</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .parallax {
            background-image: url("assets/smkdkc.jpg");

            min-height: 500px;

            object-fit: cover;
            object-position: center;

            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .parallax2 {
            background-image: url("assets/aula2-modif.jpg");

            min-height: 500px;

            object-fit: cover;
            object-position: center;

            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        iframe {
            display: block;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0042ad;">
            <div class="container">
                <a class="navbar-brand" href="#">SMK DKC</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="daftar.php">Pendaftaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="liststruktur.php">Struktur</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown link
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <aside class="position-fixed bottom-0 end-0">
        <ul class="menu">
            <div class="toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-clipboard2-pulse-fill" viewBox="0 0 16 16">
                    <path
                        d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z" />
                    <path
                        d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5ZM9.98 5.356 11.372 10h.128a.5.5 0 0 1 0 1H11a.5.5 0 0 1-.479-.356l-.94-3.135-1.092 5.096a.5.5 0 0 1-.968.039L6.383 8.85l-.936 1.873A.5.5 0 0 1 5 11h-.5a.5.5 0 0 1 0-1h.191l1.362-2.724a.5.5 0 0 1 .926.08l.94 3.135 1.092-5.096a.5.5 0 0 1 .968-.039Z" />
                </svg>
            </div>
            <li style="--i:0;" class="active"><a href="#">
                    <ion-icon name="home-outline"></ion-icon>
                </a></li>
            <li style="--i:1;"><a href="#">
                    <ion-icon name="person-outline"></ion-icon>
                </a></li>
            <li style="--i:2;"><a href="#">
                    <ion-icon name="school-outline"></ion-icon>
                </a></li>
            <li style="--i:3;"><a href="#">
                    <ion-icon name="settings-outline"></ion-icon>
                </a></li>
            <li style="--i:4;"><a href="#">
                    <ion-icon name="desktop-outline"></ion-icon>
                </a></li>
            <li style="--i:5;"><a href="#news">
                    <ion-icon name="ribbon-outline"></ion-icon>
                </a></li>
            <li style="--i:6;"><a href="#">
                    <ion-icon name="mail-outline"></ion-icon>
                </a></li>
            <li style="--i:7;"><a href="#">
                    <ion-icon name="language-outline"></ion-icon>
                </a></li>

            <div class="indicator">
            </div>
        </ul>
    </aside>
    <main>

        <!-- slide show -->
        <div class="parallax p-5">
            <div class="container bg-opacity-50 bg-light">
                <div class="row text-center opacity">
                    <img src="assets/logo.gif" alt="SMK DKC" class="w-25 m-auto">
                    <h2>SMK Dharma Kusuma Cianjur</h2>
                    <p>Terakreditasi : A, SK No.058/BAN-SM/SK/2020</p>
                </div>
            </div>
        </div>




        <section class="about pt-5 text-light pb-5" style="background-color: #0042ad;">
            <div class="container">
                <div class="row">
                    <div class="col text-center mb-3">
                        <h2>Profil sekolah</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/E3RySNBJRIg"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
        </section>


        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0042ad" fill-opacity="1"
                d="M0,320L120,272C240,224,480,128,720,117.3C960,107,1200,181,1320,218.7L1440,256L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z">
            </path>
        </svg>





        <!-- prestasi -->
        <section id="news">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h2>Prestasi</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/design.jpg" class="card-img-top" alt="web tecnology">
                            <div class="card-body">
                                <p class="card-text">Tingkat Nasional</p>
                                <p class="card-text">Juara 3</p>
                                <p class="card-text">Web Technology</p>
                                <p class="card-text">MUHAMMAD RIDHO RAMADHAN</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/robot.jpg" class="card-img-top" alt="Robot">
                            <div class="card-body">
                                <p class="card-text">Tingkat Nasional</p>
                                <p class="card-text">Juara 2</p>
                                <p class="card-text">Mobile Robotics</p>
                                <p class="card-text">TAUFIQ FAKHURROHMAN</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/logos.jpg" class="card-img-top" alt="label logo">
                            <div class="card-body">
                                <p class="card-text">Tingkat Nasional</p>
                                <p class="card-text">Juara 3</p>
                                <p class="card-text">Web Technology</p>
                                <p class="card-text">MUHAMMAD RIDHO RAMADHAN</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Tingkat Nasional</p>
                                <p class="card-text">Juara 3</p>
                                <p class="card-text">Web Technology</p>
                                <p class="card-text">MUHAMMAD RIDHO RAMADHAN</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Tingkat Nasional</p>
                                <p class="card-text">Juara 3</p>
                                <p class="card-text">Web Technology</p>
                                <p class="card-text">MUHAMMAD RIDHO RAMADHAN</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <div class="card-text text-center">
                                    <button type="button" class="btn btn-primary btn-lg">Selengkapnya</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0042ad" fill-opacity="1"
                d="M0,96L40,122.7C80,149,160,203,240,224C320,245,400,235,480,213.3C560,192,640,160,720,122.7C800,85,880,43,960,64C1040,85,1120,171,1200,213.3C1280,256,1360,256,1400,256L1440,256L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>


        <div class="parallax2 p-5 align-items-center justify-content-center">
            <div class="container bg-opacity-50 bg-light rounded-pill">
                <div class="row text-center opacity mt-5">
                    <h2>SMK Dharma Kusuma Cianjur</h2>
                    <p>Terakreditasi : A, SK No.058/BAN-SM/SK/2020</p>
                </div>
            </div>
        </div>
        <section id="contact">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h2>Contact</h2>
                        <h6 style="color: lightskyblue;">Email : smkdkc170845@gmail.com</h6>
                    </div>
                </div>
            </div>
        </section>
        <section id="visimisi">
            <div class="row justify-content-evenly fs-5 text-center mt-5">
                <div class="col-4">
                    <div class="card">
                        <h3>Misi</h3>
                        <ul style="font-size: 12px;">
                            <li>
                                <p>Menumbuh kembangkan pembentukan pribadi yang mandiri, siap berkompetisi sesuai
                                    potensi
                                    yang dimiliki dalam menghadapi era globalisasi.</p>
                            </li>
                            <li>
                                <p>Melaksanakan proses pembelajaran, bimbingan dan pelatihan secara efektif dan optimal
                                    agar terbentuk siswa yang berakhlak mulia</p>
                            </li>
                            <li>
                                <p>Menumbuh kembangkan dan mendorong semangat keunggulan secara intensif kepada seluruh
                                    warga sekolah.</p>
                            </li>
                            <li>
                                <p>Memberikan pelayanan masyarakat dalam bidang pendidikan dan pelatihan yang
                                    potensial,unggulan dan kompetitif dalam menghadapi era globalisas</p>
                            </li>
                            <li>
                                <p>Menjalin kerja sama dengan dunia usaha dan dunia industri dalam bidang penyediaan
                                    tenaga
                                    kerja yang terampil dan handal.</p>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-4">
                    <div class="card">
                        <h3>Visi</h3>
                        <ul style="font-size: 12px;">
                            <li>
                                <p>Menciptakan pribadi yang siap berkompetisi, berjiwa mandiri, unggul dalam dalam sikap
                                    dan prestasi, berdasarkan akhlak mulia.</p>
                            </li>
                            <li>
                                <p>Menyiapkan bakat kecapakapan hidup/live skill siswa siswi, mengembangkan potensi dan
                                    kompetensi</p>
                            </li>
                            <li>
                                <p>Mengembangkan kemampuan potensi tamatan melalui penguasaan tuntas kompetensi
                                    produktif dan kejuruan</p>
                            </li>
                            <li>
                                <p>Membekali sikap profesional, mandiri tangguh dan mental yang positif berlandaskan
                                    akhlakul karimah</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </section>



    </main>
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script>
        let menuToggle = document.querySelector('.toggle');
        let menu = document.querySelector('.menu');
        menuToggle.addEventListener('dblclick', function () {
            menu.classList.toggle('active');
            menuToggle.classList.toggle('active');
        })

        const list = document.querySelectorAll('li');
        function activeLink() {
            list.forEach((item) =>
                item.classList.remove('active'));
            this.classList.add('active')
        }
        list.forEach((item) =>
            item.addEventListener('click', activeLink))
    </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
        $(function () {
            $(".menu").draggable();
        });
    </script>
</body>

</html>