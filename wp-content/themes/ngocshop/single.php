<?php
get_header();

?>
<?php
get_template_part('tpl','header_search');
?>
<section class="section-compact">
    <div class="container">

        <div class="single-container">
            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>

                    <div itemscope="" itemtype="http://schema.org/Product" id="product-545" class="product-single post-545 product type-product status-publish has-post-thumbnail product_cat-sleek sale shipping-taxable purchasable product-type-simple product-cat-sleek instock">
                        <div class="featured-box">
                            <div class="row">
                                <div class="col-sm-5">
                                    <figure class="image">


                                        <div class="images">

                                            <a href="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' )[0]; ?>" itemprop="image" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto[product-gallery]"><?php the_post_thumbnail('product-image'); ?></a>


                                        </div>
                                    </figure>
                                </div>
                                <div class="col-sm-7">
                                    <div class="text">


                                        <h4 itemprop="name" class="product_title entry-title"><?php the_title(); ?></h4>

                                        <div class="collapse in" id="info-1">
                                            <div itemprop="description">
                                                <div id="lipsum">
                                                    <?php the_content('Read the rest of this entry &raquo;'); ?>
                                                </div>
                                            </div>





                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div><!-- /featured-box -->

                    </div>
                    <?php
                    $noidung = get_field('noi_dung', get_the_ID());

                    if(trim ($noidung) != '') {
                    ?>
                        <div class="product-description" id="description">
                            <div class="rw">

                                <h4>Thông tin chi tiết</h4>

                                <div id="lipsum">
                                    <?php echo $noidung; ?>


                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>

                <?php endwhile; ?>


            <?php endif; ?>
            <div class="other-products related-products">

                <header class="heading">

                    <h4>Sản phẩm liên quan</h4>
                </header>
                <!--contenct-->

                <?php
                $cat_terms = get_the_terms( get_the_ID(), 'download_category');

                $arr_term_slug = array();

                foreach ($cat_terms as $value) {
                    //print_r($value->slug);
                    array_push($arr_term_slug, $value->slug);
                }


                $product_args = array(
                    'post_type' => 'download',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'download_category',
                            'field'    => 'slug',
                            'terms'    => $arr_term_slug,
                        )
                    )
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
            </div><!-- /other-products -->












        </div><!-- /product-more -->




    </div>
</section>

<?php
get_footer();
?>

