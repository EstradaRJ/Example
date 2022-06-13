<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <title>Citas Médicas</title>
</head>

<body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg bg-info navbar-dark py-3 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#top">
                <img src="img/log.png" alt="" width="204" height="41" class="d-inline-block align-text-top">
            </a>
            <a id="navbarDropdown"  href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
               
             </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-link active">
                        <strong href="#" class="nav-link text-white" >Servicios</strong>
                    </li>
                    <li class="nav-link active">
                        <strong href="#" class="nav-link text-white">Como funciona</strong>
                    </li>
                    <li class="nav-link active">
                        <strong href="#" class="nav-link text-white">Preguntas frecuentes</strong>
                    </li>
                    <li class="nav-link active dropdown">
                        <strong class="nav-link dropdown-toggle text-white" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Aserca de nosotros
                        </strong>
                        <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="/">Mision</a></li>
                            <li><a class="dropdown-item" href="/">Vision</a></li>
                            <li><a class="dropdown-item" href="/">Valores</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#sitemap">Mapa del sitio</a></li>
                        </ul>
                           
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Showcase/Hero area -->

    <section id="top" class="bg-light text-dark p-5 p-lg-0 pt-lg-5 text-center text-sm-start text-md-center">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div class="text-start">
                    <h1>Obtenga su cita sin <span class="text-info">Cualquier línea</span></h1>
                    <p class="lead my-4 text-start">No más pérdida de tiempo</p>
                    <button class="btn btn-info rounded-pill text-white"  href="#">Aprende mas</button>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="img/doctorCitasOnline.png"
                    alt="Image of a Iphone with the app running">
            </div>
        </div>
    </section>



    <!-- Newletter little bar -->

    <section class="bg-info text-black p-5">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3 id="services" class="mb-3 mb-md-0 fs-5 text-white">¡No más filas, pide tu cita en nuestra web!</h3>
                <div class="input-group news-input">
                    <input type="email" class="form-control" placeholder="Enter Email">
                    <button  class="btn btn-outline-light" type="button"
                        id="button-newsletter">Enviar</button>
                </div>
            </div>
        </div>
    </section>


    <!-- Services/Features Carusel-->

    <section class="p-5">
        <div class="container text-center">
            <!-- ancla -->
            <h3 class="mb-5">Puedes encontrar estos servicios...<br>
                <span class="text-info fs-5">...¡y mucho más!</span>
            </h3>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/consultation.png" class="rounded mx-auto d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/pharmacy.png" class="rounded mx-auto d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/search.png" class="rounded mx-auto d-block" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span id="hdiw" class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>


        <!-- Footer -->
        <footer class="bg-info text-white pt-5 pb-4">

            <div class="container text-center text-md-left">

                <div class="row text-center text-md-left">

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold ">Acuerdos de usuario</h5>
                        <p>
                            <a href="#" class="text-white" style="text-decoration: none;"> Términos y condiciones</a>
                        </p>
                        <p>
                            <a href="#" class="text-white" style="text-decoration: none;"> Aviso de Privacidad</a>
                        </p>


                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold ">Consigue ayuda</h5>
                        <p>
                            <a href="#" class="text-white" style="text-decoration: none;"> Preguntas frecuentes</a>
                        </p>
                        <p>
                            <a href="#" class="text-white" style="text-decoration: none;"> ¿Cómo funciona?</a>
                        </p>
                        <p>
                            <a href="#" class="text-white" style="text-decoration: none;"> Mapa del sitio</a>
                        </p>


                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold">Contact Us</h5>
                        <p>
                            <a href="#" class="text-white" style="text-decoration: none;"> Tepic Nayarit, Los
                                Fresnos</a>
                        </p>
                        <p>
                            <a href="#" class="text-white" style="text-decoration: none;"> 311-354-4657</a>
                        </p>

                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 ">Siguenos</h5>
                        <p>
                            <i class="fab fa-facebook-f "></i>
                        </p>
                        <p>
                            <i class="fab fa-twitter"></i>
                        </p>
                        <p>
                            <i class="fab fa-instagram"></i>
                        </p>
                        <p>
                            <i class="fab fa-youtube"></i>
                        </p>
                    </div>

                </div>

                <hr class="mb-5">

                <div class="row align-items-center">
                    <p>©Copyright2022 | <strong class="text-white">Cita</strong> | Reservados todos los derechos</p>
                </div>

            </div>

        </footer>


        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
                 <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
        <script src="js/validacion.js"></script>
                <script src="/js/validacion.js"></script>
        </script>
</body>

</html>
