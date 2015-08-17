
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en-US" prefix="og: http://ogp.me/ns#"> <!--<![endif]-->

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="UTF-8">
    <base href="<?php echo get_bloginfo('template_url')?>/"></base>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>ngocshop.com <?php wp_title(); ?></title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link rel='stylesheet' id='google_fonts-css'  href='http://fonts.googleapis.com/css?family=Tangerine&#038;ver=4.2.3' type='text/css' media='all' />
    <link rel='stylesheet' id='flaticon-css'  href='css/flaticon.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css'  href='css/bootstrap.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='theme-owl-transitions-css'  href='css/owl.transitions.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='theme-owl-carousel-css'  href='css/owl.carousel.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css'  href='css/font-awesome.min.css?ver=4.5' type='text/css' media='screen' />
    <link rel='stylesheet' id='jquery-prettyphoto-css'  href='css/prettyPhoto.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-css'  href='css/woocommerce.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='main_settings-css'  href='css/settings.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='main_style-css'  href='css/style.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='theme-responsive-css'  href='css/responsive.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='theme-color-css'  href='css/color.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='custome-css-css'  href='css/custome.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='ngocshop-css'  href='css/ngocshop.css?ver=1.0' type='text/css' media='all' />

    <script type='text/javascript' src='js/jquery.js?ver=1.11.2'></script>
    <script type='text/javascript' src='js/jquery-migrate.min.js?ver=1.2.1'></script>

    <?php wp_head(); ?>
</head>
<body <?php body_class('wpb-js-composer js-comp-ver-4.5.1 vc_responsive'); ?>>

<div class="pageWrap">

<div class="main-bar">

    <div class="logo">

        <a title="Perfume" href="http://demos.megawpthemes.com/perfume">

            <img src="http://demos.megawpthemes.com/perfume/wp-content/themes/perfume/images/logo.png" alt="Perfume">

        </a>

    </div>

    <div class="user-controls-bar">
        <ul class="user-controls">
            <li>
                <span class="site-search-btn dropBox-btn"><i class="flaticon-magnifier56"></i></span>
                <div class="dropBox">
                    <div class="box-section">
                        <form action="#" method="post" class="clearfix">
                            <div class="form-left">
                                <div class="form-group">
                                    <input type="search" class="form-control" placeholder="Search keyword">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-default text-uppercase" value="Search">
                        </form>

                    </div>
                </div><!-- /dropBox -->

            </li>
            <li>
                <a href="<?php echo get_permalink( get_page_by_path( 'giohang' ) );?>"><span class="cart-btn dropBox-btn"><i class="flaticon-shopping191"></i><span class="badge"><?php echo edd_get_cart_quantity(); ?></span></span></a>
            </li>

            <li class="toggle-menu">
                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </li>
        </ul><!-- /user-controls -->
    </div><!-- /user-controls -->
    <div class="main-nav-bar">

        <nav class="navbar-collapse collapse">
            <?php
            $nav = array(
                'theme_location'  => 'menu_top',
                'menu'            => 'aaaa',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'main-nav',
                'menu_id'         => 'menu-mian-menu'
            );

            wp_nav_menu( $nav );
            ?>
        </nav>

    </div><!-- /main-nav-bar -->

</div>





 

		