<footer>
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex flex-column">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h5 class="modal-title" id="registerModalLabel">Escríbenos</h5>
                    <p style="color:var(--color6);">En breve, un profesional te contactará.</p>

                </div>
                <div class="modal-body">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Nombre(s)" name="nombres" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Apellidos" name="apellidos" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Correo electrónico" name="correo" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Teléfono" name="telefono" required>
                            </div>
                            <div class="col-md-6">
                                <select class="form-select" id="nivel" name="nivel" required>
                                    <option selected disabled>Nivel (*)</option>
                                    <option value="inicial">Nivel Inicial</option>
                                    <option value="primaria">Nivel Primaria</option>
                                    <option value="secundaria">Nivel Secundaria</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select class="form-select" id="grado" name="grado" required>
                                    <option selected disabled>Grado (*)</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" placeholder="Consulta" name="consulta" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label class="form-check-label">Declaro haber leído la <a class="enlace-politicas" href="#">Política de Privacidad</a></label>
                            <input type="checkbox" class="form-check-input" required>
                        </div>
                        <!-- <div class="mt-3">
                            <label class="form-check-label">Acepto que mi información personal se use para los fines complementarios que se describen en la Política de Privacidad.</label>
                            <div>
                                <input type="radio" name="autorizacion" class="form-check-input" required> Sí
                                <input type="radio" name="autorizacion" class="form-check-input" required> No
                            </div>
                        </div> -->

                        <button type="submit" class="btn btn-primary mt-3">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" style="padding:2rem 0">
            <div class="col-lg-4">
                <img src="./public/img/icons/escudo2.png" width="80" alt="escudo2">
                <strong style="font-size:1.2rem;font-family:'Playfair Display',serif">Santo Domingo, El Líder</strong>
                <p class="muted" style="margin-top:.5rem">"Formando Líderes Globales"</p>
                <div class="div-footer-sociales" style="margin-top:1rem;display:flex;gap:.8rem">
                    <div class="d-flex justify-content-between">
                        <div class="col-lg-3">
                            <div style="width: 40px;height: 40px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;border:solid 1px var(--color8);font-size:25px;"><a class="social-footer" href="https://www.facebook.com/santodomingolider" target="_blank"><i class="fab fa-facebook " style="font-size:1.2rem;margin-top:10px;"></i></a></div>
                        </div>
                        <div class="col-lg-3 mx-2">
                            <div class="" style="width: 40px;height: 40px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;border:solid 1px var(--color8);font-size:25px;"><a class="social-footer" href="https://www.youtube.com/@santodomingolider" target="_blank"><i class="fab fa-youtube" style="font-size:1.2rem;margin-top:10px;"></i></a></div>
                        </div>
                        <div class="col-lg-3 mx-2">
                            <div class="" style="width: 40px;height: 40px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;border:solid 1px var(--color8);font-size:25px;"><a class="social-footer" href="https://www.instagram.com/santodomingolider" target="_blank"><i class="fab fa-instagram" style="font-size:1.2rem;margin-top:10px;"></i></a></div>
                        </div>
                        <div class="col-lg-3">
                            <div style="width: 40px;height: 40px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;border:solid 1px var(--color8);font-size:25px;"><a class="social-footer" href="https://www.tiktok.com/@santodomingolider" target="_blank"><i class="fab fa-tiktok" style="font-size:1.2rem;margin-top:10px;"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mx-4">
                    <strong>Enlaces Rápidos</strong>
                    <div style="display:grid;gap:.5rem;margin-top:1rem">
                        <a href="./historia.php">Nosotros</a>
                        <a href="./metodologia.php">Propuesta educativa</a>
                        <a href="./inicial.php">Niveles</a>
                        <a href="./admision.php">Admisión 2026</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <a class="btn btn-primary floating-btn1" href="javascript:void(0);" onclick="openRegisterModal()" style="border-radius: 50px; padding: 10px 20px; font-size: 1rem;width:auto;font-weight: 600;">Contáctanos</a>
                <style>
                    .floating-btn1 {
                        animation: scaleEffect 4s infinite ease-in-out;
                    }

                    @keyframes scaleEffect {
                        0%,
                        100% {
                            transform: scale(1);
                        }

                        50% {
                            transform: scale(1.1);
                        }
                    }
                </style>

                <div style="margin-top:1rem;line-height:1.8">
                    <!--       <div style="color:var(--color8);">📍 Mz. N lote 4 Urbanización Los Ficus de Carabayllo, 5ta Etapa carabayllo</div> -->
                    <div class="d-flex justify-content-start py-1" style="color:var(--color8);"><i class="fas fa-location-arrow pt-2"></i>&nbsp;&nbsp;Mz. N lote 4 Urbanización Los Ficus de Carabayllo, 5ta Etapa carabayllo</div>
                    <div class="d-flex justify-content-start py-1" style="color:var(--color8);"><i class="fas fa-clock pt-2"></i>&nbsp;&nbsp;Horario de Atención: Lunes a Viernes<br> 8:00 a.m. a 2:00 p.m. / 2:40 p.m. a 5:00 p.m.<br>
                    Sábados: 8:00 - -1:00 p.m.
                </div>
                    <div class="d-flex justify-content-start py-1" style="color:var(--color8);"><a href="https://wa.me/+51951352404"><i class="fab fa-whatsapp pt-2"></i>&nbsp;&nbsp;951 352 404</div></a>
                </div>
            </div>
        </div>
        <div style="border-top:1px solid rgba(255,255,255,0.1);padding-top:1.5rem;margin-top:1rem;display:flex;justify-content:space-between;flex-wrap:wrap;gap:1rem;font-size:.9rem">
            <div style="color:var(--color8);">© 2026 Colegio Santo Domingo El Líder. Todos los derechos reservados.</div>
        </div>
    </div>
