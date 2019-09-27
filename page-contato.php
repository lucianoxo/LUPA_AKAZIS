<?php require_once 'header.php'; ?>
<main>
    <section class="main_page container">
        <header style="background-image: url(img/bg-parallax1.jpg); background-position: 70% 0; background-size: cover; background-repeat: no-repeat;">
            <h1>Contato</h1>
        </header>

        <div class="main_page_contact">
            <div class="content">
                <div class="main_page_contact_box">
                    <h2>Formas de comunicação</h2>

                    <div class="main_page_contact_us">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Rua Augusto Calheiros, Centenário - Caruaru/PE</p>
                    </div>

                    <div class="main_page_contact_us">
                        <i class="fas fa-phone-volume"></i>
                        <p>(81) 99926-9111</p>
                    </div>

                    <div class="main_page_contact_us">
                        <i class="fas fa-envelope"></i>
                        <p>atendimento@akazis.com.br</p>
                    </div>
                </div>

                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.215561707214!2d-35.98088378521871!3d-8.28133269404164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7a98bbe448a4df1%3A0x1682b95a67cf1f6a!2sR.%20Augusto%20Calheiros%20-%20Divin%C3%B3polis%2C%20Caruaru%20-%20PE%2C%2055010-270!5e0!3m2!1spt-BR!2sbr!4v1569550101720!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
<?php require_once 'footer.php'; ?>