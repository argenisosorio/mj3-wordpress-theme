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
                    ?>/assets/images/imagen-convertida.png" alt="<?php esc_attr_e( '',
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
                        EDDIE'S SPRINKLER
                    </b>
                </h3>
                <br>
                <p class="card-text" style="font-size: 20px;">
                    At Eddie's Sprinkler, we are dedicated to providing
                    comprehensive solutions for irrigation systems, ensuring
                    that your garden or green space always looks impeccable. With
                    years of experience in the sector, we have become a
                    benchmark for reliability and efficiency in sprinkler
                    installation, repair, and maintenance.
                </p>
                <p class="card-text" style="font-size: 20px;">
                    <b style="font-size: 20px;">Our differential:</b>
                    <br>
                    <br>
                    <i class="fa fa-genderless fa-lg ollapsed"></i> <b>Specialized team</b> with extensive technical knowledge and certifications.
                    <br>
                    <br>
                    <i class="fa fa-genderless fa-lg ollapsed"></i> <b>Personalized attention</b>, tailoring each solution to your specific needs.
                    <br>
                    <br>
                    <i class="fa fa-genderless fa-lg ollapsed"></i> <b>Cutting edge technology</b> in smart irrigation systems.
                    <br>
                    <br>
                    <i class="fa fa-genderless fa-lg ollapsed"></i> <b>Transparent quotes</b> and competitive prices.
                    <br>
                    <br>
                    <i class="fa fa-genderless fa-lg ollapsed"></i> <b>Thorough site inspection</b> before scheduling any work.
                    <br>
                    <br>
                    <i class="fa fa-genderless fa-lg ollapsed"></i> <b>Specialized team</b> with extensive technical knowledge and certifications.
                </p>
                <br>
                <hr style="border: 1px solid #9c8463;">
                <br>
                <p class="text-center">
                    <i style="font-size: 25px; color: #9c8463">
                        <b>
                            "We guarantee fast, efficient, and high-quality
                            service so that your irrigation system works
                            perfectly at all times."
                        </b>
                    </i>
                </p>
            </div>
        </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>