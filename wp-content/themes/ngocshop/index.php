<?php
get_header();
?>


<section class=" general-row">
    <div class="wpb_column col-md-12">

        <div class="section-sales section-image" style="background-image:url('http://demos.megawpthemes.com/perfume/files/2015/03/bgImg-1.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-sm-push-3 col-md-6 col-md-push-6 col-lg-5 col-lg-push-7 ">
                        <div class="promotion-box">
                            <div class="text">
                                <h4>BATH AND BODY</h4>
                                <h3>SALE</h3>
                                <h4>Save upto <strong>70%</strong></h4>
                            </div>
                            <a href="" class="btn btn-default text-uppercase">Start Shopping</a>
                        </div><!-- /promotion-box -->
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="clearfix"></div>
</section>
<section class="section-compact">
    <div class="container">
<div class="row">
<div class=" col-md-12">


    <?php


        $taxonomy = 'download_category'; // EDD's taxonomy for categories
        $terms = get_terms( $taxonomy ); // get the terms from EDD's download_category taxonomy

        ?>


            <?php foreach ( $terms as $term ) : ?>

                <?php //print_r($term); ?>
                <header class="heading-3">
                    <a href="<?php echo esc_attr( get_term_link( $term, $taxonomy ) ); ?>" title="<?php echo $term->name; ?>"><h4> <?php echo $term->name; ?></h4></a>
                </header>


                <!--contenct-->
                <?php
                //the_terms( $post->ID, 'download_category', 'Categories: ', ', ', '' );
                $current_page = get_query_var('page');
                $per_page = get_option('posts_per_page');
                $offset = $current_page > 0 ? $per_page * ($current_page-1) : 0;
                $product_args = array(
                    'post_type' => 'download',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'download_category',
                            'field'    => 'slug',
                            'terms'    => $term->slug,
                        )
                    ),
                    'posts_per_page' => $per_page,
                    'offset' => $offset
                );
                $products = new WP_Query($product_args);
                ?>
                <?php if ($products->have_posts()) : $i = 1; ?>
                    <ul class="filter-list">


                        <?php while ($products->have_posts()) : $products->the_post(); ?>
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
                        $big = 999999999; // need an unlikely intege
                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'current' => max( 1, $current_page ),
                            'total' => $products->max_num_pages
                        ) );
                        ?>
                    </div>

                <?php endif; ?>
                <!--content-->
            <?php endforeach; ?>



</div>

</div>


<?php
get_footer();
?>

