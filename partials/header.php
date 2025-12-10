<style>
    header .barsup {
        font-size: 13px;
        padding: 0px 7%;
        background: var(--color2);
    }

    header .barsup .contact-item a {
        color: #FCFCFC;
    }

    header .barsup .contact-item a i {
        font-size: 2rem;
    }

    header .barsup .mininav a {
        color: #f4f4f4;
        display: flex;
    }

    header .barsup .mininav a i {
        font-size: 1.2rem;
    }

    header .barsup .mininav .mininav-item {
        margin: 0 10px;
    }
</style>
<header>
    <div class="barsup">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-6 d-flex justify-content-start mininav">

                    <div class="mininav-item my-2"><a href="https://www.facebook.com/santodomingolider" target="_blank"> <i class="fab fa-facebook"></i> <span class="ms-2">Facebook</span> </a></div>
                    <div class="mininav-item my-2"><a href="https://www.instagram.com/santodomingolider" target="_blank"> <i class="fab fa-instagram"></i> <span class="ms-2">Instagram</span> </a></div>
                    <div class="mininav-item my-2"><a href="https://www.youtube.com/@santodomingolider" target=" _blank"> <i class="fab fa-youtube"></i> <span class="ms-2">Youtube</span> </a></div>
                    <div class="mininav-item my-2"><a href="https://www.tiktok.com/@santodomingolider" target="_blank"> <i class="fab fa-tiktok"></i> <span class="ms-2">Tik Tok</span> </a></div>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center mininav">
                    <div class="mininav-item my-2"><a href="mailto:" target="_blank"> <i class="far fa-envelope"></i> <span class="ms-2">administracion@lidersd.edu.pe</span> </a></div>
                    <div class="mininav-item my-2"><a href="https://wa.me/+51951353802" target="_blank"> <i class="fab fa-whatsapp"></i> <span class="ms-2">951 352 404</span> </a></div>
                    <div class="mininav-item my-2"><a href="https://lidersd.cubicol.pe/principal/login" target="_blank"> <img src="./public/img/icons/cubo2.png" alt="logo-cubicol" width="20"> <span class="ms-2">Intranet</span> </a></div>
                </div>

            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg" aria-label="Navegación principal">
        <div class="container-fluid header-inner">
            <a class="navbar-brand brand" href="./">
                <img class="site-logo" src="./public/img/icons/escudo.png" alt="Santo Domingo El Líder logo" width="56" height="56">
                <span class="brand-text">Santo Domingo <span>El Líder</span></span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="./">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#propuesta" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Nosotros
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./historia.php">Reseña Histórica</a></li>
                            <li><a class="dropdown-item" href="./identidad.php">Nuestra Identidad</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#propuesta" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Propuesta educativa
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./valores.php">Valores</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#niveles" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Niveles
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./inicial.php">Inicial</a></li>
                            <li><a class="dropdown-item" href="./primaria.php">Primaria</a></li>
                            <li><a class="dropdown-item" href="./secundaria.php">Secundaria</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#niveles" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Publicaciones
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./comunicados.php">Comunicados</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./galeria.php">Galería</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a href="./admision.php" class="cta">Admisión 2026</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>