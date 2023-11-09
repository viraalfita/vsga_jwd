<?php 
    require "config/db.php"; 
    require "model/informasi_model.php";
   
?>

<html>
	<head>
		<title>BPSDMP - About</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	</head>
	<body class="bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
            <a class="navbar-brand" href="#">
                <img src="assets/image/logo BPSDMP.png" alt="Logo" width="50">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-secondary rounded text-light px-3" href="login.php">Login</a>
                </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div id="carouselAutoplaying" class="carousel slide p-3 d-flex" style="height: 90vh" data-bs-ride="carousel" data-aos="fade-left">
                <div class="carousel-inner">
                <p
                    class="font text-center text-dark"
                    data-aos="zoom-in-up"
                    style="font-weight: 700; font-size: 45px"
                >
                    Balai Pengembangan Sumber Daya Manusia dan Penelitian Komunikasi dan Informatika
                </p>
                <div class="carousel-item active">
                    <img src="assets/image/tambahan.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/image/tambahan 2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/image/tambahan 3.jpg" class="d-block w-100" alt="...">
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="container-fluid bg-light my-4" id="portfolio">
                <div class="row">
                    <div class="col-3">
                        <p
                            class="font text-left text-dark"
                            data-aos="zoom-in-up"
                            style="font-weight: 700; font-size: 30px;"
                        >
                        Tentang Kami
                        </p>
                    </div>
                    <div class="col-9">
                        <hr class="my-4 text-primary" data-aos="zoom-in-up">
                    </div>
                    
                </div>

                <div class="row" data-aos="zoom-in-up">
                    <p>
                       Balai Pengembangan Sumber Daya Manusia dan Penelitian Komunikasi dan Informatika (BPSDMP) 
                       Surabaya merupakan lembaga yang berdedikasi untuk meningkatkan kemampuan individu dan kelompok
                       dalam bidang komunikasi, serta memanfaatkan teknologi informasi secara optimal. 
                       Dengan menyelenggarakan beragam program pelatihan, workshop, dan seminar, BPSDM & PKI Surabaya 
                       membantu para peserta untuk mengembangkan keterampilan komunikasi yang efektif, baik dalam aspek 
                       interpersonal maupun media. Selain itu, sebagai pusat penelitian, lembaga ini juga berfokus pada 
                       eksplorasi isu-isu terkini dalam komunikasi dan informatika, memberikan wawasan mendalam kepada 
                       masyarakat sekitar mengenai perkembangan tren dan perubahan di dunia digital.
                    </p>
                    <p>
                       Sebagai salah satu entitas kunci di Surabaya dalam memajukan komunikasi dan teknologi, 
                       BPSDMP memiliki dampak positif yang merata dalam berbagai lapisan masyarakat. Program-program 
                       yang diselenggarakan oleh lembaga ini tidak hanya memberikan manfaat praktis bagi individu dan 
                       organisasi dalam mengoptimalkan komunikasi, tetapi juga turut mendorong pertumbuhan ekonomi 
                       daerah melalui pemanfaatan teknologi informasi. Dengan memberdayakan masyarakat melalui 
                       peningkatan keterampilan dan pengetahuan di era digital, BPSDM & PKI Surabaya memainkan peran 
                       penting dalam menciptakan lingkungan yang adaptif dan inovatif dalam menghadapi tuntutan zaman 
                       modern.
                    </p>
                </div>
            </div>
        </div>
        <footer class="bg-secondary text-white">
            <div class="container py-4">
                <div class="row">
                    <div class="col-md-8">
                        <h5>Tentang BPSDMP Kominfo Surabaya</h5>
                        <p>Balai Pengembangan Sumber Daya Manusia dan Penelitian Komunikasi dan Informatika (BPSDMP Kominfo) Surabaya adalah lembaga yang berkomitmen dalam meningkatkan kemampuan individu dan masyarakat dalam bidang komunikasi dan teknologi informasi.</p>
                    </div>
                    <div class="col-md-4">
                        <h5>Kontak</h5>
                        <address>
                            Alamat: Jl. Raya Ketajen No.36<br>
                            Telepon: 0823-3184-1722<br>
                            Email: bpsdmp_surabaya@mail.kominfo.go.id
                        </address>
                    </div>
                </div>
            </div>
            <div class="text-center py-3">
                &copy; 2023 BPSDMP Kominfo Surabaya. All rights reserved.
            </div>
        </footer>
        <script>
            AOS.init();
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
	
	
	<!-- untuk me-load javascript pada web -->
	<script src="assets/jquery/jquery.min.js"></script>
	<script src="assets/bootstrap/dist/js/bootstrap.js"></script>
	<script src="assets/jquery-validation/dist/jquery.validate.js"></script>
	</body>
</html>