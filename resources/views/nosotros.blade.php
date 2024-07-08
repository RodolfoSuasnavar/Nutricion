<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Calorie Tracked</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="template/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="template/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="template/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="template/css/style.css" rel="stylesheet">
        <style>
            .float {
                position: fixed;
                width: 60px;
                height: 60px;
                bottom: 20px;
                right: 40px;
                background-color: #25d366;
                color: #FFF;
                border-radius: 30px;
                text-align: center;
                font-size: 30px;
                line-height: 60px; /* Ajusta esto para centrar verticalmente */
                box-shadow: 2px 2px 3px #999;
                z-index: 100;
            }

            .float:hover {
                text-decoration: none;
                color: #25d366;
                background-color: #fff;
            }

        </style>
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid fixed-top">
            <div class="container topbar bg-primary d-none d-lg-block">
                <div class="d-flex justify-content-between">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
                    <a href="https://api.whatsapp.com/send?phone=9191148920&text=Hola buen dia, quisiera saber informacion" class="btn btn-primary border-3" target="_blank">
                    {{-- <i class="fa fa-whatsapp my-float"></i> --}}
                    </a>
                </div>
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-light bg-white navbar-expand-xl">
                    <a href="index.html" class="navbar-brand"><h1 class="text-primary display-6">Calorie Tracked</h1></a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="{{ route('welcome') }}" class="nav-item nav-link active">Inicio</a>
                            <a href="{{ route('ejercicio') }}" class="nav-item nav-link active">Ejercicio</a>


                            <div class="nav-item dropdown">

                                <div class="dropdown-menu m-0 bg-secondary rounded-0">

                                </div>
                            </div>
                            <a href="{{ route('nosotros') }}" class="nav-item nav-link active">Nosotros</a>
                        </div>
                        <div class="d-flex m-3 me-0">

                            <a href="login.html" class="my-auto">
                                <i class="fas fa-user fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="p-5 bg-light rounded">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="text-center mx-auto" style="max-width: 700px;">
                                <h1 class="text-primary">Nosotros</h1>
                                <p class="mb-4">Transformamos vidas a través de una dieta equilibrada y hábitos saludables, porque creemos que cada elección cuenta en el camino hacia una versión más saludable de ti mismo</a>.</p>
                            </div>
                        </div>

                        <div class="card" style="width: 18rem;">
                            <img src="img/dani.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2>Daniela Llaven</h2>
                              <p class="card-text">Empoderada por Calorie Tracked, ella encuentra en cada préstamo de productos una herramienta esencial para alcanzar sus metas de bienestar, haciendo de cada día un paso hacia un estilo de vida más saludable.</p>
                            </div>
                          </div>
                          <div class="card" style="width: 18rem;">
                            <img src="img/may.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2>Luis May</h2>
                              <p class="card-text">Con el respaldo de Calorie Tracked, él experimenta una transformación continua en su viaje hacia el bienestar, donde los préstamos de productos juegan un papel crucial en la conquista de sus objetivos.</p>
                            </div>
                          </div>
                          <div class="card" style="width: 18rem;">
                            <img src="img/jacob.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2>Jacob Zepeda</h2>
                              <p class="card-text">Calorie Tracked ha sido el socio silencioso en su búsqueda de un estilo de vida más saludable. Los préstamos de productos no solo facilitan sus metas, sino que también marcan la diferencia en su camino hacia el éxito.</p>
                            </div>
                          </div>
                          <div class="card" style="width: 18rem;">
                            <img src="img/rodo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2>Rodolfo Suasnavar </h2>
                              <p class="card-text">En el viaje de este individuo hacia el bienestar, Calorie Tracked emerge como un facilitador esencial. Los préstamos de productos se convierten en catalizadores que impulsan sus esfuerzos hacia resultados palpables.</p>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
            <div class="container py-5">
                <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <a href="#">
                                <h1 class="text-primary mb-0">Calorie Tracked</h1>
                                <p class="text-secondary mb-0">Productos Frescos</p>
                            </a>
                        </div>
                        <div class="col-lg-6">

                        </div>
                        <div class="col-lg-3">
                            <div class="d-flex justify-content-end pt-3">
                                <!-- <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-twitter"></i></a> -->
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href="https://www.facebook.com/utdelaselva?locale=es_LA"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href="https://www.youtube.com/@ELTEMACH"><i class="fab fa-youtube"></i></a>
                                <!-- <a class="btn btn-outline-secondary btn-md-square rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">¡Por qué le agradamos a la gente!</h4>
                            <p class="mb-4">Hacer dieta es necesario para mantener un equilibrio nutricional, controlar el peso, prevenir enfermedades y promover una salud general óptima.</p>
                            <!-- <a href="" class="btn border-secondary py-2 px-4 rounded-pill text-primary">Read More</a> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">

                    </div>
                    <div class="col-lg-3 col-md-6">

                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Contacto</h4>
                            <p>Dirección: ocosingo centrar sur, Ocosingo, Chis.</p>
                            <p>Email: PintoZepedaJacob@gmail.com</p>
                            <p>Teléfono: +52 919 673 1290</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End
        -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">

                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">

                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->



        <!-- Back to Top -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://api.whatsapp.com/send?phone=9191148920&text=Hola buen dia, quisiera saber informacion" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
        </a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="template/lib/easing/easing.min.js"></script>
    <script src="template/lib/waypoints/waypoints.min.js"></script>
    <script src="template/lib/lightbox/js/lightbox.min.js"></script>
    <script src="template/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="template/js/main.js"></script>
    </body>

</html>
