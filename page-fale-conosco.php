<?php 
/* Template Name: Contato */
get_header();  
$texto    = get_field('texto', $post->ID);
?>

<?php get_template_part('inc/templates/tituloctt'); ?>

<section id="contactForm">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="content-ctt"><?php echo $texto ?></h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="nome" placeholder="Digite seu Nome">
                    </div>

                    <div class="col-md-6">
                        <input type="text" class="form-control" id="empresa" placeholder="Qual a sua empresa?">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail ou telefone">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <textarea class="form-control" id="mensagem" placeholder="Digite sua mensagem" rows="3"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9"></div>
            <div class="col-md-3"><button type="submit" class="btn-send-form">ENVIAR</button></div>
        </div>
    </div>
</section>

<?php get_footer(); ?>