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
        </div>
    </div>
</section>