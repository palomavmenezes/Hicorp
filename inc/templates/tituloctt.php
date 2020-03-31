<?php
global $post;   
//CAT-CONTATO
$telefone    = get_field('telefone', $post->ID);
$email    = get_field('email', $post->ID);
?>

<section id="banner-title">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="page-title"><?php the_title(); ?></h2>
                </div>

                <div class="col-md-4">
                    <a href="tel:<?php echo $telefone ?>"><h5 class="content-ctt"><?php echo $telefone ?></h5></a>
                    <a href="mailto:<?php echo $email ?>"><h5 class="content-ctt"><?php echo $email ?></h5></a>
                </div>
            </div>
        </div>
    </div>
</section>