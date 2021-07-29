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

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-gold fixed-top" id="mainNav">
        <div class="container">
            <a style="color: black;" class="navbar-brand" href="/"><img src="{{ asset('img/logoNoBg.png') }}" alt="..." /> CASA FELICE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <em class="fas fa-bars ms-1"></em>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#portfolio">Fasilitas</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="login" style="background-color: black;">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <!-- Outer Row -->
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h4 class="h4 text-900 mb-4" style="color: black;">Book A Room</h4>
                                        </div>
                                        <form class="user" action="{{ route('booking/book_room') }}" method="post">
                                            @csrf
                                            <div class="card-body">
                                                @if(session('errors'))
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                                <div class="form-group">
                                                    <label for="name" class="label-form">Name</label>
                                                    <input type="text" class="form-control form-control-user" id="name" name="name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="check_in_date" class="label-form">Check In Date</label>
                                                    <input type="date" class="form-control" id="check_in_date" name="check_in_date">
                                                </div>
                                                <div class="form-group">
                                                    <label for="check_out_date" class="label-form">Check Out Date</label>
                                                    <input type="date" class="form-control" id="check_out_date" name="check_out_date">
                                                </div>
                                                <div class="form-group">
                                                    <label for="room_type" class="label-form">Choose Room Type:</label><br>
                                                    <select id="room_type" class="form-control" name="room_type">
                                                        <option value="" disabled selected> Choose Room Type</option>
                                                        <option value="1">Standard Room</option>
                                                        <option value="2">Deluxe Room</option>
                                                    </select>
                                                </div>
                                                <hr>
                                                <button type="submit" class="btn bg-gold btn-xl text-uppercase">
                                                    Book
                                                </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
</body>

</html>