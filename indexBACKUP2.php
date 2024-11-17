<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduscope.com</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styling untuk navbar */
        .navbar-custom {
            background-color: #ffffff; /* Background putih */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow halus pada navbar */
        }

        .navbar-brand img {
            height: 50px; /* Ukuran logo lebih besar */
        }

        .navbar-nav {
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .nav-link {
            color: #333; /* Warna teks menu */
            font-weight: 600;
            padding: 10px 20px;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #f39c12; /* Warna saat hover */
        }

        .nav-item {
            padding: 0px 20px;
        }

        .btn-login, .btn-register {
            padding: 8px 20px;
            font-weight: bold;
            border-radius: 30px;
        }

        .btn-login {
            background-color: white;
            color: #3A89FF;
            border: 2px solid #3A89FF;
        }

        .btn-login:hover {
            background-color: #3A89FF;
            color: white;
        }

        .btn-register {
            background-color: #FFBD59;
            color: white;
            border: none;
            margin-left: 10px;
        }

        .btn-register:hover {
            background-color: #e6e6e6;
            color: black;
        }

        /* Styling untuk navbar dalam mode portrait */
        @media (max-width: 767px) {
            .navbar-nav {
                flex-direction: column;
                align-items: center;
                width: 100%;
            }

            .navbar-nav .nav-item {
                margin: 5px 0;
            }

            .navbar-toggler {
                margin-left: auto;
            }

            .dropdown-menu {
                text-align: center;
            }

            /* Tambahan untuk memastikan tombol Login dan Register berada di tengah */
            .d-flex {
                justify-content: center;
                width: 100%;
                margin-top: 10px; /* Jarak atas agar tombol tidak terlalu dekat dengan navbar */
            }
        } /* Tutup tag @media */

        /* Hero Section */
        .hero-section {
            background-color: #FFF5DC;
            padding: 80px 20px;
            text-align: center;
        }
        .hero-section h1 {
            font-weight: bold;
            color: #333;
        }
        .hero-section p {
            color: #555;
        }
        .btn-join {
            background-color: #FFBD59;
            color: white;
            font-weight: bold;
            padding: 10px 20px;
        }

        /* Program Section */
        .program-section {
            background-color: #0056b3;
            color: white;
            padding: 60px 20px;
        }
        .program-section h2 {
            text-align: center;
            margin-bottom: 40px;
            font-weight: bold;
        }
        .program-card {
            text-align: center;
            background-color: #fff;
            color: #333;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
        }

        /* Tutor Section */
        .tutor-section {
            background-color: #FFBD59;
            padding: 60px 20px;
        }
        .tutor-section h2 {
            text-align: center;
            margin-bottom: 40px;
            font-weight: bold;
            color: #333;
        }

        /* Testimonial Section */
        .testimonial-section {
            background-color: #FFF5DC;
            padding: 60px 20px;
            text-align: center;
        }

        /* Footer */
        .footer {
            background-color: #0056b3;
            color: white;
            padding: 40px 20px;
        }
        .footer a {
            color: #FFBD59;
            text-decoration: none;
        }

        /* Pengaturan foto tutor */
        .tutor-photo {
            width: 120px;         /* Ukuran yang sama untuk semua foto */
            height: 120px;        /* Ukuran yang sama untuk semua foto */
            object-fit: cover;    /* Menyesuaikan gambar ke dalam lingkaran tanpa mengubah rasio aspek */
            border-radius: 50%;   /* Membuat gambar menjadi lingkaran */
            border: 3px; /* Opsional: Border untuk memberi gaya pada foto */
            margin-bottom: 10px;  /* Jarak bawah antara foto dan teks nama tutor */ 
        }
        
        /* Pengaturan foto testimoni */
        .testimonial-photo {
            width: 300px;             /* Ukuran lebih kecil dan seragam */
            height: 200px;
            object-fit: cover;        /* Menjaga proporsi gambar */
            border-radius: 10%;       /* Membuat gambar menjadi lingkaran */
            border: 3px solid #FFD700; /* Tambahkan border untuk gaya */
            margin-bottom: 20px;
        }

        /* Pengaturan teks testimoni */
        .testimonial-text {
            padding-left: 20px;        /* Memberi jarak antara teks dan gambar */
            border-left: 3px solid #FFD700; /* Gaya garis di sebelah kiri teks */
        }

        .child-image {
            width: 400px;             /* Ukuran lebih kecil dan seragam */
            height: 400px;
            margin-top: 20px;
            object-fit: cover;        /* Menjaga proporsi gambar */
            border-radius: 20%;       /* Membuat gambar menjadi lingkaran */
            border: 3px;                /* Tambahkan border untuk gaya */
            margin-bottom: 20px;
        }

        /* Jumbotron */
        .jumbotron {
            margin-top: 70px;
        }

        .jumbotron .judul {
            font-family: "Alexandria";
        }

        .judul {
            font-weight: bold;
        }

        .jumbotron p {
            font-weight: 500;
        }

        .jumbotron h1 {
            font-weight: bold;
        }

        .btn-jumbotron {
            background-color: #FFBD59;
            color:white;
        }

        .deskripsi {
            font-weight: 400;
            font-size: 14px;
        }
        #program {
    background-color: #004AAD;
}

