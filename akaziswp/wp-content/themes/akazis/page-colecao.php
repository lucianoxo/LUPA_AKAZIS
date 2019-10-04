<?php /* Template Name: Colecao */ ?>
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
            <?php
            $galerias = get_field('galeria_da_colecao');
            if ($galerias):
                ?>
                <?php foreach ($galerias as $galeria): ?>
                    <div class="main_page_collection_photo">
                        <a href="<?php echo $galeria['sizes']['Coleção (Página)']; ?>" data-lightbox="example-set" data-title="<?php echo $galeria['caption']; ?>">
                            <img class="responsive-img" src="<?php echo $galeria['sizes']['Coleção (Página)']; ?>" alt="" title=""> 
                            <div class="more"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php require 'footer.php'; ?>