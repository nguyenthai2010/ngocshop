<?php
get_header();
?>

<?php
get_template_part('tpl','header_search');
?>
    <section class=" section-compact">
        <div class="container">
            <div class="general-row">
                <div class="wpb_column col-md-12">
                    <div class="cart-block">
                        <header class="heading-3">
                            <h4>Liên hệ</h4>
                        </header>

                        <div class="form-main-container">
                            <div class="row">
                                <div class="col-sm-5 col-lg-4">
                                    <header class="heading-5">
                                        <h4>01/</h4>
                                        <span> Thông tin liên hệ</span>
                                    </header>
                                    <ul class="contact-list">
                                        <?php
                                        $lienhe_dienthoai = get_field('lienhe_dienthoai', 'option');
                                        $lienhe_email = get_field('lienhe_email', 'option');
                                        $lienhe_facebook = get_field('lienhe_facebook', 'option');

                                        ?>
                                        <li><span class="iconic"><i class="flaticon-call36"></i></span><?=$lienhe_dienthoai?></li>
                                        <li><span class="iconic"><i class="flaticon-email15"></i></span><a href="mailto:<?=$lienhe_email?>"><?=$lienhe_email?></a></li>
                                        <li><span class="iconic"><i class="flaticon-facebook43"></i></span><a href="https://<?=$lienhe_facebook?>" target="_blank"><?=$lienhe_facebook?></a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-7 col-lg-8">
                                    <div class="form-section-box">
                                        <header class="heading-5 text-center">
                                            <h4>02/</h4>
                                            <span> Để lại lời nhắn</span>
                                        </header>

                                        <?php echo do_shortcode( '[contact-form-7 id="106" title="form - Liên hệ"]' ); ?>
                                    </div><!-- /form-section-box -->
                                </div>
                            </div>
                        </div><!-- /form-main-container -->


                    </div>

                </div>

            </div>
        </div>
        <div class="clearfix"></div>
    </section>


<?php
get_footer();
?>