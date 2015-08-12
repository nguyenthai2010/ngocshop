<?php
get_header();
?>
<?php
$category = get_queried_object();
//print_r($category);
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
        <div class="row">
            <div class=" col-md-12">
                <header class="heading-3">
                    <h4> <?php echo $category->name; ?></h4>
                </header>
                <?php if (have_posts()) : $i = 1; ?>
                    <ul class="filter-list">


                        <?php while (have_posts()) : the_post(); ?>
                            <li class="mix  ">
                                <div >


                                    <div class="thumbnail thumbnail-product">
                                        <figure class="image-zoom">
                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('product-image'); ?></a></figure>
                                        <div class="caption">
                                            <div class="text-wrap">
                                                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?>	</a></h5>
                                                <p class="prod-price text-primary">
                                            <span class="price">
                                                <?php if(function_exists('edd_price')) { ?>
                                                    <?php
                                                    if(edd_has_variable_prices(get_the_ID())) {
                                                        // if the download has variable prices, show the first one as a starting price
                                                        echo 'Starting at: '; edd_price(get_the_ID());
                                                    } else {
                                                        edd_price(get_the_ID());
                                                    }
                                                    ?>
                                                <?php } ?>

                                            </span>
                                                </p>
                                                <div class="filter-list-disp">
                                                    <a href="<?php the_permalink(); ?>" class="btn btn-default view-detail">Xem chi tiết</a>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </li>

                            <?php $i+=1; ?>
                        <?php endwhile; ?>
                    </ul>

                    <div class="pagination">
                        <?php
                        global $wp_query;

                        $big = 999999999; // need an unlikely integer

                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'current' => max( 1, get_query_var('paged') ),
                            'total' => $wp_query->max_num_pages
                        ) );
                        ?>
                    </div>


                <?php endif; ?>

            </div>

        </div>
        <?php get_footer(); ?>
