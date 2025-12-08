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
    class="section section-1 py-5 container-fluid"
    style="border: ridge 1px transparent; background-color: #FFFFFF;"
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
            <div
                class="card"
                style="
                    /*background-color: #18181894;*/
                    border: ridge 1px transparent;
                    color: #000000;
                "
            >
                <div class="card-body">
                    <i class="fa fa-diamond ollapsed" style="color: #c4a459;"></i>
                    <span style="color: #000000; font-size: 15px;">
                        TRENDY HAIR STYLING
                    </span>
                    <i class="fa fa-diamond ollapsed" style="color: #c4a459;"></i>
                    <h3
                        class="card-title text-center mt-4"
                        style="color: #c4a459;"
                    >
                        <b class="font-1" style="color: #c4a459; font-size: 45px;">
                            From Messy Hair to Classy Hair Instantly!</b>
                    </h3>
                    <br>
                    <p class="card-text" style="font-size: 20px;">
                        At Exclusive Cuts, our motto, "We love what we do," is
                        at the heart of every service we offer. We are a
                        specialty salon that combines hairdressing, beauty, and
                        personalized styling for the whole family. From modern
                        cuts for men and women to children's hairstyles, perms,
                        and exclusive styles, every visit is marked by passion,
                        attention to detail, and a genuine desire to enhance
                        your unique beauty. With dedication and artistry, we
                        look forward to serving you and making your experience
                        with us extraordinary.
                    </p>
                    <hr style="border: 1px solid #c4a459;">
                    <br>
                    <p class="text-center">
                        <i style="font-size: 25px; color: #c4a459">
                            <b>
                                "More than a salon, your personal space where
                                beauty is designed with heart."
                            </b>
                        </i>
                    </p>
                </div>
            </div>
        </div>
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
        <div class="col-2"></div>
    </div>
</div>