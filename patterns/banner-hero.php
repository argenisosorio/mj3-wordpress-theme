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
    class="section section-1 py-5 container-fluid background-gradient-invert"
    style="
        background-image: url('https://cdn11.bigcommerce.com/s-tjrce8etun/images/stencil/1280x1280/s/sprinklers-category__46940.original.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    "
>
    <div class="py-lg-3 position-relative">
        <div class="row text-center" style="min-height: 500px;">
            <div class="col-2">
            </div>
            <div class="col-8" style="border: ridge 1px transparent;">
                <div
                    class="card card-margin-top"
                    style="
                        background-color: #18181894;
                        border: none;
                        border: ridge 1px transparent;
                        color: white;
                    "
                >
                    <div class="card-body" style="border: ridge 1px transparent;">
                        <div class="row" style="border: ridge 1px transparent;">
                            <div class="col-8" style="border: ridge 1px transparent;">
                                <br />
                                <br />
                                <h1 class="card-title" style="color: white; font-size: 50px;">
                                    <b class="font-6">EDDIE'S SPRINKLER</b>
                                </h1>
                                <p class="card-text font-6">
                                    <b style="color: white; font-size: 35px;">The Best Solution</b>
                                </p>
                                <p class="card-text font-6" style="color: white; font-size: 30px;">
                                    Sprinkler installation, repair, and maintenance
                                </p>
                                <a href="#about_us">
                                    <button class="btn btn-secondary btn-grad mt-3 mb-3 font-6">
                                        <b>ABOUT</b>
                                    </button>
                                </a>
                                <br />
                                <br />
                            </div>
                            <div class="col-4" style="border: ridge 1px transparent;">
                                <video
                                    autoplay
                                    loop
                                    muted
                                    style="
                                        max-width: 500px;
                                        width: 100%;
                                        height: auto;
                                        margin-top: 50px;
                                        border-radius: 20px;
                                    "
                                >
                                    <source
                                        src="
                                            <?php echo esc_url( get_template_directory_uri() );
                                            ?>/assets/videos/video.webm" alt="<?php esc_attr_e( '',
                                            'twentytwentyfour' );
                                            ?>
                                        "
                                        type="video/mp4"
                                    >
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
</div>
