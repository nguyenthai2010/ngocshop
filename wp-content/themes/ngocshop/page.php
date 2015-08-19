<?php
get_header();
?>

<?php
get_template_part('tpl','header_search');
?>
    <section class="section-compact">
        <div class="container">
            <div class="general-row">
                <div class="wpb_column col-md-12">

                    <div class="about-block">
                        <header class="heading-3">
                            <h4><?php the_title(); ?></h4>
                        </header>

                        <div class="row">
                            <?php
                            // TO SHOW THE PAGE CONTENTS
                            while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->

                                <?php the_content(); ?> <!-- Page Content -->

                            <?php
                            endwhile; //resetting the page loop
                            wp_reset_query(); //resetting the page query
                            ?>
                        </div>
                    </div>
                    <hr>


                </div>

            </div>
        </div>
    </section>


<?php
get_footer();
?>