<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">
        <title>AKAZIS</title>
        <meta name="description" content=""/>
        <meta name="robots" content="index, follow"/>

        <link rel="canonical" href="">

        <meta property="og:type" content="article"/>
        <meta property="og:title" content="AKAZIS"/>
        <meta property="og:description" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content="AKAZIS"/>
        <meta property="og:locale" content="pt-br"/>

        <meta itemprop="name" content="AKAZIS"/>
        <meta itemprop="description" content=""/>
        <meta itemprop="image" content=""/>
        <meta itemprop="url" content=""/>

        <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">        
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/_cdn/css/materialize.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/_cdn/css/unslider.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/_cdn/css/unslider-dots.css"/>
        <link href="<?php bloginfo('template_url'); ?>/_cdn/css/lightbox.css" rel="stylesheet" type="text/css"/>
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="main_header container">
            <div class="content">
                <div class="main_logo">
                    <a href="<?php echo get_settings('home'); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/img/logo-akazis.png" class="responsive-img boxs">
                    </a>
                </div>

                <div class="main_menu boxs">
                    <ul class="main_menu_box">
                        <div class="main_menu_mobile_header">
                            <i class="fas fa-times"></i>
                            <p>Menu</p>
                        </div>
                        <li><a href="<?php echo get_settings('home'); ?>">Home</a></li>
                        <li><a href="<?php echo esc_url(get_page_link(7)); ?>">Quem somos</a></li>
                        <li><a href="<?php echo esc_url(get_page_link(9)); ?>">Coleção</a></li>
                        <li><a href="<?php echo esc_url(get_page_link(11)); ?>">Campanha</a></li>
                        <li><a href="<?php echo esc_url(get_page_link(13)); ?>">Contato</a></li>
                    </ul>

                    <div class="menu_mobile">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </div>
        </header>