<?php 
/* Template Name: Trabalhe Conosco */
get_header();
$texto    = get_field('texto', $post->ID);
?>

<?php get_template_part('inc/templates/titulo'); ?>

<section id="contactForm">
    <div class="container">
        <div class="row">
            <div class="col-md-8 form-vagas">
                <h4 class="content-ctt"><?php echo $texto ?></h4>
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

                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6"><button type="submit" class="btn-send-form">ENVIAR</button></div>
              </div>
            </div>

            <div class="col-md-4">
                <img class="img-vagas" src="<?php echo get_template_directory_uri(); ?>/img/trabalhe-conosco.png">
            </div>
            
        </div>

        
    </div>
</section>

<?php get_template_part('inc/templates/empresas'); ?>

<?php get_footer(); ?>