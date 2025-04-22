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
                    ?>/assets/images/image-1.webp" alt="<?php esc_attr_e( '',
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
                    <b class="font-6" style="color: #df2528;">HR EXPERT'S LLC.</b>
                </h3>
                <p class="card-text">
                    At HR Expert's LLC, we pride ourselves on being leaders in
                    the construction and remodeling industry with a solid track
                    record of over 16 years transforming spaces and exceeding
                    expectations. Since our beginnings in 2009, we have grown to
                    become a benchmark of quality and innovation in both
                    residential and commercial projects throughout the region.
                </p>
                <p class="card-text">
                    <b>Our uniqueness lies in:</b>
                    <ul>
                        <li>A highly specialized team of architects, engineers, and construction managers with technical certifications.</li>
                        <li>Proven methodologies that guarantee precision in every phase of the project.</li>
                        <li>Unwavering commitment to established deadlines without sacrificing quality.</li>
                        <li>Personalized attention, tailoring each solution to the client's specific needs.</li>
                    </ul>
                </p>
                <p class="card-text">
                    <b>Areas of Expertise:</b>
                    <ul>
                        <li>Comprehensive construction from foundations to final finishes.</li>
                        <li>Complete renovations that revitalize outdated spaces.</li>
                        <li>Turnkey projects for clients seeking a comprehensive solution.</li>
                    </ul>
                </p>
                <p class="card-text">
                    <b>With dozens of successful projects completed, we have developed a work model that combines:</b>
                    <ul>
                        <li>Transparency in budgets and processes</li>
                        <li>Cutting-edge technology in design and execution</li>
                        <li>Long-lasting relationships with clients and suppliers</li>
                    </ul>
                </p>
                <p class="text-center">
                    <i style="font-size: 20px; color: #df2528">
                        <b>
                            "We approach each project with the same dedication as
                            if it were our own home. Customer satisfaction is
                            not just our goal, it's our standard."
                        </b>
                    </i>
                </p>
                <!--a href="#">
                    <button class="btn btn-secondary btn-grad mt-3 mb-3 font-6">
                        <b>ABOUT</b>
                    </button>
                </a-->
            </div>
        </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>