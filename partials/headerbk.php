<style>
    .abajo {
        background-color: #f4f4f4;
        background: #000;
        box-shadow: 0 3px 3px rgba(94, 94, 94, 0.75);
    }

    .abajo .navbar-light .navbar-nav .nav-link {
        color: var(--color2);
    }

    /* .abajo .barsup {
        display: none;
    } */

    .btnBG {
        background: var(--color1);
        padding: .5rem;
    }

    .btnBG:hover {
        background: #992d2f;
    }
	
	  #header .navbar .navbar-brand .logo {
            height: 60px;
        }

  @media (max-width: 500px) {
        #header .barsup .contact span {
            display: none;
        }

       #header .navbar .navbar-brand .logo {
            height: 70px;
        }

        #header .barsup .mininav-item span {
            display: none;
        }
    }

    @media (min-width:501px) {}
</style>

<div id="head-top"></div>
<header class="fixed-top" id="header">

    <div class="barsup">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-6 d-flex justify-content-start mininav">
                    <?php if(!empty($dataEmpresa['facebook'])) { ?>
                    <div class="mininav-item my-2"><a href="" target="_blank"> <i class="fab fa-facebook"></i> <span class="ms-2">Facebook</span> </a></div>
                    <?php } ?>

                    <?php if(!empty($dataEmpresa['instagram'])) { ?>
                    <div class="mininav-item my-2"><a href="" target="_blank"> <i class="fab fa-instagram"></i> <span class="ms-2">Instagram</span> </a></div>
                    <?php } ?>
                    
                    <?php if(!empty($dataEmpresa['youtube'])) { ?>
                    <div class="mininav-item my-2"><a href="" target=" _blank"> <i class="fab fa-youtube"></i> <span class="ms-2">Youtube</span> </a></div>
                    <?php } ?>

                    <?php if(!empty($dataEmpresa['twitter'])) { ?>
                    <div class="mininav-item my-2"><a href="" target="_blank"> <i class="fab fa-twitter"></i> <span class="ms-2">Twitter</span> </a></div>
                    <?php } ?>
                    
                    <?php if(!empty($dataEmpresa['linkedin'])) { ?>
                    <div class="mininav-item my-2"><a href="" target="_blank"> <i class="fab fa-tiktok"></i> <span class="ms-2">Tik Tok</span> </a></div>
                    <?php } ?>
                </div>

                <div class="col-6 d-flex justify-content-end align-items-center mininav">
                 
                    <div class="mininav-item my-2"><a href="mailto:<?php echo $dataEmpresa['correo1'] ?>" target="_blank"> <i class="far fa-envelope"></i> <span class="ms-2">informes@colegioflordeoro.edu.pe</span> </a></div>
              

                    
                    <div class="mininav-item my-2"><a href="https://api.whatsapp.com/send?phone=51<?php echo $dataEmpresa['whatsapp1'] ?>" target="_blank"> <i class="fab fa-whatsapp"></i> <span class="ms-2"><?php echo $dataEmpresa['whatsapp1'] ?></span> </a></div>
                
                    
                   
                    <div class="mininav-item my-2"><a href="" target="_blank"> <i class="fas fa-globe"></i> <span class="ms-2">Intranet</span> </a></div>
         

                    <!-- <div class="mininav-item my-2"><a target="_blank"> <i class="far fa-clock"></i> <span class="ms-2">Atención: 8am - 6pm</span> </a></div> -->
                </div>

            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light py-0">
        <div class="container">
            <a class="navbar-brand" href="/index">
                <img class="logo" src="./public/img/icons/logo1.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/index">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nosotros
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/bienvenidos">Bienvenidos</a></li>
                            <li><a class="dropdown-item" href="/resena">Reseña Historia</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Propuesta Educativa
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/metodologia">Metodología</a></li>
                            <!-- <li><a class="dropdown-item" href="talleres.php">Talleres</a></li> -->
                            <li><a class="dropdown-item" href="/perfiles">Perfiles</a></li>
                            <li><a class="dropdown-item" href="/valores">Valores</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Niveles
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/inicial">Inicial</a></li>
                            <li><a class="dropdown-item" href="/primaria">Primaria</a></li>
                            <li><a class="dropdown-item" href="/secundaria">Secundaria</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Publicaciones
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/noticias">Noticias</a></li>
                            <li><a class="dropdown-item" href="/comunicados">Comunicados</a></li>
                            <li><a class="dropdown-item" href="/adicional">Información Adicional</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/galerias">Galerías</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admision">Admisión</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" target="_blank" href="./public/img/files/PLAN DE MATRICULA 2024.pdf">Admisión</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

</header>

<script type="text/javascript">
    window.addEventListener("scroll", function() {
        var header = document.querySelector("header");

        header.classList.toggle("abajo", window.scrollY > 160);
    })
</script>

<script>
    var height = document.getElementById('header').clientHeight;
    document.getElementById('head-top').style.height = height + "px";
</script>