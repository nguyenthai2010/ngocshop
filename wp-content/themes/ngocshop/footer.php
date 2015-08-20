</div>
</section>

<section class="section footer-widgets bg-lighter-grey">
    <div class="container">
        <div class="row">
            <div class="col-sm-3"><div id="sh_question-2"  class="widget widget-info widget_sh_question">
                    <header class="widget-heading">
                        <h4><i class="flaticon-help"></i>Yêu cầu hỗ trợ ?</h4>
                    </header>

                    <?php
                    $lienhe_dienthoai = get_field('lienhe_dienthoai', 'option');
                    $lienhe_email = get_field('lienhe_email', 'option');
                    $lienhe_facebook = get_field('lienhe_facebook', 'option');

                    ?>
                    <nav>
                        <ul>
                            <li><i class="flaticon-phone72"></i><?=$lienhe_dienthoai?></li>
                            <li><a href="mailto:<?=$lienhe_email?>"><i class="flaticon-email15"></i><?=$lienhe_email?></a></li>
                            <li><a href="<?php echo get_permalink( get_page_by_path( 'lien-he' ) );?>"><i class="flaticon-google125"></i>Gởi tin nhắn</a></li>
                        </ul>
                    </nav>
                </div></div><div class="col-sm-3"><div id="sh_recent_products-2"  class="widget widget-info widget_sh_recent_products">
                    <header class="widget-heading">
                        <h4><i class="flaticon-shield90"></i>Thông Tin Dịch Vụ</h4>
                    </header>



                    <?php
                    $nav = array(
                        'theme_location'  => 'bottom_col_1',
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'list-2',
                        'menu_id'         => 'menu-list-col1'
                    );

                    wp_nav_menu( $nav );
                    ?>

                </div></div><div class="col-sm-3"><div id="sh_recent_products-3"  class="widget widget-info widget_sh_recent_products">
                    <header class="widget-heading">
                        <h4><i class="flaticon-shipping"></i>Ngọc Shop</h4>
                    </header>



                    <?php
                    $nav = array(
                        'theme_location'  => 'bottom_col_2',
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'list-2',
                        'menu_id'         => 'menu-list-col2'
                    );

                    wp_nav_menu( $nav );
                    ?>

                </div></div><div class="col-sm-3"><div id="sh_payment-2"  class="widget widget-info widget_sh_payment">
                    <header class="widget-heading">
                        <h4><i class="flaticon-creditcard21"></i>Tài khoản thanh toán</h4>
                    </header>
                    <ul class="list-cards">
                        <li><a><img src="images/nganhang/vietcombank.jpg" height="30" alt=""></a></li>
                        <li><a><img src="images/nganhang/bidv.jpg" height="30" alt=""></a></li>
                        <li><a><img src="images/nganhang/eximbank.jpg" height="30" alt=""></a></li>
                        <li><a><img src="images/nganhang/sacombank.jpg" height="30" alt=""></a></li>
                        <li><a><img src="images/nganhang/techcombank.jpg" height="30" alt=""></a></li>
                        <li><a><img src="images/nganhang/vietinbank.jpg" height="30" alt=""></a></li>
                    </ul>
                </div></div>			</div>
    </div>
</section>


</div><!-- /pageWrap -->


<script type='text/javascript' src='js/bootstrap.min.js?ver=1.0'></script>
<script type='text/javascript' src='js/jquery.mixitup.min.js?ver=1.0'></script>
<script type='text/javascript' src='js/jquery.prettyPhoto.js?ver=1.0'></script>
<script type='text/javascript' src='js/owl.carousel.min.js?ver=1.0'></script>
<script type='text/javascript' src='js/script.js?ver=1.0'></script>
<script type='text/javascript' src='js/core.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='js/widget.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='js/mouse.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='js/slider.min.js?ver=1.11.4'></script>

<?php wp_footer();  ?>

</body>

</html>