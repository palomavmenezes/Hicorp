<?php

	/**
	 * HEADER TEMPLATE
	 */

?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title>Hicorp | <?php the_title(); ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo get_template_directory_uri(); ?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Data Cartês
    Theme URL: datacartes.com.br
    Author: Paloma Menezes
  ======================================================= -->

  <meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if(get_theme_mod('general_fav_icon') != ''){ ?>
	<link rel="icon" href="<?php echo esc_url(get_theme_mod('general_fav_icon')); ?>" type="image/x-icon"/>
	<?php } ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(''); ?> <?php ecko_tag_schema(); ?>>

  <!--==========================
  Header
  ============================-->

  <header id="header-top">
    <div class="container menu-top">
      <nav class="main-nav float-left d-none d-lg-block">
        <ul>
          <li><a href="<?php echo get_site_url(); ?>/termos-de-uso-e-atendimento">Termos de Uso e Atendimento</a></li>
          <li><a href="<?php echo get_site_url(); ?>/politicas-de-seguranca">Políticas de Segurança</a></li>
          <li><a href="<?php echo get_site_url(); ?>/politica-integrada-de-gestao">Política Integrada de Gestão</a></li>
        </ul>
      </nav><!-- .main-nav -->
    </div>
  </header><!-- #header -->

  <header id="header">
    <div class="container">

      <nav class="main-nav float-left d-none d-lg-block">
        <ul class="menu-bottom">
          <li><a href="<?php echo get_site_url(); ?>">HOME</a></li>
          <li><a href="<?php echo get_site_url(); ?>/sobre">QUEM SOMOS</a></li>
          <li><a href="<?php echo get_site_url(); ?>/blog">BLOG</a></li>
           <li><a href="<?php echo get_site_url(); ?>/trabalhe-conosco">TRABALHE CONOSCO</a></li>
          <li><a href="<?php echo get_site_url(); ?>/fale-conosco">FALE CONOSCO</a></li>
          <li><a href="<?php echo get_site_url(); ?>/loja">LOJA</a></li>
        </ul>
      </nav><!-- .main-nav -->

      <div class="logo float-right">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="<?php echo get_site_url(); ?>" class="scrollto"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="img-fluid"></a>
      </div>
      
    </div>
  </header><!-- #header -->