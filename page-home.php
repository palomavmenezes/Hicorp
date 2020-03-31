<?php /** * Template Name: Home
        * * Desenvolvido por: Paloma Menezes | Data Cartes
        **/ get_header(); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 banner">
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner.jpg">
            </div>
        </div>
    </div>
</section>

<section id="blog">
    <div class="container">
        <div class="row background-blog">

            <div class="col-md-3">
                <div class="row">
                    <div class="col-8">
                        <h2 class="txt-blog">BLOG</h2>
                        <p class="informe">Informe-se.</p>
                    </div>

                    <div class="col-4">
                        
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <?php get_template_part('inc/templates/posts'); ?>

                <div class="row">
                    <h2 class="about">Sobre a Hicorp</h2>
                    <p class="about">A Hicorp é distribuidora master da marca Hikvision no Brasil. A Hikvision é a líder mundial em Segurança Eletrônica, sendo a principal marca de produtos para videomonitoramento, cftv, controle de acesso, vídeo-porteiro, segurança residencial, entre outros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pharetra vel est sed egestas. Fusce lectus purus, gravida ac dolor nec, gravida sagittis nibh. Proin fermentum dictum posuere. Fusce at euismod velit. Nunc lobortis sagittis tortor, in semper ex facilisis eu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_template_part('inc/templates/diferenciais'); ?>
<?php get_template_part('inc/templates/seguranca'); ?>
<?php get_template_part('inc/templates/parceiros'); ?>

<?php get_footer(); ?>
