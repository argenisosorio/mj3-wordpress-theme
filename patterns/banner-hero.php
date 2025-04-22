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
>
    <!-- Video de fondo -->
    <div class="video-background">
        <video autoplay loop muted>
            <source
                src="
                    <?php echo esc_url( get_template_directory_uri() );
                    ?>/assets/videos/video2.mp4" alt="<?php esc_attr_e( '',
                    'twentytwentyfour' );
                    ?>
                "
                type="video/mp4"
            >
        </video>
    </div>
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
                        /*margin-top: 80px;*/
                    "
                >
                    <div class="card-body">
                        <h1 class="card-title" style="color: white; font-size: 50px;">
                            <b class="font-6">HR EXPERT'S LLC.</b>
                        </h1>
                        <p class="card-text font-6">
                            <b style="color: white; font-size: 30px;">General Contractor for Construction & Remodeling</b>
                        </p>
                        <p class="card-text font-6" style="color: white; font-size: 18px;">
                            Leading construction and remodeling company with
                            over 16 years of experience, specializing in
                            residential and commercial projects.
                        </p>
                        <p class="card-text font-6" style="color: white; font-size: 18px;">
                            Discover how we can transform your vision into
                            reality. Contact us today for a free, no-obligation
                            consultation.
                        </p>
                        <a href="#about_us">
                            <button class="btn btn-secondary btn-grad mt-3 mb-3 font-6">
                                <b>ABOUT</b>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
</div>
