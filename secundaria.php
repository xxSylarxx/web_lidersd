<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colegio Santo Domingo El Líder — Nivel Secundaria</title>
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
        .portada h2 { font-family: "Montserrat", sans-serif; }
        .portada { position: relative; }
        .portada .titleContainer { background: rgb(0 0 0 / 40%); position: absolute; padding-left: 10%; left: 0; right: 0; display: flex; justify-content: start; align-items: flex-end; height: 100%; padding-bottom: 3%; }
        .portada .titleContainer .title1 { font-size: 3rem; color: #fff; padding-left: 10px; }
        .portada img { width: 100%; height: 350px; object-fit: cover; object-position: center 25%; }
        /* Card de imagen */
        .welcome-image2-card { position: relative; z-index: 1; transition: all 0.4s ease; }
        .welcome-image2 { width: 90%; height: auto; display: block; object-fit: cover; border-radius: 15px; transition: transform 0.4s ease; }
        .welcome-image2-card:hover .welcome-image2 { transform: scale(1.05); }
        /* Estilos del carousel */
        .blog_section .blog_content .blog_item { margin-bottom: 30px; position: relative; border-radius: 2px; overflow: hidden; }
        .blog_section .blog_content .blog_item:hover .blog_image img { transform: scale(1.1); border-radius: 12px; }
        .blog_section .blog_content .blog_item .blog_image { overflow: hidden; padding: 0 7px; border-radius: 12px; }
        .blog_section .blog_content .blog_item .blog_image img { width: 100%; height: 330px; transition: transform 0.5s ease-in-out; border-radius: 12px; }
        .blog_section .blog_content .owl-nav { display: block; }
        .blog_section .blog_content .owl-nav .owl-prev { position: absolute; left: -27px; top: 40%; border: 5px solid #fff; text-align: center; z-index: 5; width: 40px; height: 40px; border-radius: 50%; outline: 0; background: var(--color1); transition: all 0.3s; color: #fff; }
        .blog_section .blog_content .owl-nav .owl-prev span { font-size: 25px; margin-top: -5px; display: inline-block; }
        .blog_section .blog_content .owl-nav .owl-next { position: absolute; right: -27px; top: 40%; border: 5px solid #fff; text-align: center; z-index: 5; width: 40px; height: 40px; border-radius: 50%; outline: 0; background: var(--color1); color: #fff; transition: all 0.3s; }
        .blog_section .blog_content .owl-nav .owl-next span { font-size: 25px; margin-top: -5px; display: inline-block; }
        #infraestructura h2::after { background: white; }
        @media only screen and (max-width: 577px) { .blog_section .owl-nav .owl-prev { left: -17px !important; } .blog_section .owl-nav .owl-next { right: -17px !important; } }
    </style>
</head>
<body>
    <?php include './partials/header.php'; ?>
    <?php include './partials/redes.php'; ?>
    <section class="container-fluid portada px-0">
        <div class="titleContainer">
            <div class="animate__animated animate__fadeInLeft">
                <h2 class="title1">Nivel Secundaria</h2>
            </div>
        </div>
        <img src="./public/img/portadas/portada_interna.png" alt="">
    </section>
    <section class="bienvenidos-section py-5">
        <div class="container py-4">
            <div class="row g-5 align-items-center">
                <!-- Columna de Contenido -->
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="welcome-content">
                        <p>
                            En el Nivel Secundaria del Colegio Santo Domingo El Líder, acompañamos a nuestros estudiantes en el desarrollo de competencias académicas, personales y sociales que les permitan afrontar los retos del mundo actual. Nuestra propuesta educativa promueve el pensamiento crítico, la autonomía, el trabajo en equipo y la responsabilidad social, integrando metodologías innovadoras y el uso de tecnología. Buscamos formar jóvenes íntegros, creativos y comprometidos con su entorno, preparados para continuar su formación superior y contribuir positivamente a la sociedad.
                        </p>
                    </div>
                </div>
                <!-- Columna de Imagen -->
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="image-wrapper">
                        <div class="decoration-circle decoration-1"></div>
                        <div class="decoration-circle decoration-2"></div>
                        <div class="welcome-image2-card d-flex justify-content-center align-items-center">
                            <img src="./public/img/web/portada_secundaria.jpg" alt="Colegio Santo Domingo El Líder" class="welcome-image2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="infraestructura">
        <!-- SECCIÓN DEL CARRUSEL -->
        <div class="container-fluid" style="background-color: #327DD7;">
            <br>
            <div class="container">
                <div class="row pt-5">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-center">
                            <h2 class="section-title" style="color:white;">Infraestructura</h2>
                        </div>
                    </div>
                </div>
                <section class="blog_section py-5">
                    <div class="blog_content">
                        <div class="owl-carousel owl-theme">
                            <div class="blog_item">
                                <div class="blog_image">
                                    <img class="img-fluid border" src="./public/img/web/infra_secundaria1.jpg" onclick="showFoto(0);">
                                </div>
                            </div>
                            <div class="blog_item">
                                <div class="blog_image">
                                    <img class="img-fluid border" src="./public/img/web/infra_primaria2.jpg" onclick="showFoto(1);">
                                </div>
                            </div>
                            <div class="blog_item">
                                <div class="blog_image">
                                    <img class="img-fluid border" src="./public/img/web/infra_inicial3.jpg" onclick="showFoto(2);">
                                </div>
                            </div>
                            <div class="blog_item">
                                <div class="blog_image">
                                    <img class="img-fluid border" src="./public/img/galeria/fachada.jpeg" onclick="showFoto(3);">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <section id="principios">
        <div class="container-fluid pt-4">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-lg-12 pb-5">
                        <div class="d-flex justify-content-center pb-4">
                            <h2 class="section-title">Principios Institucionales</h2>
                        </div>
                        <p style="color:var(--color5);text-align:center;padding-top:.5rem;">Nuestra Institución Educativa Privada “Asociación Educativa Santo Domingo, el Líder” y se encuentra sustentada en los siguientes principios: </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4 mb-4 px-4">
                        <div class="card card-10 stacked--fan-right" style="font-family: 'Bree Serif', serif; background-color: var(--color3); border: none; border-radius: 7px;">
                            <a class="card-body text-white py-4">
                                <div class="d-flex flex-row align-items-center justify-content-center">
                                    <i class="fas fa-balance-scale fa-2x"></i>
                                    <span class="ms-3 fs-4">Ética</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 px-4">
                        <div class="card card-10 stacked--fan-right" style="font-family: 'Bree Serif', serif; background-color: var(--color3); border: none; border-radius: 7px;">
                            <a class="card-body text-white py-4">
                                <div class="d-flex flex-row align-items-center justify-content-center">
                                    <i class="fas fa-vote-yea fa-2x"></i>
                                    <span class="ms-3 fs-4">Democracia</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 px-4">
                        <div class="card card-10 stacked--fan-right" style="font-family: 'Bree Serif', serif; background-color: var(--color3); border: none; border-radius: 7px;">
                            <a class="card-body text-white py-4 ">
                                <div class="d-flex flex-row align-items-center justify-content-center">
                                    <i class="fas fa-balance-scale-right fa-2x"></i>
                                    <span class="ms-3 fs-4">Equidad</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 px-4">
                        <div class="card card-11 stacked--fan-right" style="font-family: 'Bree Serif', serif; background-color: var(--color3); border: none; border-radius: 7px;">
                            <a class="card-body text-white py-4">
                                <div class="d-flex flex-row align-items-center justify-content-center">
                                    <i class="fas fa-universal-access fa-2x"></i>
                                    <span class="ms-3 fs-4">Inclusión</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 px-4">
                        <div class="card card-10 stacked--fan-right" style="font-family: 'Bree Serif', serif; background-color: var(--color3); border: none; border-radius: 7px;">
                            <a class="card-body text-white py-4">
                                <div class="d-flex flex-row align-items-center justify-content-center">
                                    <i class="fas fa-globe-americas fa-2x"></i>
                                    <span class="ms-3 fs-4">Interculturalidad</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 px-4">
                        <div class="card card-10 stacked--fan-right" style="font-family: 'Bree Serif', serif; background-color: var(--color3); border: none; border-radius: 7px;">
                            <a class="card-body text-white py-4">
                                <div class="d-flex flex-row align-items-center justify-content-center">
                                    <i class="fas fa-leaf fa-2x"></i>
                                    <span class="ms-3 fs-4">Conciencia Ambiental</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 px-4">
                        <div class="card card-10 stacked--fan-right" style="font-family: 'Bree Serif', serif; background-color: var(--color3); border: none; border-radius: 7px;">
                            <a class="card-body text-white py-4">
                                <div class="d-flex flex-row align-items-center justify-content-center">
                                    <i class="fas fa-lightbulb fa-2x"></i>
                                    <span class="ms-3 fs-4">Creatividad e Innovación</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 px-4">
                        <div class="card card-10 stacked--fan-right" style="font-family: 'Bree Serif', serif; background-color: var(--color3); border: none; border-radius: 7px;">
                            <a class="card-body text-white py-4">
                                <div class="d-flex flex-row align-items-center justify-content-center">
                                    <i class="fas fa-venus-mars fa-2x"></i>
                                    <span class="ms-3 fs-4">Igualdad de Género</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 px-4">
                        <div class="card card-10 stacked--fan-right" style="font-family: 'Bree Serif', serif; background-color: var(--color3); border: none; border-radius: 7px;">
                            <a class="card-body text-white py-4">
                                <div class="d-flex flex-row align-items-center justify-content-center">
                                    <i class="fas fa-seedling fa-2x"></i>
                                    <span class="ms-3 fs-4">Desarrollo sostenible</span>
                                </div>
                            </a>
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
        window.FontAwesomeConfig = { autoReplaceSvg: false };
    </script>
    <script src="./libs/font-awesone/js/all.min.js"></script>
    <script src="./public/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                dots: false,
                nav: true,
                autoplay: true,
                smartSpeed: 2000,
                autoplayTimeout: 9000,
                responsive: {
                    0: { items: 1 },
                    600: { items: 2 },
                    1000: { items: 3 }
                }
            });
        });
        // Función para mostrar la foto en el modal
        function showFoto(item) {
            let list = [
                './public/img/web/infra_secundaria1.jpg',
                './public/img/web/infra_primaria2.jpg',
                './public/img/web/infra_inicial3.jpg',
                './public/img/galeria/fachada.jpeg'
            ];
            $('#fotoview').attr('src', list[item]);
            $('#modalFoto').modal('show');
        }
    </script>
</body>
</html>
