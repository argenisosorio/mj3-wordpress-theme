<?php
/**
 * Title: Footer with colophon, 4 columns
 * Slug: twentytwentyfour/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A footer section with a colophon and 4 columns.
 */
?>

<a name="contact"></a>
<div class="section2 py-2 container-fluid" style="margin-bottom: 30px;">
    <div
        class="container "
        style="border: ridge 1px transparent;"
    >
        <div class="text-center">
            <img
                class="img-zoom section3"
                style="width: 15%;"
                src="https://argenisosorio.github.io/portafolio/static/img/favicon-excavation.png"
                alt="image"
            >
        </div>
        <hr style="color: #9c8463;">
        <br>
        <!-- Final row -->
        <div class="text-center" style="color: #9c8463">
            Copyright ©
            <br>
            AE EXCAVATION - SHOVEL POWER
            <br>
            All rights reserved.
        </div>
    </div>
    <style>
        @media (max-width: 600px) {
            .img-zoom.section3 {
                width: 200px !important;
                max-width: 100%;
            }
        }
    </style>
</div>

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
