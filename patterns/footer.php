<?php
/**
 * Title: Footer with colophon, 4 columns
 * Slug: twentytwentyfour/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A footer section with a colophon and 4 columns.
 */
?>

<div class="section2 py-5 container-fluid">
    <div
        class="container "
        style="border: ridge 1px transparent;"
    >
        <div class="text-center">
            <img
                class="img-zoom section3"
                style="width: 15%;"
                src="
                    <?php echo esc_url( get_template_directory_uri() );
                    ?>/assets/images/favicon.png" alt="<?php esc_attr_e( '',
                    'twentytwentyfour' );
                    ?>
                "
                alt="image"
            >
        </div>
        <br>
        <!-- Row -->
        <div
            class="row"
            style="border: ridge 1px transparent;"
        >
            <div class="col-4" style="border: ridge 1px transparent;">
                <div
                    class="card section2"
                    style="
                        /*background-color: #18181894;*/
                        border: ridge 1px transparent;
                        color: #000000;
                    "
                >
                    <div class="card-body font-6">
                        <h2 class="font-6">Services</h2>
                        <ul style="list-style-type: none;">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-4" style="border: ridge 1px transparent;">
                <div
                    class="card section2"
                    style="
                        /*background-color: #18181894;*/
                        border: ridge 1px transparent;
                        color: #000000;
                    "
                >
                    <div class="card-body font-6">
                        <h2 class="font-6">Contact.</h2>
                        <ul style="list-style-type: none;">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-4" style="border: ridge 1px transparent;">
                <div
                    class="card section2"
                    style="
                        /*background-color: #18181894;*/
                        border: ridge 1px transparent;
                        color: #000000;
                    "
                >
                    <div class="card-body font-6">
                        <h2 class="font-6">Other</h2>
                        <ul style="list-style-type: none;">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                        </ul>
                    </div>
                    </div>
            </div>
        </div>
        <hr>
        <br>
        <!-- Final row -->
        <div class="text-center" style="color: orangered">
            Copyright © 2025 | Company Name - All rights reserved.
        </div>
    </div>
</div>

<script src="https://argenisosorio.github.io/inmensidad-gaitera/assets/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Selecciona la barra de progreso
    const progressBar = document.getElementById('progressBar');

    // Escuchar el evento de scroll
    window.addEventListener('scroll', () => {
    // Altura total del documento
    const scrollHeight = document.documentElement.scrollHeight;

    // Altura visible de la ventana
    const clientHeight = document.documentElement.clientHeight;

    // Distancia desplazada desde la parte superior
    const scrollTop = document.documentElement.scrollTop;

    // Calcular el porcentaje de progreso
    const scrollPercentage = (scrollTop / (scrollHeight - clientHeight)) * 100;

    // Actualizar el ancho de la barra
    progressBar.style.width = `${scrollPercentage}%`;
    });
</script>

<script>
    /* Código para hacer rotar una imagen cada 10seg */
    const logo = document.querySelector('.navbar-brand img');

    function rotateLogo() {
        // Agregar la clase para iniciar la animación
        logo.style.transition = 'transform 1s ease-in-out';
        logo.style.transform = 'rotate(360deg)';

        // Reiniciar la rotación después de 1 segundo
        setTimeout(() => {
            logo.style.transition = 'none';
            logo.style.transform = 'rotate(0deg)';
        }, 1000);
    }

    // Ejecutar la rotación cada 10 segundos
    setInterval(rotateLogo, 10000);
</script>

<script>
    // Script JavaScript para efecto de aparición
    const var_sections = document.querySelectorAll('.section');
    const cintillo = document.querySelectorAll('.cintillo');
    const main_navbar = document.querySelectorAll('.main-navbar');

    const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        }
    });
    }, { threshold: 0.1 });

    var_sections.forEach(section => {
        observer.observe(section);
    });

    cintillo.forEach(x => {
        observer.observe(x);
    });

    main_navbar.forEach(y => {
        observer.observe(y);
    });
</script>

<script>
    const var_sections2 = document.querySelectorAll('.section2');

    const observer2 = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible2');
            }
        });
    }, { threshold: 0.1 });

    var_sections2.forEach(z => {
        observer2.observe(z);
    });
</script>

<script>
    const var_sections3 = document.querySelectorAll('.section3');

    const observer3 = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible3');
            }
        });
    }, { threshold: 0.1 });

    var_sections3.forEach(a => {
        observer3.observe(a);
    });
</script>
<!-- /wp:group -->
