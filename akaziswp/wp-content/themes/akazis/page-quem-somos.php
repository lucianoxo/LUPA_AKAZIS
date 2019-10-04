<?php /* Template Name: Quem somos */ ?>
<?php get_header(); ?>
<main>
    <section class="main_page container">
        <?php
        $image = get_field('imagem_da_pagina');

        if (!empty($image)):
            ?>
            <header style="background-image: url(<?php echo $image['url']; ?>); background-position: 70% 0; background-size: cover; background-repeat: no-repeat;">
                <h1><?php the_title();?></h1>
            </header>
        <?php endif; ?>

        <div class="content">
            <div class="main_page_about">
                <?php the_field('texto_sobre_a_empresa');?>
            </div>
        </div>
    </section>
</main>
<?php require 'footer.php'; ?>