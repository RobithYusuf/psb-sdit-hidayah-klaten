<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PENERIMAAN SISWA BARU | SD Islam Terpadu Hidayah Klaten</title>
    <!-- Favicon-->
    <link rel="icon" type="image/png" href="{{ asset('landing/assets/img/logo.png') }}">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('landing/css/styles.css')}}" rel="stylesheet" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-RLP2stAX+7vyFuWq2qzgAAbXzHmJlwlNJDP1iFvPp7zRMX7cnx4yBCm2hji5gLvRjPtOjP3yMMvxcPKsZW5vXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }} ">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }} ">
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="{{asset('landing/assets/img/portfolio/logo.png')}}" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#profil">
                            <h6 style="color: white; text-shadow: 2px 2px 4px black;"><b>Profil</b></h6>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="#informasi">
                            <h6 style="color: white; text-shadow: 2px 2px 4px black;"><b>Informasi</b></h6>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="#pendaftaran">
                            <h6 style="color: white; text-shadow: 2px 2px 4px black;"><b>Alur Pendaftaran</b></h6>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">
                            <h6 style="color: white; text-shadow: 2px 2px 4px black;"><b>Kontak</b></h6>
                        </a></li>
                    <!-- Tautan Login dan Registrasi -->
                    <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">
                            <h6 style="color: white; text-shadow: 2px 2px 4px black;"><b>Login</b></h6>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#registerModal">
                            <h6 style="color: white; text-shadow: 2px 2px 4px black;"><b>Registrasi</b></h6>
                        </a></li>
                </ul>
            </div>

        </div>
    </nav>



    @include('layout.alert')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Selamat Datang di PPDB Online</div>
            <div class="masthead-heading text-uppercase" style="color: yellowgreen;">SD Islam Terpadu Hidayah Klaten</div>
        </div>
    </header>

    <section class="page-section" id="profil">
        <div class="container">
        </div>
    </section>
    <br><br><br><br><br>
    <section class="page-section" id="informasi" style="background-image: url('{{ asset('storage/foto/' . $foto->foto) }}');">
        <div class="container">
            <!-- Konten Anda di sini -->
        </div>
    </section>
    <br><br><br><br><br>
    <section class="page-section" id="pendaftaran">
        <div class="container">
        </div>
    </section>
    <br><br><br><br><br>


    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Kontak</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Display Care Center Name -->
                            <input class="form-control" id="careCenterName" type="text" placeholder="Care Center Name *" value="Email: SDislamhidayahKlaten@gmail.com" disabled />
                        </div>
                        <div class="form-group">
                            <!-- Display Care Center Email -->
                            <input class="form-control" id="careCenterEmail" type="email" placeholder="Care Center Email *" value="Telepon: +62 813 8477-3838" disabled />
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Display Address -->
                            <textarea class="form-control" id="careCenterAddress" disabled style="height: 90px;">Alamat: Jl. Singosari, Jetis, Belang Wetan, Kec. Klaten Utara, Kab. Klaten, Jawa Tengah, 57438</textarea>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start"></div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a><b>SD Islam Terpadu Hidayah Klaten</b></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal Login -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">LOGIN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!-- Place your login form here -->
                    <form action="{{ route('loginproses') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Masukkan Email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                        </div>

                        <div class="form-group">
                            <div class="input-group" style="margin-top: 10px;">
                                <span id="num1" class="input-group-addon plus-sign"></span>
                                <span class="input-group-addon plus-sign">+</span>
                                <span id="num2" class="input-group-addon plus-sign"></span>
                                <input type="hidden" name="num1" id="num1_input" value="" readonly class="form-control col-3">
                                <span class="input-group-addon wow-sign" style="margin-left: 20px;"><b>=</b></span>
                                <input type="hidden" name="num2" id="num2_input" value="" readonly class="form-control col-3">
                                <input type="text" style="margin-left: 20px;" class="form-control" name="captcha" id="captcha_input" placeholder="Masukan Jawaban Dengan Benar" required>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Gaya untuk modal login dan registrasi */
        .modal-content {
            background-color: #fff;
            /* Warna latar belakang modal */
            border: 1px solid #28425a;
            /* Warna border modal */
            border-radius: 10px;
            /* Sudut bulat modal */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Efek bayangan pada modal */
            margin: 15% auto;
        }

        .modal-header {
            background-color: #38ab57;
            /* Warna latar belakang header modal */
            color: #fff;
            /* Warna teks header modal */
            border-bottom: 2px solid #537798;
            /* Warna garis bawah header modal */
        }

        .modal-title {
            font-weight: bold;
            /* Ketebalan teks judul modal */
        }

        .modal-body {
            padding: 20px;
            /* Ruang dalam modal body */
        }

        .login-modal {
            background-color: #f0f0f0;
            /* Ganti warna latar belakang sesuai keinginan Anda */
            /* Tambahkan gaya khusus untuk modal login di sini */
        }

        /* Gaya untuk modal registrasi */
        .register-modal {
            background-color: #fff;
            width: 120%;
            margin: 2% auto;
            padding: 10px;
            border: 1px solid #888;
        }

        .form-group {
            margin-bottom: 15px;
            /* Ruang antar elemen form */
        }

        .form-control {
            width: 100%;
            /* Lebar form kontrol 100% */
            padding: 10px;
            /* Ruang dalam form kontrol */
            border: 1px solid #ccc;
            /* Warna border form kontrol */
            border-radius: 5px;
            /* Sudut bulat form kontrol */
        }

        .btn-primary {
            background-color: #38ab57;
            /* Warna latar belakang tombol utama */
            color: #fff;
            /* Warna teks tombol utama */
            border: none;
            /* Hilangkan border tombol */
            border-radius: 5px;
            /* Sudut bulat tombol */
            padding: 10px 20px;
            /* Ruang dalam tombol */
        }
    </style>

    <style>
        #num1,
        #num2,
        .plus-sign {
            /* background-color:cadetblue; */
            font-weight: bold;
            font-size: 16px;
            padding: 5px;
            border-radius: 5px;
        }

        .wow-sign {
            font-weight: bold;
            font-size: 16px;
            padding: 5px;
            border-radius: 5px;
        }
    </style>


    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#loginModal').on('show.bs.modal', function() {
                var num1 = Math.floor(Math.random() * (9 - 1 + 1)) + 1;
                var num2 = Math.floor(Math.random() * (9 - 1 + 1)) + 1;

                $('#num1').text(num1);
                $('#num2').text(num2);

                // Menyimpan nilai ke dalam input tersembunyi
                $('#num1_input').val(num1);
                $('#num2_input').val(num2);
            });
        });

        function validateCaptcha() {
            var num1 = parseInt($('#num1_input').val());
            var num2 = parseInt($('#num2_input').val());
            var userAnswer = parseInt($('#captcha_input').val());

            if (userAnswer !== num1 + num2) {
                alert('Captcha verification failed');
                return false;
            }

            return true;
        }
    </script>

    <!-- Modal Register -->
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content register-modal">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">REGISTRASI</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Registration form -->
                    <form action="/registrasi" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="newUsername">Username</label>
                            <input type="text" class="form-control" name="name" placeholder="Masukkan username" required>
                        </div>
                        <div class="form-group">
                            <label for="newEmail">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Masukkan Email" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="newPassword">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="newPassword">Konfirmasi Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Konfirmasi Password" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Bootstrap core JS-->
    <!-- Core theme JS-->
    <script src="{{asset('landing/js/scripts.js')}}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
