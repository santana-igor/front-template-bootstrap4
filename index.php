<!DOCTYPE html>
<html lang="en">

<head>
    <title>Joyjet Tech Interview</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="bootstrap_v4.3.1/css/bootstrap.min.css" type="text/css">
    <!-- AOS Library CDN -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="scrolling">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="img/logo.svg" alt="" id="logo" style="width: 100%"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav text-center" id="navbar-nav-collapse">
                        <li class="nav-item active">
                            <a class="nav-link" href="#blog">Blog<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#popular">Popular</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#archive">Archive</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </nav>
    </header>

    <section class="home">
        <div class="overlay"></div>
        <div class="p-5"></div>
        <div class="p-5"></div>
        <div class="container">
            <div class="row" data-aos="fade-right">
                <div class="col-md-6">
                    <h1 class="text-uppercase text-white f-size-120 font-weight-bolder">Space<span class="text-default"
                            style="font-family: serif">.</span></h1>
                    <p class="text-white f-size-18">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                        molestie elit at lacus…</p>
                    <div class="p-4"></div>
                    <button class="btn btn-default btn-size-2 font-weight-medium">click</button>
                </div>
            </div>
        </div>
        <div class="p-4"></div>
        <div class="col-md-12" id="hidden" data-aos="fade-left">
            <div class="overlay-child"></div>
            <div class="container p-4">
                <div class="row">
                    <div class="col-md-3 text-right border-right-light pt-3 px-4">
                        <h5 class="text-white font-weight-bold">Trending</h5>
                        <h5><span class="text-default font-weight-bold">Today</span></h5>
                    </div>
                    <?php
                    for ($i=0; $i<2; $i++) {
                    ?>
                    <div class="col-md-3 border-right-light px-4">
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing ligula eget dolor.</p>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="col-md-3 px-4">
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing ligula eget dolor.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feacture bg-light">
        <div class="p-5"></div>
        <div class="container">
            <div class="row" data-aos="zoom-in-down">
                <div class="card mx-auto border-0 shadow" style="width: 22rem;">
                    <img src="img/43690.jpg" class="card-img-top d-block w-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-black-70">International Space Station</h5>
                        <p class="card-text text-black-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Curabitur luctus aliquet sapien....</p>
                    </div>
                </div>
                <div class="card mx-auto border-0 shadow" style="width: 22rem;">
                    <img src="img/43688.jpg" class="card-img-top d-block w-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-black-70">My capsule</h5>
                        <p class="card-text text-black-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Curabitur luctus aliquet sapien....</p>
                    </div>
                </div>
                <div class="card mx-auto border-0 shadow" style="width: 22rem;">
                    <img src="img/43698.jpg" class="card-img-top d-block w-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-black-70">My moon</h5> <!-- Adjust the image -->
                        <p class="card-text text-black-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Curabitur luctus aliquet sapien....</p>
                    </div>
                </div>
            </div>


        </div>
        <div class="p-5"></div>
    </section>

    <section class="about-us bg-light">
        <div class="p-5"></div>
        <div class="container">
            <div class="row" data-aos="zoom-out-left">
                <div class="col-md-4 img-about-us rounded px-5"></div>
                <div class="col-md-8 px-5">
                    <h3 class="text-uppercase font-weight-bolder text-default">About us</h3>
                    <div class="p-2"></div>
                    <p class="text-black-50 font-weight-light" style="line-height: 25px;">Lorem ipsum dolor sit amet,
                        consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                        ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                        consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                    </p>
                    <p class="text-black-50 font-weight-light" style="line-height: 25px;">In enim justo, rhoncus ut,
                        imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede
                        mollis
                        pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate
                        eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam
                        lorem
                        ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius
                        laoreet.
                        Quisque rutrum.</p>
                </div>
            </div>
        </div>
        <div class="p-5"></div>
    </section>

    <footer class="bg-light">
        <div class="container">
            <small class="text-black-50 f-size-10">© 2016 Created by Joyjet Digital Space Agency</small>
        </div>
    </footer>

    <!-- jQuery JS -->
    <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <!-- Bootstrap 4 JS -->
    <script src="bootstrap_v4.3.1/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AOS Library CDN JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Scrips JS -->
    <script src="js/scripts.js" type="text/javascript"></script>
    <!-- Initialize AOS -->
    <script>
        AOS.init();
    </script>
</body>

</html>