<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/fontes/stylesheet.css?v=2">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/<?php echo $post->post_name ?>.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/assets/images/favicon.png" type="image/png">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-S85HDRPK7V"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-S85HDRPK7V');
    </script>

    <?php wp_head(); ?>
</head>

<body id="topo">
    <?php
    include '_loader.php';
    $linkedin = get_field('linkedin', 'option');
    $email = get_field('e-mail', 'option');
    ?>

    <div class="no-overflow">
        <header class="topo">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <a href="<?php echo is_front_page() ? '#topo' : site_url() ?>" class="logo"><?php include 'assets/images/logo.svg'; ?>clique para ir para o topo</a>
                    </div>
                    <div class="col-auto">
                        <button js-button-menu id="menuBtn" class="toggle-menu">
                            <canvas></canvas>
                            <canvas></canvas>
                            <span>Menu Sanduiche</span>
                        </button>
                        <nav js-menu id="menuNav">
                            <ul>
                                <li><a href="<?php echo is_front_page() ? '#topo' : site_url() ?> " content="Home">Home</a></li>
                                <li><a href="<?php echo is_front_page() ? '#sobre' : site_url('#sobre') ?> " content="Sobre">Sobre</a></li>
                                <li><a href="<?php echo is_front_page() ? '#tec' : site_url('#tec') ?> " content="Tecnologias">Tecnologias</a></li>
                                <li><a href="<?php echo is_front_page() ? '#parceiros' : site_url('#parceiros') ?> " content="Parceiros">Parceiros</a></li>
                                <li><a href="<?php echo is_front_page() ? '#depoimentos' : site_url('#depoimentos') ?> " content="Depoimentos">Depoimentos</a></li>
                                <li><a href="<?php echo is_front_page() ? '#projetos' : site_url('#projetos') ?> " content="Projetos">Projetos</a></li>
                                <li><a href="<?php echo is_front_page() ? '#codigo' : site_url('#codigo') ?> " content="Código">Código</a></li>
                                <li><a href="<?php echo is_front_page() ? '#contato' : site_url('#contato') ?> " content="Contato">Contato</a></li>
                            </ul>
                            <ul class="redes">
                                <li><a content="linkedin" href="<?php echo $linkedin ?>" target="_blank">linkedin</a></li>
                                <li><a content="<?php echo $email ?>" href="mailto:<?php echo $email ?>"><?php echo $email ?></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>