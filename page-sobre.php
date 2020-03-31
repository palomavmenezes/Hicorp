<?php /** * Template Name: Sobre
        * * Desenvolvido por: Paloma Menezes | Data Cartes
        **/ get_header(); 
$tituloabout   = get_field('tituloabout', $post->ID);
$textoabout    = get_field('textoabout', $post->ID);
?>


<?php get_template_part('inc/templates/tituloctt'); ?>

<section id="about">
    <div class="container">
        <div class="row background-about">

            <div class="col-md-12">
                <h2 class="txt-about"><?php echo $tituloabout ?></h2>
                <p class="txt-about"><?php echo $textoabout ?></p>
            </div>

        </div>
    </div>
</section>

<?php get_template_part('inc/templates/diferenciais'); ?>
<?php get_template_part('inc/templates/parceiros'); ?>

<?php get_footer(); ?>
