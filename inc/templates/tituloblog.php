<?php $descricaoblog    = get_field('descricaoblog', $post->ID); ?>

<section id="banner-title">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title"><?php the_title(); ?></h2>
                    <h5 class="txt-blog"><?php echo $descricaoblog ?></h5>
                </div>
            </div>

            
            <div class="row post-destaque">
                <?php
		    $exclude = Array();
		    $postDestaque = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => '2') );
		    if( $postDestaque->have_posts() ): while( $postDestaque->have_posts() ): $postDestaque->the_post();
		    $exclude[] = get_the_ID();
	        ?>
                <div class="col-md-6 blogsDestaque">
                        <div class="thumb"><?php the_post_thumbnail(); ?> </div>
                        <div class="content-post">
                        <!--<div class="date-post"><br><span><?php the_time('d/m/Y'); ?></span></di> -->
                        <a href="<?php the_permalink() ?>"> <div class="title-post"><h2><?php the_title(); ?></h2>
                        <p><?php echo wp_trim_words( get_the_content(), 12 ); ?></p>
                        </a></div></a>
                </div>
            </div>
            <?php
			endwhile;
			endif;
	        wp_reset_query(); ?>
        </div>
    </div>
</section>