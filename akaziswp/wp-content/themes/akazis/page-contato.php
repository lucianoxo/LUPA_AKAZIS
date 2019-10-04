<?php /* Template Name: Contato */ ?>
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

        <div class="main_page_contact">
            <div class="content">
                <div class="main_page_contact_box">
                    <h2>Formas de comunicação</h2>

                    <?php
                    $contato = get_field('contato_da_akazis');
                    if ($contato):
                        ?>
                        <div class="main_page_contact_us">
                            <i class="fas fa-map-marker-alt"></i>
                            <p><?php echo $contato['endereco']; ?></p>
                        </div>

                        <div class="main_page_contact_us">
                            <i class="fas fa-phone-volume"></i>
                            <p><?php echo $contato['telefone']; ?></p>
                        </div>

                        <div class="main_page_contact_us">
                            <i class="fas fa-envelope"></i>
                            <p><?php echo $contato['e-mail']; ?></p>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="map-responsive">
                    <?php the_field('maps_da_akazis'); ?>
                </div>

                <div class="main_page_contact_box_form">
                    <h2>Preencha o formulário</h2>

                    <div class="form-contact">
                        <form novalidate="" id="contactform" method="post" action="#">
                            <div class="form-text-wrap clearfix">
                                <div class="contact-name clearfix">
                                    <label>Nome</label>
                                    <input type="text"  aria-required="true" size="30" value="" name="author" id="author">
                                </div>
                                <div class="contact-email"> 
                                    <label>E-mail</label>
                                    <input type="email" size="30" value="" name="email" id="email">
                                </div>
                                <div class="contact-subject">
                                    <label>Assunto</label>
                                    <input type="text"  aria-required="true" size="30" value="" name="subject" id="subject">
                                </div>
                            </div>

                            <div class="contact-message clearfix">
                                <label>Mensagem</label> 
                                <textarea class="" tabindex="4" name="message" required></textarea>
                            </div>
                            <div class="form-submit margin-top-32">                 
                                <input type="submit" value="Enviar" class="btn btn-large contact-button">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require 'footer.php'; ?>