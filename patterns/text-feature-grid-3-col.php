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
        <div class="col-4 section3">
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
            class="card section2"
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
                            font-size: 40px;
                        "
                    >
                        AE EXCAVATION
                    </b>
                </h3>
                <br>
                <p class="card-text" style="font-size: 22px;">
                    At AE Excavation LLC, we are the strategic partner every
                    plumber and contractor needs. We specialize in preparing the
                    site so plumbing projects can move forward without delays or
                    unforeseen issues, handling the most demanding part of the
                    job: excavation.

                    At AE Excavation LLC, we do the heavy lifting for you, with
                    responsibility, precision, and a firm commitment to every
                    project.
                </p>
                <p class="card-text section2" style="font-size: 22px;">
                    <br>
                    <i class="fa fa-genderless fa-lg ollapsed"></i> Important:
                    We do not perform plumbing work. Our mission is to
                    facilitate access so you, as a plumber, can work faster,
                    safer, and more efficiently.
                    <br>
                </p>
                <br>
                <hr style="border: 1px solid #9c8463;">
                <br>
                <p class="text-center section">
                    <i style="font-size: 30px; color: #9c8463">
                        <b>
                            "At AE Excavation LLC, we prepare the ground so
                            plumbers can work better. We don't do plumbing. We
                            make plumbing possible."
                        </b>
                    </i>
                </p>
            </div>
        </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>