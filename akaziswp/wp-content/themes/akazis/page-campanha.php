<?php /* Template Name: Campanha */ ?>
<?php get_header(); ?>
<main>
    <section class="main_page container">
        <?php
        $image = get_field('imagem_da_pagina');

        if (!empty($image)):
            ?>
            <header style="background-image: url(<?php echo $image['url']; ?>); background-position: 70% 0; background-size: cover; background-repeat: no-repeat;">
                <h1><?php the_title(); ?></h1>
            </header>
        <?php endif; ?>

        <div class="main_page_collection">
            <div class="main_page_collection_videos"> 
                <?php
                while (have_rows('informacoes_da_campanha')): the_row();
                    $link = get_sub_field('link_do_video');
                    $desc = get_sub_field('descricao_campanha');
                    $thumb = get_sub_field('thumb_do_video');
                    ?>
                    <article>
                        <div class="main_page_collection_box_video">
                            <a class="video_pl" video-url=" <?php echo $link; ?>">                            
                                <i class="fa fa-play-circle animated infinite pulse_a"></i>                            
                                <img class="responsive-img" src="https://img.youtube.com/vi/<?php echo $thumb; ?>/hqdefault.jpg" alt="" title="">                        
                            </a>
                        </div>

                        <div class="main_page_collection_box_desc">
                            <?php echo $desc; ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
</main>
<?php require 'footer.php'; ?>