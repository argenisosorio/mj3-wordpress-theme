<?php
/**
 * Title: Feature grid, 3 columns
 * Slug: twentytwentyfour/text-feature-grid-3-col
 * Categories: text, about
 * Viewport width: 1400
 * Description: A feature grid of 2 rows and 3 columns with headings and text.
 */
?>

<a name="about_us"></a>
<div
    class="section section-1 py-5 container-fluid background-white"
    style="border: ridge 1px transparent;"
>
    <div
        class="row"
        style="
            min-height: 500px;
            border: ridge 1px transparent;
        "
    >
        <div class="col-2"></div>
        <div class="col-4">
            <img
                class="img-zoom"
                style="width: 100%;"
                src="
                    <?php echo esc_url( get_template_directory_uri() );
                    ?>/assets/images/imagen-convertida.jpg" alt="<?php esc_attr_e( '',
                    'twentytwentyfour' );
                    ?>
                "
                alt="image"
            >
        </div>
        <div class="col-4">
        <div
            class="card"
            style="
                /*background-color: #18181894;*/
                border: ridge 1px transparent;
                color: #000000;
            "
        >
            <div class="card-body">
                <h3
                    class="card-title text-center"
                    style="color: #000000;"
                >
                    <b
                        class="font-6"
                        style="
                            color: #9c8463;
                            font-size: 35px;
                        "
                    >
                        AE EXCAVATION
                    </b>
                </h3>
                <br>
                <p class="card-text" style="font-size: 20px;">
                    We are committed to providing comprehensive excavation and
                    earthmoving solutions, ensuring that every underground
                    project is executed with precision and safety. With years of
                    experience in the industry, we have established ourselves as
                    a reliable and efficient company, specializing in the
                    installation and repair of sewer, drinking water, and gas
                    networks, as well as trenching, tunnel construction,
                    underpass access, and concrete drilling. Our team combines
                    mechanical power with specialized technical expertise to
                    ensure that every project, no matter how complex, meets the
                    highest quality standards.
                </p>
                <p class="card-text" style="font-size: 20px;">
                    <b style="font-size: 20px;">Our differential:</b>
                    <br>
                    <br>
                    <i class="fa fa-genderless fa-lg ollapsed"></i> Specialized team with extensive technical knowledge and current certifications.
                    <br>
                    <br>
                    <i class="fa fa-genderless fa-lg ollapsed"></i> Personalized attention, tailoring each solution to the specific needs of your project.
                    <br>
                    <br>
                    <i class="fa fa-genderless fa-lg ollapsed"></i> State-of-the-art technology in machinery and non-destructive excavation methods.
                    <br>
                    <br>
                    <i class="fa fa-genderless fa-lg ollapsed"></i> Transparent quotes and competitive prices with no hidden costs.
                    <br>
                    <br>
                    <i class="fa fa-genderless fa-lg ollapsed"></i> Thorough site inspection before scheduling any work.
                    <br>
                    <br>
                    <i class="fa fa-genderless fa-lg ollapsed"></i> Commitment to safety and regulatory compliance on every project.
                </p>
                <br>
                <hr style="border: 1px solid #9c8463;">
                <br>
                <p class="text-center">
                    <i style="font-size: 25px; color: #9c8463">
                        <b>
                            “We guarantee a fast, efficient, and high-quality
                            service so that your project looks brand new.”
                        </b>
                    </i>
                </p>
            </div>
        </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>