.p-3 {
    color: #FFBD59;
}


.carousel-control-prev, .carousel-control-next {
    width: 50px;
    height: 50px;
    background-color: #FFC107; /* Warna kuning */
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.carousel-control-prev-icon, .carousel-control-next-icon {
    filter: invert(1); /* Mengubah ikon menjadi putih agar terlihat di latar kuning */
}

.carousel-item {
    padding: 5px;
}

.card-body {
    padding-left: 10px;
}

/* Atur ukuran gambar dan box card */
.card {
    border: none;
    border-radius: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 150px; /* Sesuaikan ukuran card dengan gambar */
    height: 80%;
    text-align: center;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.card-img-top {
    padding-top: 20px;
    width: 100px; /* Lebar gambar sesuai ukuran card */
    height: 100px; /* Tinggi gambar */
    object-fit: cover;
    border-radius: 10px; /* Sesuaikan jika ingin rounded */
    margin: 0 auto;
}

.card-body {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100px; /* Sesuaikan jika ingin lebih tinggi */
}

.icon-title {
    font-size: 14px;
    font-weight: bold;
}

.text-start h1 {
    line-height: 60px;
}

    </style>
</head>
<body>

    <!-- Navbar Header -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="layout/img/logo0.png" alt="Logo">
            </a>

            <!-- Tombol burger untuk membuka menu pada mode kecil -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links (Centered) -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <!-- Menu tengah -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tutor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                </ul>

                <!-- Tombol Login dan Register (terpisah) -->
                <div class="d-flex">
                    <a href="login.php" class="btn btn-login">Login</a>
                    <a href="register.php" class="btn btn-register">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Jumbotron -->
    <section class="container jumbotron d-flex align-items-center">
        <div class="row w-100">
        <div class="col text-start d-flex flex-column justify-content-center">
            <h1>Bantu anak berkembang <br> dengan kursus yang pas <br> buat mereka!</h1><br>
            <p>Bantu anak tumbuh dengan kursus yang pas buat mereka, seru dan asik! <br> Yuk, pilih kelas yang sesuai biar
            makin semangat belajar</p><br>
            <div>
                <button type="button" class="btn btn-outline-light btn-warning register-btn">Gabung Sekarang!</button>
            </div>
        </div>
        </div>
        <div class="col-md-6 d-flex justify-content-center">
            <img src="layout/img/jumbotron.png" alt="Bootstrap" width="auto" height="500">
        </div>
    </section>
    <!-- End Jumbotron -->

    <!-- Program -->
  <div id="program">
    <div class="container">
      <div class="row text-center">
        <div class="col p-3">
          <h1 class="p-2 judul">Cari program yang cocok buat kamu!</h1>
          <p class="deskripsi">Yuk, temukan program yang pas banget buat anak! Seru dan sesuai kebutuhan mereka,<br>
            bikin si kecil makin berkembang dengan cara yang asik</p>
        </div>
      </div>
      <div id="multiImageCarousel" class="carousel slide justify-content-center" data-bs-ride="carousel">
        <div class="carousel-inner">
          <!-- Slide pertama dengan 4 gambar -->
          <div class="carousel-item active">
            <div class="row text-center">
              <div class="col-lg-3 mb-2">
                <div class="card">
                  <img src="layout/img/english.png" class="card-img-top" alt="ENGLISH">
                  <div class="card-body">
                    <h5 class="icon-title">ENGLISH</h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 mb-2">
                <div class="card">
                  <img src="layout/img/japanese.png" class="card-img-top" alt="JAPANESE">
                  <div class="card-body">
                    <h5 class="icon-title">JAPANESE</h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 mb-2">
                <div class="card">
                  <img src="layout/img/bimbel.png" class="card-img-top" alt="BIMBEL">
                  <div class="card-body">
                    <h5 class="icon-title">BIMBEL</h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 mb-2">
                <div class="card">
                  <img src="layout/img/aritmatika.png" class="card-img-top" alt="JARIMATIKA">
                  <div class="card-body">
                    <h5 class="icon-title">ARIMATIKA</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide kedua dengan 4 gambar (contoh tambahan) -->
          <div class="carousel-item">
            <div class="row text-center">
              <div class="col-lg-3 col-md-6 mb-2">
                <div class="card">
                  <img src="layout/img/another-image1.png" class="card-img-top" alt="Another Image 1">
                  <div class="card-body">
                    <h5 class="icon-title">ANOTHER 1</h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 mb-2">
                <div class="card">
                  <img src="layout/img/another-image2.png" class="card-img-top" alt="Another Image 2">
                  <div class="card-body">
                    <h5 class="icon-title">ANOTHER 2</h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 mb-2">
                <div class="card">
                  <img src="layout/img/another-image3.png" class="card-img-top" alt="Another Image 3">
                  <div class="card-body">
                    <h5 class="icon-title">ANOTHER 3</h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 mb-2">
                <div class="card">
                  <img src="layout/img/another-image4.png" class="card-img-top" alt="Another Image 4">
                  <div class="card-body">
                    <h5 class="icon-title">ANOTHER 4</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Tambahkan slide lainnya di sini jika diperlukan -->
        </div>

        <!-- Tombol Navigasi Kiri -->
        <button class="carousel-control-prev" type="button" data-bs-target="#multiImageCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <!-- Tombol Navigasi Kanan -->
        <button class="carousel-control-next" type="button" data-bs-target="#multiImageCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
  <!-- End Program -->

    <!-- Tutor Section -->
    <section class="tutor-section">
        <div class="container text-center">
            <h2>Kenalan sama Tutor berpengalaman</h2>
            <p>Kenalan sama tutor berpengalaman di Eduscope Learning Centre yang siap membantu kamu menguasai berbagai bidang seperti Bahasa Inggris, Matematika, hingga TOEFL dengan metode fun learning yang efektif.</p>
        
            <div class="row">
                <!-- Tutor Profile -->
                <div class="col-md-3">
                    <div class="tutor-profile">
                        <img src="layout/img/tutor1.jpg" alt="Ali" class="tutor-photo">
                        <h3>Ali</h3>
                        <p>Tutor B. Jepang</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tutor-profile">
                        <img src="layout/img/tutor2.jpg" alt="Diya" class="tutor-photo">
                        <h3>Diya</h3>
                        <p>Tutor Calistung</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tutor-profile">
                        <img src="layout/img/tutor3.jpg" alt="Eric" class="tutor-photo">
                        <h3>Eric</h3>
                        <p>Tutor Matematika</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tutor-profile">
                        <img src="layout/img/tutor4.jpg" alt="Sarah" class="tutor-photo">
                        <h3>Sarah</h3>
                        <p>Tutor B. Inggris</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Testimoni dengan Satu Foto dan Satu Kalimat -->
    <section class="testimonial-section">
        <div class="container">
            <h2 class="text-center mb-5">Apa kata mereka tentang belajar di Eduscope</h2>

            <div class="row align-items-center">
                <!-- Foto Testimoni -->
                <div class="col-md-3 text-center">
                    <img src="layout/img/testimoni1.jpg" alt="Foto Arsyi dan Arsya" class="testimonial-photo">
                </div>

                <!-- Teks Testimoni Gabungan -->
                <div class="col-md-9">
                    <blockquote class="testimonial-text">
                        <p>"Eduscope sangat membantu kami dalam memahami pelajaran yang sulit. Tutor-tutornya berpengalaman dan sabar dalam menjelaskan materi, membuat kami lebih percaya diri dalam menghadapi ujian."</p>
                        <footer>- Arsyi & Arsya</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <p>Temukan Kursus Online yang Tepat untuk Anak Anda</p>
            <p>© 2024 Eduscope Learning Centre. All Rights Reserved</p>
            <p><a href="#">Program Eduscope</a> | <a href="#">Kontak Kami</a></p>
        </div>
    </footer>

    <!-- Link ke Bootstrap JS dan Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
