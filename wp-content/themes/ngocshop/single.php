<?php
get_header();
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

                                            <a href="http://demos.megawpthemes.com/perfume/files/2015/06/img-32.jpg" itemprop="image" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto[product-gallery]"><img width="600" height="378" src="http://demos.megawpthemes.com/perfume/files/2015/06/img-32-600x378.jpg" class="attachment-shop_single wp-post-image" alt="img-32" title="img-32"></a>


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

                    <div class="product-description" id="description">
                        <div class="rw">

                            <h4>Thông tin chi tiết</h4>

                            <div id="lipsum">
                                <?php echo get_field('noi_dung', get_the_ID()); ?>

                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>


            <?php endif; ?>
            <div class="other-products related-products">

                <header class="heading">

                    <h4>Sản phẩm liên quan</h4>
                </header>

                <div class="carousel-multiple owl-carousel owl-theme" style="opacity: 1; display: block;">



                    <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 1140px; left: 0px; display: block; transition: all 1000ms ease; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 285px;"><div class="item">
                                    <div class="thumbnail thumbnail-product">
                                        <figure class="image-zoom">
                                            <img width="300" height="113" src="http://demos.megawpthemes.com/perfume/files/2015/06/img-351-300x113.jpg" class="attachment-medium wp-post-image" alt="img-35">						</figure>
                                        <div class="caption text-center">
                                            <h5>
                                                <a href="http://demos.megawpthemes.com/perfume/product/new-perfumes-from-top-brands-of-world/" title="New Perfumes from Top Brands of the world">
                                                    New Perfumes from Top Brands of the world								</a>
                                            </h5>
                                            <div class="rating-star">

                                            </div><!-- /rating-star -->
                                            <p class="prod-price text-primary">
                                                <span class="price"><del><span class="amount">£25.00</span></del> <ins><span class="amount">£24.00</span></ins></span>
                                            </p>
                                        </div>
                                    </div><!-- /thumbail -->
                                </div></div><div class="owl-item" style="width: 285px;"><div class="item">
                                    <div class="thumbnail thumbnail-product">
                                        <figure class="image-zoom">
                                            <img width="300" height="113" src="http://demos.megawpthemes.com/perfume/files/2015/06/img-361-300x113.jpg" class="attachment-medium wp-post-image" alt="img-36">						</figure>
                                        <div class="caption text-center">
                                            <h5>
                                                <a href="http://demos.megawpthemes.com/perfume/product/2015-collection-of-perfumes-fro-women/" title="2015 collection of Perfumes for women">
                                                    2015 collection of Perfumes for women								</a>
                                            </h5>
                                            <div class="rating-star">

                                            </div><!-- /rating-star -->
                                            <p class="prod-price text-primary">
                                                <span class="price"><del><span class="amount">£30.00</span></del> <ins><span class="amount">£29.00</span></ins></span>
                                            </p>
                                        </div>
                                    </div><!-- /thumbail -->
                                </div></div></div></div>






                </div>
            </div><!-- /other-products -->












        </div><!-- /product-more -->




    </div>
</section>

<?php
get_footer();
?>