</footer>


<!-- Bootstrap JS Bundle -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->

<!-- Custom Scripts -->
<script>
    // Example: send form via fetch (placeholder)
    (function() {
        const form = document.querySelector('form[action="#"]');
        if (!form) return;
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            // Minimal UX: show a thank-you and clear form
            alert('Gracias. Hemos recibido tu mensaje.');
            form.reset();
        });
    })();

    function openRegisterModal() {
        var registerModal = new bootstrap.Modal(document.getElementById('registerModal'));
        registerModal.show();
    }

    // Ajustar el padding-right de #networks cuando se abre el modal
    const modal = document.getElementById('registerModal');
    const networks = document.querySelector('#networks');
    if (modal && networks) {
        modal.addEventListener('show.bs.modal', () => {
            setTimeout(() => {
                const bodyPadding = window.getComputedStyle(document.body).paddingRight;
                networks.style.right = bodyPadding;
            }, 0);
        });
        modal.addEventListener('hidden.bs.modal', () => {
            networks.style.right = '0px';
        });
    }

    /* Funcion para condicionar niveles */
    document.getElementById('nivel').addEventListener('change', function() {
        const gradoSelect = document.getElementById('grado');
        gradoSelect.innerHTML = '<option selected disabled>Grado (*)</option>'; // Reset options

        if (this.value === 'inicial') {
            gradoSelect.innerHTML += `
                                        <option value="3años">3 años</option>
                                        <option value="4años">4 años</option>
                                        <option value="5años">5 años</option>
                                    `;
        } else if (this.value === 'primaria') {
            for (let i = 1; i <= 6; i++) {
                gradoSelect.innerHTML += `<option value="${i}">${i}°</option>`;
            }
        } else if (this.value === 'secundaria') {
            for (let i = 1; i <= 3; i++) {
                gradoSelect.innerHTML += `<option value="${i}">${i}°</option>`;
            }
        }
    });
    
</script>

<style>
    /* Estilos responsive para el footer */
    @media (max-width: 991px) {
        footer .col-lg-4 {
            margin-bottom: 30px;
        }
        
        footer .col-lg-4:last-child {
            margin-bottom: 0;
        }
    }
    
    @media (max-width: 768px) {
        footer .container .row {
            text-align: center;
        }
        
        footer .col-lg-4 {
            margin-bottom: 40px;
        }
        
        footer .col-lg-4 img {
            margin: 0 auto;
            display: block;
        }
        
        footer .d-flex.justify-content-between {
            justify-content: center !important;
        }
        
        footer .d-flex.justify-content-start {
            justify-content: center !important;
        }
        
        footer .mx-4 {
            margin-left: 0 !important;
            margin-right: 0 !important;
        }
        
        footer .floating-btn1 {
            width: 100%;
            max-width: 300px;
            margin: 0 auto 20px;
            display: block;
        }
    }
    
    @media (max-width: 576px) {
        footer strong {
            font-size: 1.1rem;
        }
        
        footer .muted {
            font-size: 0.9rem;
        }
        
        footer .social-footer i {
            font-size: 1rem !important;
        }
        
        footer div[style*="width: 40px"] {
            width: 35px !important;
            height: 35px !important;
        }
        
        footer div[style*="width: 40px"] i {
            margin-top: 8px !important;
        }
        
        footer .d-flex.py-1 {
            font-size: 0.9rem;
        }
    }
</style>
