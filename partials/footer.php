<footer>
    <div class="container">
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:3rem;padding:2rem 0">
            <div>
                <strong style="font-size:1.2rem;font-family:'Playfair Display',serif">Santo Domingo El Líder</strong>
                <p class="muted" style="margin-top:.5rem">Formando líderes con valores, excelencia académica y compromiso social.</p>
                <div style="margin-top:1rem;display:flex;gap:.8rem">
                    <a href="https://facebook.com" style="display:inline-block;width:36px;height:36px;background:rgba(255,255,255,0.1);border-radius:50%;display:flex;align-items:center;justify-content:center" aria-label="Facebook">f</a>
                    <a href="https://instagram.com" style="display:inline-block;width:36px;height:36px;background:rgba(255,255,255,0.1);border-radius:50%;display:flex;align-items:center;justify-content:center" aria-label="Instagram">📷</a>
                    <a href="https://twitter.com" style="display:inline-block;width:36px;height:36px;background:rgba(255,255,255,0.1);border-radius:50%;display:flex;align-items:center;justify-content:center" aria-label="Twitter">𝕏</a>
                </div>
            </div>
            <div>
                <strong>Enlaces Rápidos</strong>
                <div style="display:grid;gap:.5rem;margin-top:1rem">
                    <a href="#about">Nosotros</a>
                    <a href="#propuesta">Propuesta educativa</a>
                    <a href="#niveles">Niveles</a>
                    <a href="#admissions">Admisión 2026</a>
                    <a href="#contact">Contacto</a>
                </div>
            </div>
            <div>
                <strong>Contacto</strong>
                <div style="margin-top:1rem;line-height:1.8">
                    <div>📍 Mz. N lote 4 Urbanización Los Ficus de Carabayllo, 5ta Etapa carabayllo</div>
                </div>
            </div>
        </div>
        <div style="border-top:1px solid rgba(255,255,255,0.1);padding-top:1.5rem;margin-top:1rem;display:flex;justify-content:space-between;flex-wrap:wrap;gap:1rem;font-size:.9rem">
            <div>© 2025 Colegio Santo Domingo El Líder. Todos los derechos reservados.</div>
            <div style="display:flex;gap:1.5rem">
                <a href="/sitemap.xml">Sitemap</a>
                <a href="/rss.xml">RSS</a>
                <a href="/politica-privacidad">Política de Privacidad</a>
                <a href="/terminos">Términos de Uso</a>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

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
</script>