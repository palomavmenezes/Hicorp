<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>

<div class="row">
    <div id="carouselBlog" class="CarouselBlog">
		<?php
		    $exclude = Array();
		    $postDestaque = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => '8' ) );
		    if( $postDestaque->have_posts() ): while( $postDestaque->have_posts() ): $postDestaque->the_post();
		    $exclude[] = get_the_ID();
	    ?>
            <div class="bloglist">
                <div class="thumb">
                    <a href="<?php the_permalink() ?>"> <?php the_post_thumbnail(); ?> </a>
                    <div class="content-post">
                    <!--<div class="date-post"><br><span><?php the_time('d/m/Y'); ?></span></di> -->
                    <a href="<?php the_permalink() ?>"> <div class="title-post"><h2><?php the_title(); ?></h2></div>
                    <p><?php echo wp_trim_words( get_the_content(), 12 ); ?></p>
                    <div class="button-post"><a class="btn btn-blog">Ler Postagem</a></div></a>
                </div>
            </div>
	</div>
		<?php
			endwhile;
			endif;
	        wp_reset_query(); ?>
	</div>
</div>