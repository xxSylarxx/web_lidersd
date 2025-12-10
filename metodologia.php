<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colegio Santo Domingo El Líder — Metodología</title>
    <link rel="icon" href="./public/img/icons/escudo.png">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./public/css/web.css">
    <link rel="stylesheet" href="./public/css/networks.css">
    <link rel="stylesheet" href="./public/css/card-animation.css">
    <link rel="stylesheet" href="./public/css/modal-contacto.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="./libs/font-awesone/css/all.min.css">
    <!-- OwlCarousel CSS necesario para el carrusel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
        .portada h2 {
            font-family: "Montserrat", sans-serif;
        }

        .portada {
            position: relative;
        }

        .portada .titleContainer {
            background: rgb(0 0 0 / 40%);
            position: absolute;
            padding-left: 10%;
            left: 0;
            right: 0;
            display: flex;
            justify-content: start;
            align-items: flex-end;
            height: 100%;
            padding-bottom: 3%;
        }

        .portada .titleContainer .title1 {
            font-size: 3rem;
            color: #fff;
            padding-left: 10px;
        }

        .portada img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            object-position: center 25%;
        }

        /* Card de imagen */
        .welcome-image2-card {
            position: relative;
            /*  border-radius: 20px; */
            /* overflow: hidden; */

            z-index: 1;
            transition: all 0.4s ease;
        }

        /* .welcome-image2-card:hover {
  transform: translateY(-10px);
} */

        .welcome-image2 {
            width: 90%;
            height: auto;
            display: block;
            object-fit: cover;
            border-radius: 15px;
            transition: transform 0.4s ease;
            /*  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15); */
        }

        .welcome-image2-card:hover .welcome-image2 {
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <?php include './partials/header.php'; ?>
    <?php include './partials/redes.php'; ?>
    <section class="container-fluid portada px-0">
        <div class="titleContainer">
            <div class="animate__animated animate__fadeInLeft">
                <h2 class="title1">
                    Metodología
                </h2>
            </div>
        </div>
        <img src="./public/img/portadas/portada_interna.png" alt="">
    </section>
    <section class="bienvenidos-section py-5" style="background-color: white;">
        <div class="container py-4">
            <div class="row g-5 align-items-center">
                <!-- Columna de Contenido -->
                <div class="col-lg-12 order-2 order-lg-1">
                    <div class="welcome-content">
                        <p>
                            La metodología del Colegio Santo Domingo El Líder está basada en el desarrollo de las inteligencias múltiples, reconociendo que cada estudiante posee talentos y formas únicas de aprender. Nuestro enfoque pedagógico integra actividades que estimulan la inteligencia lingüística, lógico-matemática, espacial, musical, corporal, interpersonal, intrapersonal y naturalista. A través de proyectos, dinámicas y experiencias personalizadas, ayudamos a los alumnos a descubrir y potenciar sus habilidades, promoviendo el pensamiento crítico, la creatividad y la autonomía. Esta metodología favorece el crecimiento integral, permitiendo que cada estudiante alcance su máximo potencial en un ambiente inclusivo y motivador.
                    </div>
                </div>
                <!-- Columna de Imagen -->
                <!-- <div class="col-lg-6 order-1 order-lg-2">
                    <div class="image-wrapper">
                        <div class="decoration-circle decoration-1"></div>
                        <div class="decoration-circle decoration-2"></div>
                        <div class="welcome-image2-card d-flex justify-content-center align-items-center">
                            <img src="./public/img/web/portada_inicial.png" alt="Colegio Santo Domingo El Líder" class="welcome-image2">
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <style>
        #proyectos {
            padding-bottom: 5rem;

        }

        #proyectos p {
            text-align: justify;
            color: var(--color5);
        }

        #proyectos h2 {
            font-family: "Montserrat", sans-serif;
        }

        .sedes_slider img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        #proyectos>.container-fluid {
            padding-left: 10%;
            padding-right: 10%;
        }

        .margin-infra {
            margin: 0 2rem;
        }

        @media only screen and (max-width: 650px) {
            #portada {
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, .6)), url("./public/img/web/banner_infra.jpg");
                /* background-image: url("./public/img/portada-all-1.png"); */
                background-size: 150%;
                /*   background-position: center; */
                background-repeat: no-repeat;
                color: white;
                padding-top: 8rem;
                padding-bottom: 2rem;
                height: 240px;

            }

            #portada h2 {
                font-size: 1.5rem !important;

            }

            #proyectos {
                padding-top: 4rem !important;
            }

            #proyectos h2 {
                text-align: center;
            }


            #proyectos>.container-fluid {
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .margin-infra {
                margin: 0 1rem;
            }
        }

        /* Ocultar los botones predeterminados */
        .owl-nav {
            display: flex;
            justify-content: space-between;
            position: absolute;
            top: 40%;
            width: 100%;
            transform: translateY(-50%);
            pointer-events: none;
            z-index: 2;
        }
        .sedes_content_slider {
            position: relative;
        }

        /* Estilizar los botones */
        .owl-prev,
        .owl-next {
            background: var(--color1) !important;
            color: white !important;
            border-radius: 10px !important;
            width: 60px;
            height: 60px;
            display: flex !important;
            align-items: center;
            justify-content: center;
            font-size: 32px !important;
            cursor: pointer;
            pointer-events: all;
            transition: background 0.3s;
            opacity: 1 !important;
            z-index: 3;
        }

        .owl-prev:hover,
        .owl-next:hover {
            background: var(--color2) !important;
        }

        /* Posicionar los botones */
        .owl-prev {
            position: absolute;
            left: -8px;
        }

        .owl-next {
            position: absolute;
            right: -8px;
        }

        @media only screen and (max-width: 650px) {
            .owl-nav {
                top: 38%;
            }

            .owl-prev,
            .owl-next {

                width: 40px;
                height: 40px;

                font-size: 20px;
                cursor: pointer;

            }

        }
    </style>

    <section id="proyectos">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 my-auto">
                    <div class="margin-infra">
                        <h2>Internacional Singer</h2>
                        <br>
                        <p><b>International Singer: Canto y coreografías en inglés.</b> Este proyecto invita a los estudiantes a explorar el idioma inglés a través de la música y el movimiento. Los niños aprenden canciones en inglés y participan en coreografías grupales, desarrollando habilidades lingüísticas, expresión corporal y confianza. La combinación de canto y baile convierte el aprendizaje en una experiencia divertida y dinámica, promoviendo la pronunciación, el ritmo y el trabajo en equipo.</p>
                    </div>
                </div>
                <div class="col-lg-6 my-auto">

                    <div class="margin-infra">
                        <div class="sedes_content_slider owl-carousel owl-theme">
                            <div class="sedes_slider">
                                <img src="./public/img/web/inter1.jpg" alt="Imagen 1">
                            </div>
                            <div class="sedes_slider">
                                <img src="./public/img/web/inter2.jpg" alt="Imagen 2">
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <br>

            <div class="row py-5">
                <div class="col-lg-6 my-auto">
                    <div class="margin-infra">
                        <div class="sedes_content_slider owl-carousel owl-theme">
                            <div class="sedes_slider">
                                <img src="./public/img/web/guerreros1.jpg" alt="Imagen 1">
                            </div>
                            <div class="sedes_slider">
                                <img src="./public/img/web/guerreros2.jpg" alt="Imagen 2">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 my-auto">
                    <div class="margin-infra pt-5">
                        <h2>Guerreros de la Cultura</h2>
                        <br>
                        <p><b>Guerreros de la Cultura: Teatro y expresión artística.</b> El proyecto de teatro permite a los estudiantes desarrollar habilidades comunicativas, creatividad y confianza en sí mismos. A través de la interpretación de personajes y la puesta en escena, los alumnos exploran emociones, valores y diferentes perspectivas, fortaleciendo su empatía y trabajo en equipo. El teatro fomenta la expresión oral, el pensamiento crítico y el respeto por la diversidad cultural, contribuyendo a una formación integral y al desarrollo de líderes con sensibilidad social.</p>
                    </div>
                </div>

            </div>

            <br>
            <div class="row">
                <div class="col-lg-6 my-auto">
                    <div class="margin-infra">
                        <h2>Olimpiadas Dominguinas</h2>
                        <br>
                        <p>
                            <b>Olimpiadas Dominguinas: Competencia sana, diversión y recreación.</b> Las Olimpiadas Dominguinas son jornadas deportivas donde los estudiantes participan en diversas disciplinas como fútbol, vóley entre otros. Este proyecto promueve la sana competencia, el trabajo en equipo y el respeto entre compañeros. A través del deporte, los alumnos desarrollan habilidades físicas, fortalecen su autoestima y aprenden valores como la perseverancia, la solidaridad y el juego limpio, contribuyendo a su bienestar integral y formación como líderes.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 my-auto">
                    <div class="margin-infra">
                        <div class="sedes_content_slider owl-carousel owl-theme">
                            <div class="sedes_slider">
                                <img src="./public/img/web/olimpiadas1.jpg" alt="Imagen 1">
                            </div>
                            <div class="sedes_slider">
                                <img src="./public/img/web/olimpiadas2.jpg" alt="Imagen 2">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <?php include './partials/footer.php'; ?>
    <!-- Modal para mostrar la foto ampliada -->
    <div class="modal fade" id="modalFoto" tabindex="-1" aria-labelledby="modalFotoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="padding:0px;">
                <div class="modal-body">
                    <img class="img-fluid rounded" src="" id="fotoview">
                </div>
            </div>
        </div>
    </div>
    <script>
        window.FontAwesomeConfig = {
            autoReplaceSvg: false
        };
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="./libs/font-awesone/js/all.min.js"></script>
    <script src="./public/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".sedes_content_slider").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 3000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                },
                navText: ["<span style='font-size:2rem;'>&#10094;</span>", "<span style='font-size:2rem;'>&#10095;</span>"]
            });
        });
    </script>
</body>

</html>