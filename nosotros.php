<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Colegio Santo Domingo El Líder — Nosotros</title>
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

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="./libs/font-awesone/css/all.min.css">
    <style>
        /* portada */
        .portada h2 {
            font-family: "Montserrat", sans-serif;
        }

        .portada {
            position: relative;
        }

        .portada .titleContainer {
            background: rgb(0 0 0 / 40%);
            position: absolute;
            /* left: 10%; */
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
            object-position: center 35%;
        }

        #identidad h3 {
            font-family: "Montserrat", sans-serif;
            color: var(--color1);
            text-align: center;
            padding-top: .6rem;
            padding-bottom: .6rem;
        }

        #identidad p {
            color: var(--color5);
            text-align: justify;
        }

        .content-icon {
            width: 150px;
            border-radius: 64% 36% 48% 52% / 59% 65% 35% 41%;
            transition: .5s all ease-in-out;
        }

        .content-icon:hover {

            border-radius: 15px;

        }

        .content-icon img {
            width: 40%;
            margin: 2rem;
        }
    </style>
</head>

<body>
    <?php include './partials/header.php'; ?>
    <?php include './partials/redes.php'; ?>

    <!-- Main content will be added here -->
    <!-- Bienvenida Section -->
    <section class="container-fluid portada px-0">
        <div class="titleContainer">
            <div class="animate__animated animate__fadeInLeft">
                <h2 class="title1">
                    Nuestra Identidad
                </h2>
            </div>
        </div>
        <img src="https://www.cristosalvador.edu.pe/public/img/portadas_internas/somos_1.jpeg" alt="">
    </section>
    <section id="identidad">
        <div class="container pt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-5 px-5">
                    <div class="d-flex justify-content-center">
                        <div class="content-icon" style="background-color: var(--color2);">
                            <center><img src="https://www.cristosalvador.edu.pe/public/img/icons/vision.png" alt=""></center>
                        </div>
                    </div>
                    <h3>Visión</h3>
                    <br>
                    <p>Para el 2030, la I.E.P. “Santo Domingo, El Líder” brinda una educación de calidad acorde con los cambios sociales y tecnológicos. Sus estudiantes alcanzan los aprendizajes del Perfil de egreso; los docentes, comprometidos, aplican metodologías activas que impulsan el protagonismo estudiantil; y los directivos ejercen un liderazgo transformador basado en la colaboración y la participación democrática.</p>
                </div>
                <div class="col-lg-5 px-5">
                    <div class="d-flex justify-content-center">
                        <div class="content-icon" style="background-color: var(--color2);">
                            <center><img src="https://www.cristosalvador.edu.pe/public/img/icons/mision.png" alt=""></center>
                        </div>
                    </div>
                    <h3>Misión</h3>
                    <br>
                    <p>Somos una institución educativa privada que brinda formación integral a estudiantes de inicial, primaria y secundaria, promoviendo valores, convivencia pacífica y actitudes democráticas. Mediante metodologías innovadoras, aseguramos los aprendizajes del Perfil de egreso del Currículo Nacional, respondiendo a los cambios sociales, avances científicos y tecnológicos, y a las necesidades del contexto.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include './partials/footer.php'; ?>

    <script>
        // Prevent FontAwesome from using SVG by default
        window.FontAwesomeConfig = {
            autoReplaceSvg: false
        };
    </script>

    <!-- Font Awesome JS -->
    <script src="./libs/font-awesone/js/all.min.js"></script>
    <script src="./public/js/bootstrap.bundle.min.js"></script>
</body>

</html>