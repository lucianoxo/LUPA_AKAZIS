<?php /* Template Name: HOME */ ?>
<?php get_header(); ?>
<main>
    <div class="main_hero container boxs">
        <div class="banner">
            <?php
            $images = get_field('banner_principal');
            if ($images):
                ?>
                <ul>
                    <?php foreach ($images as $image): ?>
                        <li>
                            <img src="<?php echo $image['sizes']['Banner Principal']; ?>" class="responsive-img" alt="<?php echo $image['alt']; ?>" />
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>

    <section class="main_collection container">
        <div class="content row">
            <?php
            while (have_rows('colecao')): the_row();
                $imagem = get_sub_field('imagem');
                $categoria = get_sub_field('categoria');
                $link = get_sub_field('link');
                ?>
                <div class="main_collection_box">
                    <div class="one">
                        <a href="<?php echo $link; ?>">
                            <div class="main_collection_img">
                                <img src="<?php echo $imagem['sizes']['Colecao_Home']; ?>" class="responsive-img">
                            </div>

                            <div class="main_collection_button">
                                <?php echo $categoria; ?>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </section>

    <section class="main_new_products container">
        <div class="content">
            <h1 class="srBottom"><?php the_field('titulo_da_secao_produtos'); ?></h1>
            <ul>
                <?php
                while (have_rows('produtos')): the_row();
                    $imagem = get_sub_field('imagem');
                    $desc = get_sub_field('descricao');
                    ?>

                    <li class="new_product_item srLeft">
                        <div class="new_product_img">
                            <img src="<?php echo $imagem['sizes']['Produtos (Home)']; ?>" class="responsive-img">
                        </div>
                        <div class="new_product_desc">
                            <span><?php echo $desc; ?></span>
                        </div>

                        <!--                        <div class="new_product_price">
                                                    <span>R$ 179,90</span>
                                                </div>
                                                <div class="new_product_button">
                                                    <a href="#">Adicionar ao carrinho</a>
                                                </div>-->
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </section>

    <?php
    $image = get_field('contato_imagem_de_destaque');

    if (!empty($image)):
        ?>
        <div class="main_product_cta container" style="background-image: url(<?php echo $image['url']; ?>); background-position: 70% 0; background-size: cover; background-repeat: no-repeat;">
            <div class="content srBottom">
                <h1>Estamos esperando seu contato</h1>
                <div class="main_product_cta_button">
                    <a href="<?php the_field('contato_link_para_contato'); ?>" target="_blank">Fale com a gente</a>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <section class="main_blog container">
        <div class="content row">
            <h1 class="srBottom">Nas Redes Sociais</h1>

            <div class="main_blog_box">
                <?php the_field('widget_do_instagram');?> 
            </div>
        </div>
    </section>
</main>
<?php require 'footer.php'; ?>