<?php
/**
 * Title: Hero
 * Slug: twentytwentyfour/banner-hero
 * Categories: banner, call-to-action, featured
 * Viewport width: 1400
 * Description: A hero section with a title, a paragraph, a CTA button, and an image.
 */
?>

<div
	class="section2 section-1 py-5 container-fluid background-gradient-invert"
>
    <!-- Video de fondo -->
    <div class="video-background">
        <video autoplay loop muted>
            <source
                src="
                    <?php echo esc_url( get_template_directory_uri() );
                    ?>/assets/videos/video.mp4" alt="<?php esc_attr_e( '',
                    'twentytwentyfour' );
                    ?>
                "
                type="video/mp4"
            >
        </video>
    </div>
    <div class="py-lg-3 position-relative" style="border: ridge 1px transparent;">
        <div class="row text-center" style="min-height: 500px;">
            <div class="col-2">
            </div>
            <div class="col-8" style="border: ridge 1px transparent;">
                <div
                    class="card card-margin-top"
                    style="
                        background-color: #18181894;
                        border: none;
                        border-radius: 0px;
                        border: ridge 1px transparent;
                        color: white;
                        border: ridge 1px transparent;
                        padding: 50px;
                    "
                >
                    <div class="card-body section3">
                        <img
                            src="/wordpress/wp-content/themes/beauty/assets/images/logo-hero-section.png
                            "
                            alt="image"
                            width="700"
                            class="d-inline-block align-text-top img-zoom img-fluid"
                            style="border: ridge 1px transparent;"
                        >
                        <!--p class="font-7 section" style="margin-top: -40px;">
                            <b style="color: white; font-size: 25px;">
                                <i class="fa fa-diamond ollapsed" style="color: #c4a459;"></i>
                                    We love what we do forward too serving you
                                <i class="fa fa-diamond ollapsed" style="color: #c4a459;"></i>
                            </b>
                        </p-->
                        <div class="text-center">
                            <a href="#about_us" class="section3">
                                <button class="btn btn-secondary btn-grad mt-3 mb-3 font-6">
                                    <b>ABOUT</b>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
</div>
