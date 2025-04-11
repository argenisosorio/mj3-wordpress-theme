<?php
/**
 * Title: Text with alternating images
 * Slug: twentytwentyfour/text-alternating-images
 * Categories: text, about
 * Viewport width: 1400
 * Description: A text section, then a two column section with text in one and image in another.
 */
?>

<div class="section section-1 py-5 container-fluid background-gray">
    <div
        class="container "
        style="border: ridge 1px transparent;"
    >
        <h1 class="text-center" style="color: orangered;">
            <b>SERVICES</b>
        </h1>
        <!-- Columna 1 -->
        <div
            class="row"
            style="border: ridge 1px transparent;"
        >
            <div class="col-4" style="border: ridge 1px transparent;">
                <div
                    class="card"
                    style="
                        /*background-color: #18181894;*/
                        border: ridge 1px transparent;
                        color: #000000;
                    "
                >
                    <div class="card-body">
                        <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4" style="border: ridge 1px transparent;">
                <img
                    class="img-zoom"
                    style="width: 100%;"
                    src="
                        <?php echo esc_url( get_template_directory_uri() );
                        ?>/assets/images/room_images/1.webp" alt="<?php esc_attr_e( '',
                        'twentytwentyfour' );
                        ?>
                    "
                    alt="image"
                >
            </div>
            <div class="col-4" style="border: ridge 1px transparent;">
                <img
                    class="img-zoom"
                    style="width: 100%;"
                    src="
                        <?php echo esc_url( get_template_directory_uri() );
                        ?>/assets/images/room_images/2.webp" alt="<?php esc_attr_e( '',
                        'twentytwentyfour' );
                        ?>
                    "
                    alt="image"
                >
            </div>
        </div>
        <!-- Final Columna 1 -->
        <br>
        <!-- Columna 2 -->
        <div
            class="row"
            style="border: ridge 1px transparent;"
        >
            <div class="col-4" style="border: ridge 1px transparent;">
                <img
                    class="img-zoom"
                    style="width: 100%;"
                    src="
                        <?php echo esc_url( get_template_directory_uri() );
                        ?>/assets/images/room_images/3.webp" alt="<?php esc_attr_e( '',
                        'twentytwentyfour' );
                        ?>
                    "
                    alt="image"
                >
            </div>
            <div class="col-4" style="border: ridge 1px transparent;">
                <img
                    class="img-zoom"
                    style="width: 100%;"
                    src="
                        <?php echo esc_url( get_template_directory_uri() );
                        ?>/assets/images/room_images/4.webp" alt="<?php esc_attr_e( '',
                        'twentytwentyfour' );
                        ?>
                    "
                    alt="image"
                >
            </div>
            <div class="col-4" style="border: ridge 1px transparent;">
                <img
                    class="img-zoom"
                    style="width: 100%;"
                    src="
                        <?php echo esc_url( get_template_directory_uri() );
                        ?>/assets/images/room_images/4.webp" alt="<?php esc_attr_e( '',
                        'twentytwentyfour' );
                        ?>
                    "
                    alt="image"
                >
            </div>
        </div>
        <!-- Final Columna 2 -->
    </div>
</div>