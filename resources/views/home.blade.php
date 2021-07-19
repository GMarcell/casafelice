<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Casa Felice</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logoNoBg.png') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('vendor/agency/css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-gold fixed-top" id="mainNav">
        <div class="container">
            <a style="color: black;" class="navbar-brand" href="#page-top"><img src="{{ asset('img/logoNoBg.png') }}" alt="..." /> CASA FELICE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <em class="fas fa-bars ms-1"></em>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Fasilitas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="login" style="background-color: black;">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif
        @if (Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
        @endif
        <div class="container">
            <div class="masthead-subheading" style="color: black;">Welcome To Casa Felice</div>
            <div class="masthead-heading text-uppercase" style="color: black;">Smart Luxury Living</div>
            <div class="col-sm">
                <a class="btn bg-gold btn-xl text-uppercase" href="/book_room">Book Your Room</a>
            </div>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Services</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row text-center">
                <div class="col-sm">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#standardroom">
                        <img src="{{ asset('img/kamar.jpeg') }}" alt="" height="400px">
                    </a>
                    <div class="portfolio-caption">
                        <h4 class="my-3">Standard Room</h4>
                    </div>
                </div>
                <div class="col-sm">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#deluxeroom">
                        <img src="{{ asset('img/kamar2.jpeg') }}" alt="" height="400px">
                    </a>
                    <div class="portfolio-caption">
                        <h4 class="my-3">Deluxe Room</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Fasilitas</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <img class="img-fluid" src="{{ asset('img/dalam.jpeg') }}" alt="..." style="height: 350px;" />
                        <div class="portfolio-caption bg-gold">
                            <div class="portfolio-caption-heading">Ruang Tunggu</div>
                            <div class="portfolio-caption-subheading text-muted">Lorem</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <img class="img-fluid" src="{{ asset('img/diningroom2.jpeg') }}" alt="..." style="height: 350px;" />
                        <div class="portfolio-caption bg-gold">
                            <div class="portfolio-caption-heading">Cafe</div>
                            <div class="portfolio-caption-subheading text-muted">lorem lorem</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <img class="img-fluid" src="{{ asset('img/balkon.jpeg') }}" alt="..." style="height: 350px;" />
                        <div class="portfolio-caption bg-gold">
                            <div class="portfolio-caption-heading">Balkon</div>
                            <div class="portfolio-caption-subheading text-muted">LOrem</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!-- Portfolio item 4-->
                    <div class="portfolio-item">
                        <img class="img-fluid" src="{{ asset('img/lounge.jpeg') }}" alt="..." style="height: 350px;" />
                        <div class="portfolio-caption bg-gold">
                            <div class="portfolio-caption-heading">Lounge</div>
                            <div class="portfolio-caption-subheading text-muted">Lorem</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- Portfolio item 5-->
                    <div class="portfolio-item">
                        <img class="img-fluid" src="{{ asset('img/view.jpeg') }}" alt="..." style="height: 350px;" />
                        <div class="portfolio-caption bg-gold">
                            <div class="portfolio-caption-heading">View</div>
                            <div class="portfolio-caption-subheading text-muted">lorem lorem</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 ">
                    <!-- Portfolio item 6-->
                    <div class="portfolio-item">
                        <img class="img-fluid" src="{{ asset('img/receptionis2.jpeg') }}" alt="..." style="height: 350px;" />
                        <div class="portfolio-caption bg-gold">
                            <div class="portfolio-caption-heading">Receptionis</div>
                            <div class="portfolio-caption-subheading text-muted">lorem lorem</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Visi & Misi</h2>
            </div>
            <div class="container">
                <div class="col-lg">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body bg-gold">
                            <div class="row">
                                <div class="col">
                                    <div class="p-4">
                                        <div class="text-left">
                                            <h3 class="text-900 mb-4" style="color: black;">Visi</h3>
                                        </div>
                                        <div>
                                            <p>Menjadi penginapan pilihan utama dan terbaik dengan standard hotel berbintang</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0 bg-gold">
                            <div class="row">
                                <div class="col">
                                    <div class="p-4">
                                        <div>
                                            <h3 class="text-900 mb-4 float-right" style="color: black;">Misi</h3>
                                        </div>
                                        <div>
                                            <ul>
                                                <li>
                                                    Memberikan kenyamanan kehangatan dan pelayanan yang terbaik bagi parah Tamu melalui peningkatkan kinerja SDM yang berkulitas
                                                </li>
                                                <li>
                                                    Memperluas jaringan Casa Felice diseluruh indonesia, serta memberikan return of invesment kepada pemegang saham
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <div class="col-sm">
                    <h4 class="my-3" style="color: antiquewhite;">Corporate Office</h4>
                    <p class="text-muted" style="text-align: left;">JL. Sisingamagaraja Passo larier, Kec Baguala,
                        Passo Ambon,
                        Maluku, Indonesia <br>
                        Telp. 09113687438 <br>
                        Email
                        Casafelice 010773@gmail.com</p>
                </div>
                <div class="col-sm">
                    <h4 class="my-3" style="color: antiquewhite;">Follow Us</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><em class="fab fa-whatsapp"></em></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><em class="fab fa-facebook-f"></em></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><em class="fab fa-instagram"></em></a>
                </div>
                <div class="col-sm">
                    <h4 class="my-3" style="color: antiquewhite;">Payment Method</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2021</div>
                <div class="col-lg-4 my-3 my-lg-0">
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="standardroom" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('vendor/agency/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                <div class="container">
                    <div class="text-center">
                        <h2 class="text-uppercase">Standard Room</h2>
                        <br>
                    </div>
                    <div class="row">
                        <!-- Project details-->
                        <div class="col-sm">
                            <img src="{{ asset('img/kamar2.jpeg') }}" height="400px" />
                        </div>
                        <div class="col-sm align-left">
                            <h4> Fasilitas : </h4>
                            <ul>
                                <li>Luas Kamar 16 Meter</li>
                                <li>Vase</li>
                                <li>Kamar Mandi</li>
                                <li>Air Conditioner (AC)</li>
                                <li>Wifi Connection</li>
                                <li>Tempat tidur modern minimalis</li>
                                <li>Telp Kamar</li>
                                <li>Lemari</li>
                                <li>Washtafel</li>
                                <li>Cermin</li>
                                <li>Selimut</li>
                            </ul>
                        </div>
                        <div>
                            <h4>Price : 250.000 (Including Breakfast)</h4>
                        </div>
                        <div>
                            <button class="btn bg-gold btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <em class="fas fa-times me-1"></em>
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="deluxeroom" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('vendor/agency/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                <div class="container">
                    <div class="text-center">
                        <h2 class="text-uppercase">Deluxe Room</h2>
                        <br>
                    </div>
                    <div class="row">
                        <!-- Project details-->
                        <div class="col-sm">
                            <img src="{{ asset('img/kamar2.jpeg') }}" height="400px" />
                        </div>
                        <div class="col-sm align-left">
                            <h4> Fasilitas : </h4>
                            <ul>
                                <li>Luas Kamar 16 Meter</li>
                                <li>Vase</li>
                                <li>Kamar Mandi</li>
                                <li>Air Conditioner (AC)</li>
                                <li>Wifi Connection</li>
                                <li>Tempat tidur modern minimalis</li>
                                <li>Telp Kamar</li>
                                <li>Lemari</li>
                                <li>Washtafel</li>
                                <li>Cermin</li>
                                <li>Selimut</li>
                                <li>BedCover</li>
                            </ul>
                        </div>
                        <div>
                            <h4>Price : 250.000 (Including Breakfast)</h4>
                        </div>
                        <div>
                            <button class="btn bg-gold btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <em class="fas fa-times me-1"></em>
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('vendor/agency/js/scripts.js') }}" type=""></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>