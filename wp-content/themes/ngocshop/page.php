<?php
get_header();
?>

    <section class="section-banner">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="http://demos.megawpthemes.com/perfume">Home</a></li><li><a href="http://demos.megawpthemes.com/perfume/?taxonomy=pa_color&amp;term=black">Black</a></li><li class="active">Beauty Treats Darling Diamond Lip Gloss Set 6</li>			<li>
                    <div class="bar-form">
                        <form action="http://demos.megawpthemes.com/perfume" method="post">
                            <input type="search" placeholder="Search ">
                            <input type="submit" value="">
                        </form>
                    </div><!-- /bar-form -->
                </li>
            </ul>
        </div>
    </section>
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