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
        <h1 class="text-center font-6" style="color: #df2528;">
            <b>SERVICES</b>
        </h1>
        <br>
        <!-- Fila 1 -->
        <div
            class="row"
            style="border: ridge 1px transparent;"
        >
            <div class="col-4" style="border: ridge 1px transparent;">
                <div class="card text-white card-services img-zoom">
                    <img
                        class="section3 img-services"
                        style="width: 100%; height: 100%;"
                        src="
                            <?php echo esc_url( get_template_directory_uri() );
                            ?>/assets/images/room_images/1.webp" alt="<?php esc_attr_e( '',
                            'twentytwentyfour' );
                            ?>
                        "
                        alt="image"
                    >
                    <div class="card-img-overlay font-6">
                        <h5 class="card-title text-white">
                            <i class="fa fa-genderless fa-lg ollapsed"></i>
                            ROOFING CONSTRUCTION AND REPAIR
                        </h5>
                        <p class="card-text">
                            <b>
                            Installation, maintenance, and repair of all types
                            of roofs (tiles, sheet metal, flat) with
                            high-strength materials and guaranteed watertightness.
                            </b>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4" style="border: ridge 1px transparent;">
                <div class="card text-white card-services img-zoom">
                    <img
                        class="section3 img-services"
                        style="width: 100%; height: 100%;"
                        src="
                            <?php echo esc_url( get_template_directory_uri() );
                            ?>/assets/images/room_images/2.webp" alt="<?php esc_attr_e( '',
                            'twentytwentyfour' );
                            ?>
                        "
                        alt="image"
                    >
                    <div class="card-img-overlay font-6">
                        <h5 class="card-title text-white">
                            <i class="fa fa-genderless fa-lg ollapsed"></i>
                            FLOORING CONSTRUCTION AND REPAIR
                        </h5>
                        <p class="card-text">
                            Professional installation of wood, ceramic,
                            porcelain, laminate, and polished concrete flooring
                            for interiors and exteriors.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4" style="border: ridge 1px transparent;">
                <div class="card text-white card-services img-zoom">
                    <img
                        class="section3 img-services"
                        style="width: 100%; height: 100%;"
                        src="
                            <?php echo esc_url( get_template_directory_uri() );
                            ?>/assets/images/room_images/3.webp" alt="<?php esc_attr_e( '',
                            'twentytwentyfour' );
                            ?>
                        "
                        alt="image"
                    >
                    <div class="card-img-overlay font-6">
                        <h5 class="card-title text-white">
                            <i class="fa fa-genderless fa-lg ollapsed"></i>
                            KITCHENS AND BATHROOMS
                        </h5>
                        <p class="card-text">
                            Comprehensive design and remodeling with premium
                            materials, including granite, custom finishes, and
                            space optimization.
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
            <div class="col-4" style="border: ridge 1px transparent;">
                <div class="card text-white card-services img-zoom">
                    <img
                        class="section3 img-services"
                        style="width: 100%; height: 100%;"
                        src="
                            <?php echo esc_url( get_template_directory_uri() );
                            ?>/assets/images/room_images/4.webp" alt="<?php esc_attr_e( '',
                            'twentytwentyfour' );
                            ?>
                        "
                        alt="image"
                    >
                    <div class="card-img-overlay font-6">
                        <h5 class="card-title text-white">
                            <i class="fa fa-genderless fa-lg ollapsed"></i>
                            FENCING
                        </h5>
                        <p class="card-text">
                            Installation and repair of wood, metal, and vinyl
                            fences for security and privacy.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4" style="border: ridge 1px transparent;">
                <div class="card text-white card-services img-zoom">
                    <img
                        class="section3 img-services"
                        style="width: 100%; height: 100%;"
                        src="
                            <?php echo esc_url( get_template_directory_uri() );
                            ?>/assets/images/room_images/5.webp" alt="<?php esc_attr_e( '',
                            'twentytwentyfour' );
                            ?>
                        "
                        alt="image"
                    >
                    <div class="card-img-overlay font-6">
                        <h5 class="card-title text-white">
                            <i class="fa fa-genderless fa-lg ollapsed"></i>
                            CONCRETE
                        </h5>
                        <p class="card-text">
                            Construction of floors, sidewalks, patios, and
                            concrete structures using durable techniques.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4" style="border: ridge 1px transparent;">
                <div class="card text-white card-services img-zoom">
                    <img
                        class="section3 img-services"
                        style="width: 100%; height: 100%;"
                        src="
                            <?php echo esc_url( get_template_directory_uri() );
                            ?>/assets/images/room_images/6.webp" alt="<?php esc_attr_e( '',
                            'twentytwentyfour' );
                            ?>
                        "
                        alt="image"
                    >
                    <div class="card-img-overlay font-6">
                        <h5 class="card-title text-white">
                            <i class="fa fa-genderless fa-lg ollapsed"></i>
                            EXTENSIONS
                        </h5>
                        <p class="card-text">
                            We add living spaces to your property, from bedrooms
                            to second floors.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Final Fila 2 -->
        <br>
        <!-- Fila 3 -->
        <div
            class="row"
            style="border: ridge 1px transparent;"
        >
            <div class="col-4" style="border: ridge 1px transparent;">
                <div class="card text-white card-services img-zoom">
                    <img
                        class="section3 img-services"
                        style="width: 100%; height: 100%;"
                        src="
                            <?php echo esc_url( get_template_directory_uri() );
                            ?>/assets/images/room_images/7.webp" alt="<?php esc_attr_e( '',
                            'twentytwentyfour' );
                            ?>
                        "
                        alt="image"
                    >
                    <div class="card-img-overlay font-6">
                        <h5 class="card-title text-white">
                            <i class="fa fa-genderless fa-lg ollapsed"></i>
                            SHEETROCK (DRYWALL)
                        </h5>
                        <p class="card-text">
                            Installation and repair of walls and ceilings with
                            durable materials and impeccable finishes.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4" style="border: ridge 1px transparent;">
                <div class="card text-white card-services img-zoom">
                    <img
                        class="section3 img-services"
                        style="width: 100%; height: 100%;"
                        src="
                            <?php echo esc_url( get_template_directory_uri() );
                            ?>/assets/images/room_images/8.webp" alt="<?php esc_attr_e( '',
                            'twentytwentyfour' );
                            ?>
                        "
                        alt="image"
                    >
                    <div class="card-img-overlay font-6">
                        <h5 class="card-title text-white">
                            <i class="fa fa-genderless fa-lg ollapsed"></i>
                            ELECTRICAL SERVICES
                        </h5>
                        <p class="card-text">
                            Wiring, lighting, panels, and safe and efficient energy solutions.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4" style="border: ridge 1px transparent;">
                <div class="card text-white card-services img-zoom">
                    <img
                        class="section3 img-services"
                        style="width: 100%; height: 100%;"
                        src="
                            <?php echo esc_url( get_template_directory_uri() );
                            ?>/assets/images/room_images/9.webp" alt="<?php esc_attr_e( '',
                            'twentytwentyfour' );
                            ?>
                        "
                        alt="image"
                    >
                    <div class="card-img-overlay font-6">
                        <h5 class="card-title text-white">
                            <i class="fa fa-genderless fa-lg ollapsed"></i>
                            PLUMBING SERVICES
                        </h5>
                        <p class="card-text">
                            Comprehensive installation, maintenance, and repair
                            of drinking water, drainage, gas, and sanitary systems.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Final Fila 3 -->
        <br>
        <!-- Fila 4 -->
        <div
            class="row"
            style="border: ridge 1px transparent;"
        >
            <div class="col-4" style="border: ridge 1px transparent;">
                <div class="card text-white card-services img-zoom">
                    <img
                        class="section3 img-services"
                        style="width: 100%; height: 100%;"
                        src="
                            <?php echo esc_url( get_template_directory_uri() );
                            ?>/assets/images/room_images/10.webp" alt="<?php esc_attr_e( '',
                            'twentytwentyfour' );
                            ?>
                        "
                        alt="image"
                    >
                    <div class="card-img-overlay font-6">
                        <h5 class="card-title text-white">
                            <i class="fa fa-genderless fa-lg ollapsed"></i>
                            GRANITE
                        </h5>
                        <p class="card-text">
                            Granite countertops and surfaces for kitchens,
                            bathrooms, and common areas.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4" style="border: ridge 1px transparent;">
                <div class="card text-white card-services img-zoom">
                    <img
                        class="section3 img-services"
                        style="width: 100%; height: 100%;"
                        src="
                            <?php echo esc_url( get_template_directory_uri() );
                            ?>/assets/images/room_images/11.webp" alt="<?php esc_attr_e( '',
                            'twentytwentyfour' );
                            ?>
                        "
                        alt="image"
                    >
                    <div class="card-img-overlay font-6">
                        <h5 class="card-title text-white">
                            <i class="fa fa-genderless fa-lg ollapsed"></i>
                            TREE SERVICES
                        </h5>
                        <p class="card-text">
                            Professional pruning, controlled felling, and
                            maintenance of landscaping with specialized equipment.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4" style="border: ridge 1px transparent;">
                <div class="card text-white card-services img-zoom">
                    <img
                        class="section3 img-services"
                        style="width: 100%; height: 100%;"
                        src="
                            <?php echo esc_url( get_template_directory_uri() );
                            ?>/assets/images/room_images/12.webp" alt="<?php esc_attr_e( '',
                            'twentytwentyfour' );
                            ?>
                        "
                        alt="image"
                    >
                    <div class="card-img-overlay font-6">
                        <h5 class="card-title text-white">
                            <i class="fa fa-genderless fa-lg ollapsed"></i>
                            GENERAL PAINTING
                        </h5>
                        <p class="card-text">
                            Interior/exterior painting with professional
                            techniques and high-quality materials.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Final Fila 4 -->
        <br>
        <!-- Fila 5 -->
        <div
            class="row"
            style="border: ridge 1px transparent;"
        >
            <div class="col-4" style="border: ridge 1px transparent;">
                <div class="card text-white card-services img-zoom">
                    <img
                        class="section3 img-services"
                        style="width: 100%; height: 100%;"
                        src="
                            <?php echo esc_url( get_template_directory_uri() );
                            ?>/assets/images/room_images/13.webp" alt="<?php esc_attr_e( '',
                            'twentytwentyfour' );
                            ?>
                        "
                        alt="image"
                    >
                    <div class="card-img-overlay font-6">
                        <h5 class="card-title text-white">
                            <i class="fa fa-genderless fa-lg ollapsed"></i>
                            A/C AND CLIMATE CONTROL
                        </h5>
                        <p class="card-text">
                            Installation and repair of air conditioning,
                            ventilation, and heating systems.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Final Fila 5 -->
    </div>
</div>

<a name="contact"></a>
<div class="section2 py-5 container-fluid background-red">
    <div
        class="container text-center"
        style="border: ridge 1px transparent;"
    >
        <h1 class="font-6" style="color: #FFFFFF;">
            <b>Contact us today!</b>
        </h1>
        <br>
        <p class="text-center" style="color: #000000; font-size: 25px">
            Ready to transform your space? HR Expert's LLC is just a phone call away.
        </p>
        <hr>
        <p class="fs-5" style="color: #FFFFFF;">
            <i class="fa-solid fa-phone" style="color: #FFFFFF;"></i>
            214-251-0758
        </p>
        <hr>
        <p class="fs-5" style="color: #FFFFFF;">
            <i class="fas fa-envelope" style="color: #FFFFFF;"></i>
            quotes@hrexpertsdfw.com
        </p>
        <hr>
        <p class="fs-5" style="color: #FFFFFF;">
            <i class="fa-solid fa-location-dot" style="color: #FFFFFF;"></i>
            Service area
        </p>
        <p class="fs-5" style="color: #FFFFFF;">
            Dallas, Texas. | Fort Worth, Texas.
        </p>
    </div>
</div>