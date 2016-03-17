<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage merb
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,300|Merriweather:400,300,300italic,400italic' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<header>
    <nav id="navley" class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button id="showRight" type="button" class="navbar-toggle collapsed">
            <div id="burger" class="js-hide">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="burger-tooltip">MENU</span>
            </div>
            <div id="menuClose" class="menu-close">
                <i class="glyphicon glyphicon-remove"></i>
            </div>
          </button>
          <div class="navbar-brand-container">
              <a id="navBrand" class="animated navbar-brand" href="/"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" class="navbar-brand-image" alt="MDE Logo"></a>
          </div>
        </div>
    </div> <!-- /.container-fluid -->
    </nav>

    <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
        <h3>&nbsp;</h3>
        <a class="cbp-link-top js-menu-item" href="<?php bloginfo( 'url' ); ?>/">home</a>
        <a class="cbp-link js-menu-item" href="<?php bloginfo( 'url' ); ?>/work/">projects</a>
        <ul class="cbp-dropdown">
            <li class="cbp-dropdown-item js-menu-item"><a class="sub-dropdown-item" href="<?php bloginfo( 'url' ); ?>/work/project_one">Loft Digital</a></li>
            <li class="cbp-dropdown-item js-menu-item"><a class="sub-dropdown-item" href="<?php bloginfo( 'url' ); ?>/work/project_two">Business Traveller</a></li>
            <li class="cbp-dropdown-item js-menu-item"><a class="sub-dropdown-item" href="<?php bloginfo( 'url' ); ?>/work/project_three">Olam</a></li>
            <li class="cbp-dropdown-item js-menu-item"><a class="sub-dropdown-item" href="<?php bloginfo( 'url' ); ?>/work/project_four">MD Marketing</a></li>
            <li class="cbp-dropdown-item js-menu-item"><a class="sub-dropdown-item" href="<?php bloginfo( 'url' ); ?>/work/project_five">Big Idea</a></li>
            <li class="cbp-dropdown-item js-menu-item"><a class="sub-dropdown-item" href="<?php bloginfo( 'url' ); ?>/work/project_six">BPSI</a></li>
        </ul>
        <a class="cbp-link js-menu-item" href="<?php bloginfo( 'url' ); ?>/blog/">other stuff</a>
    </div>
</header>

<body id="body" <?php body_class(); ?>>
<div id="push-body" class="cbp-spmenu-push">
