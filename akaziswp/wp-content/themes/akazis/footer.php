<?php /* Template Name: FOOTER */ ?>        
<footer class="main_footer container">
    <div class="content">
        <div class="main_fotter_box">
            <ul>
                <li><a href="<?php echo esc_url(get_page_link(7)); ?>">Quem somos</a></li>
                <li><a href="<?php echo esc_url(get_page_link(9)); ?>">Coleção</a></li>
                <li><a href="<?php echo esc_url(get_page_link(11)); ?>">Campanha</a></li>
                <li><a href="<?php echo esc_url(get_page_link(13)); ?>">Contato</a></li>
            </ul>
        </div>

        <div class="main_fotter_box">
            <ul>
                <li><a href="#">Login/Registro</a></li>
                <li><a href="#">Seu carrinho</a></li>
                <li><a href="#">Coleções</a></li>
                <li><a href="#">Seu checkout</a></li>
            </ul>
        </div>

        <div class="main_fotter_box">
            <ul>
                <li><a href="#">FAQ's</a></li>
                <li><a href="#">Termos de serviços</a></li>
                <li><a href="#">Políticas de privacidade</a></li>
                <li><a href="#">Devoluções</a></li>
            </ul>
        </div>
        <div class="main_fotter_box">
            <img src="<?php bloginfo('template_url'); ?>/img/logo-akazis.png" class="responsive-img">
            <ul>
                <?php
                $contato = get_field('contato_da_akazis');
                if ($contato):
                    ?>
                    <li><?php echo $contato['endereco']; ?></li>
                    <li><?php echo $contato['telefone']; ?></li>
                    <li><?php echo $contato['e-mail']; ?></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</footer>

<script src="<?php bloginfo('template_url'); ?>/_cdn/js/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/_cdn/js/main.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/_cdn/js/lightbox.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/_cdn/js/video.popup.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/_cdn/js/scrollreveal.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/_cdn/js/materialize.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/_cdn/js/unslider.js" type="text/javascript"></script>
</body>
</html>
