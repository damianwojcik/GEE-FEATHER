<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="apple-touch-icon" sizes="180x180" href="<?= THEME_URL; ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= THEME_URL; ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= THEME_URL; ?>/favicon-16x16.png">


    <!-- HTML 5 SUPPORT
    ================================================== -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>