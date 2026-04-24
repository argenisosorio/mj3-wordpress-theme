<?php
/**
 * Title: Text with alternating images
 * Slug: twentytwentyfour/text-alternating-images
 * Categories: text, about
 * Viewport width: 1400
 * Description: A text section, then a two column section with text in one and image in another.
 */
?>

<a name="services"></a>
<div class="section2 py-5 container-fluid background-gray">
    <div
        class="container "
        style="border: ridge 1px transparent;"
    >
        <h1 class="text-center font-6" style="color: #9c8463;">
            <b>SERVICES</b>
        </h1>
        <br>
        <!-- Fila 1 -->
        <div
            class="row"
            style="border: ridge 1px transparent;"
        >
            <div class="col-6" style="border: ridge 1px transparent;">
                <div class="card img-zoom section2">
                    <img
                        src="
                            <?php echo esc_url( get_template_directory_uri() );
                            ?>/assets/images/room_images/png/1.png" alt="<?php esc_attr_e( '',
                            'twentytwentyfour' );
                            ?>
                        "
                        class="card-img-top"
                        alt="image"
                    >
                    <div class="card-body font-6">
                        <h3 class="card-title font-8" style="color: #9c8463;">
                            Tunnel excavation
                        </h3>
                        <p class="card-text">
                            Clean and safe underground access without affecting
                            existing structures.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6" style="border: ridge 1px transparent;">
                <div class="card img-zoom section3">
                    <img
                        src="
                            <?php echo esc_url( get_template_directory_uri() );
                            ?>/assets/images/room_images/png/2.png" alt="<?php esc_attr_e( '',
                            'twentytwentyfour' );
                            ?>
                        "
                        class="card-img-top"
                        alt="image"
                    >
                    <div class="card-body font-6">
                        <h3 class="card-title font-8" style="color: #9c8463;">
                            Access point opening
                        </h3>
                        <p class="card-text">
                            Strategic locations for installation or repair.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Final Fila 1 -->
        <br>
        <!-- Fila 2 -->
        <div
            class="row"
            style="border: ridge 1px transparent;"
        >
            <div class="col-6" style="border: ridge 1px transparent;">
                <div class="card img-zoom section3">
                    <img
                        src="
                            <?php echo esc_url( get_template_directory_uri() );
                            ?>/assets/images/room_images/png/3.png" alt="<?php esc_attr_e( '',
                            'twentytwentyfour' );
                            ?>
                        "
                        class="card-img-top"
                        alt="image"
                    >
                    <div class="card-body font-6">
                        <h3 class="card-title font-8" style="color: #9c8463;">
                            Precise trenching
                        </h3>
                        <p class="card-text">
                            For water, gas, and drainage lines, with the exact
                            dimensions required for your project.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6" style="border: ridge 1px transparent;">
                <div class="card img-zoom section2">
                    <img
                        src="
                            <?php echo esc_url( get_template_directory_uri() );
                            ?>/assets/images/room_images/png/4.png" alt="<?php esc_attr_e( '',
                            'twentytwentyfour' );
                            ?>
                        "
                        class="card-img-top"
                        alt="image"
                    >
                    <div class="card-body font-6">
                        <h3 class="card-title font-8" style="color: #9c8463;">
                            Concrete patching
                        </h3>
                        <p class="card-text">
                            We leave the area functional and clean it up after
                            the work is completed.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Final Fila 2 -->
        <br>
    </div>
</div>

<a name="why_choose_us"></a>
<div
    class="section section-1 py-5 container-fluid background-white-gradient"
    style="
        /*border-top: 5px solid #FFFFFF;*/
        margin-top: -2px;
    "
>
    <div
        class="container "
        style="border: ridge 1px transparent;"
    >
        <h1 class="text-center font-6" style="color: #9c8463;">
            <b>WHY CHOOSE US?</b>
        </h1>
        <br>
        <h3 class="text-center font-6">
            <i class="fa fa-check-circle fa-lg ollapsed" style="color: #9c8463;"></i>
            Certified professionals with years of experience.
        </h3>
        <br>
        <h3 class="text-center font-6">
            <i class="fa fa-check-circle fa-lg ollapsed" style="color: #9c8463;"></i>
            Fast response and efficient service.
        </h3>
        <br>
        <h3 class="text-center font-6">
            <i class="fa fa-check-circle fa-lg ollapsed" style="color: #9c8463;"></i>
            Guidance and advice to answer any questions you may have.
        </h3>
    </div>
</div>

<a name="contact"></a>
<div class="section2 py-5 container-fluid background-red">
    <div
        class="container text-center"
        style="border: ridge 1px transparent;"
    >
        <h1 class="font-6" style="color: #FFFFFF; font-size: 50px;">
            <b>Contact us today!</b>
        </h1>
        <br>
        <p class="text-center" style="color: #FFFFFF; font-size: 25px;">
            Ready to your project looks brand new?
        </p>
        <hr style="color: #FFFFFF;">
        <p class="fs-5" style="color: #FFFFFF;">
            <i class="fa-solid fa-phone" style="color: #FFFFFF;"></i>
            469-870-0315
        </p>
        <hr style="color: #FFFFFF;">
        <p class="fs-5" style="color: #FFFFFF;">
            <i class="fas fa-envelope" style="color: #FFFFFF;"></i>
            ae.excavation024@gmail.com
        </p>
        <hr style="color: #FFFFFF;">
        <p class="fs-5" style="color: #FFFFFF;">
            <i class="fa-solid fa-location-dot" style="color: #FFFFFF;"></i>
            Service area
        </p>
        <p class="fs-5" style="color: #FFFFFF;">
            Dallas Fort Worth
        </p>
    </div>
</div>