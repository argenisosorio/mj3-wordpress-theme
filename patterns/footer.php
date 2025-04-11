<?php
/**
 * Title: Footer with colophon, 4 columns
 * Slug: twentytwentyfour/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A footer section with a colophon and 4 columns.
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div
	class="wp-block-group"
	style="
		padding-top:var(--wp--preset--spacing--50);
		padding-bottom:var(--wp--preset--spacing--50);
		border: ridge 1px none;
		background-image: linear-gradient(white, gray);
	"
	>
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">
			<!-- wp:group {"style":{"dimensions":{"minHeight":""},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div
				class="wp-block-group"
				style="
					border: ridge 1px none;
				"
			>
				<img
					class="img-zoom"
					width="60%"
					src="
						<?php echo esc_url( get_template_directory_uri() );?>/assets/images/favicon.png"
						alt="<?php esc_attr_e( '', 'twentytwentyfour' );?>
					"
				/>
				<br>
				<a href="/" style="text-decoration: none;">
					<!--b>Company Name</!--b-->
				</a>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%">
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:30%">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":2,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontFamily":"body"} -->
					<h2
						class="wp-block-heading has-medium-font-size has-body-font-family"
						style="font-style:normal;font-weight:600"
					>
						Interest
					</h2>
					<!-- /wp:heading -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">

						<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small","ariaLabel":"<?php esc_attr_e( 'About', 'twentytwentyfour' ); ?>"} -->

						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'M&J Boat and RV Repairs', 'twentytwentyfour' ); ?>","url":"https://mjoftexas.com/mj-boat-rv-repairs/"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'M&J Tree Services', 'twentytwentyfour' ); ?>","url":"https://mjoftexas.com/mj-tree-services/"} /-->

						<!-- /wp:navigation -->

					</div>
					<!-- /wp:group -->
				</div>

				<!-- /wp:group -->

				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":2,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontFamily":"body"} -->
					<h2 class="wp-block-heading has-medium-font-size has-body-font-family" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Social', 'twentytwentyfour' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">

						<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small","ariaLabel":"<?php esc_attr_e( 'Privacy', 'twentytwentyfour' ); ?>"} -->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Facebook', 'twentytwentyfour' ); ?>","url":"https://www.facebook.com/profile.php?id=61569183660092"} /-->
						<!-- /wp:navigation -->

					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"0"}}}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:0">
		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast-2","fontSize":"small"} -->
		<p class="has-contrast-2-color has-text-color has-link-color has-small-font-size">
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
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
