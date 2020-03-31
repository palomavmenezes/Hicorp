<?php

	/**
	 * SINGLE TEMPLATE
	 */

	get_header();

?>

	<?php while(have_posts()) : the_post(); ?>
		<?php
		    $exclude = Array();
		    $postDestaque = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => '1') );
		    if( $postDestaque->have_posts() ): while( $postDestaque->have_posts() ): $postDestaque->the_post();
		    $exclude[] = get_the_ID();
	    ?>
	<section id="banner-title">
    <div class="container-fluid">
        <div class="container">            
            <div class="row">
 				<div class="col-md-6 single-thumb">
                        <div class="thumb"><?php the_post_thumbnail(); ?> </div>
				</div>
				<div class="col-md-6">
					<div class="content-post">
					
						<div class="row">
							<div class="col-md-12">
								<div class="title-post"><h2><?php the_title(); ?></h2></div>
							</div>
							<div class="col-md-6"><?php the_time('d/m/Y'); ?></div>
							<div class="col-md-6">Compartilhar</div>
						</div>
					</div>
				</div>
            </div>
            <?php
			endwhile;
			endif;
	        wp_reset_query(); ?>
</section>

<section id="blog">
    <div class="container">
        <div class="row background-about">

            <div class="col-md-10">
                <?php echo get_the_content(); ?>
            </div>
			
			<div class="col-md-2">

			</div>

			<div class="col-md-12">
				<div class="row">
					<?php $prev_post = get_previous_post(); ?>

					<div class="col-md-5">
						<div class="row prev">
							<div class="col-md-12">
								<a href="<?php echo get_the_permalink( $prev_post->ID ) ?>" class="post-permalink">
								<img src="" alt=""> Notícia Anterior</a>
							</div>
								
							<div class="col-4 prev-thumb">
								<a href="<?php echo get_the_permalink( $prev_post->ID ) ?>"><img class="post-prev-thumb" src="<?php echo get_the_post_thumbnail_url( $prev_post->ID ) ?>"></a>
							</div>

							<div class="col-8 post-title">
								<a href="<?php echo get_the_permalink( $prev_post->ID ) ?>"><h5 class="post-title"><?php echo $prev_post->post_title ?></h5></a>
							</div>
						</div>
					</div>

				<div class="col-md-2">

				</div>

				<?php $next_post = get_next_post(); ?>
				<div class="col-md-5">
					<div class="row next">
						<div class="col-md-12">
							<a href="<?php echo get_the_permalink( $next_post->ID ) ?>" class="post-permalink">
							<img src="" alt="">Próxima Notícia</a>
						</div>

						<div class="col-8 post-title">
							<a href="<?php echo get_the_permalink( $next_post->ID ) ?>"><h5 class="post-title"><?php echo $next_post->post_title ?></h5></a>
						</div>

						<div class="col-4 next-thumb">
							<a href="<?php echo get_the_permalink( $next_post->ID ) ?>"><img class="post-prev-thumb" src="<?php echo get_the_post_thumbnail_url( $prev_post->ID ) ?>"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</section>

	<?php endwhile; ?>
<?php get_template_part('inc/templates/seguranca'); ?>
<?php get_footer(); ?>
