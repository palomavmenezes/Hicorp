<?php 
/* Template Name: Blog */
get_header(); ?>

<?php get_template_part('inc/templates/tituloblog'); ?>


<section id="blog">
    <div class="container">
        <div class="row background-about">

            <div class="col-md-12">
                <?php get_template_part('inc/templates/blog'); ?>
            </div>

        </div>
    </div>
</section>
<?php get_template_part('inc/templates/seguranca'); ?>

<?php get_footer(); ?>