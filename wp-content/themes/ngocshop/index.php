<?php
get_header();
?>


<header class="heading-3">
    <h4> Shop <small>(4357)</small></h4>
</header>

<div class="row">
<div class=" col-md-12">


    <?php
    /**
     * Output a list of EDD's terms (with links) from the 'download_category' taxonomy
     */
    function sumobi_list_edd_terms() {
        $taxonomy = 'download_category'; // EDD's taxonomy for categories
        $terms = get_terms( $taxonomy ); // get the terms from EDD's download_category taxonomy
        ?>
        <ul class="download-categories">
            <?php foreach ( $terms as $term ) : ?>
                <li>
                    <a href="<?php echo esc_attr( get_term_link( $term, $taxonomy ) ); ?>" title="<?php echo $term->name; ?>"><?php echo $term->name; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php } ?>

    <?php echo sumobi_list_edd_terms(); ?>

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
                        'terms'    => 'dau-gio',
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
            <?php else : ?>

                <h2 class="center">Not Found</h2>
                <p class="center">Sorry, but you are looking for something that isn't here.</p>
                <?php get_search_form(); ?>

            <?php endif; ?>


<nav class="woocommerce-pagination">
    <ul class='page-numbers'>
        <li><span class='page-numbers current'>1</span></li>
        <li><a class='page-numbers' href='http://demos.megawpthemes.com/perfume/shop/page/2/'>2</a></li>
        <li><a class='page-numbers' href='http://demos.megawpthemes.com/perfume/shop/page/3/'>3</a></li>
        <li><a class='page-numbers' href='http://demos.megawpthemes.com/perfume/shop/page/4/'>4</a></li>
        <li><a class="next page-numbers" href="http://demos.megawpthemes.com/perfume/shop/page/2/">&rarr;</a></li>
    </ul>
</nav>


</div>

</div>


<?php
get_footer();
?>

