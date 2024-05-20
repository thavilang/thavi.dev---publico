<?php
get_header();
$apresentacao = get_field('apresentacao', $post->ID);
$texto_marquee = get_field('texto_marquee', $post->ID);
$experiencia_descricao = get_field('experiencia_descricao', $post->ID);
$experiencia_anos = get_field('experiencia_anos', $post->ID);
$carreira = get_field('carreira', $post->ID);
$especialidades_titulo = get_field('especialidades_titulo', $post->ID);
$linguagens = get_field('linguagens', $post->ID);
$parceiros = get_field('parceiros', $post->ID);
$depoimentos = get_field('depoimentos', $post->ID);
$codigo = get_field('codigo', $post->ID);
$contato = get_field('contato', $post->ID);
$linkedin = get_field('linkedin', 'option');
$whatsapp = get_field('whatsapp', 'option');
$email = get_field('e-mail', 'option');
$curriculo = get_field('curriculo', 'option');
$github = get_field('github', 'option');
?>

<main>
    <section class="banner">
        <div class="container">
            <h1>
                <span>i'm a</span>
                <a title="Clique para ver meu perfil do Github" href="<?php echo $github; ?>" target="_blank">
                    <img class="A imagem mostra uma tela de código" src="https://thavi.dev/wp-content/uploads/2023/11/FR-Blog-Image-12-May-17-2022-03-33-01-80-PM-e1716230164358.webp" alt="" width="276" height="184" />
                </a>
                <u>front-end</u> <span>web</span> <span>developer</span>
                <a title="Clique para ver meu currículo" href="<?php echo $curriculo['url']; ?>" target="_blank">
                    <video autoplay loop muted playsinline>
                        <source src="https://thavi.dev/wp-content/uploads/2024/05/4115790-uhd_3840_2160_25fps-2.mp4" type="video/mp4" />
                        Your browser does not support the video tag.
                    </video>
                </a>
                <span>based in</span> <u>porto alegre</u><span>, brazil.</span>
            </h1>
        </div>
        <div class="banner__infos">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="row justify-content-center justify-content-sm-between">
                            <div class="d-none d-sm-block col-auto">
                                <p>©2024</p>
                            </div>
                            <div class="col-auto">
                                <a href="#content">scroll <?php echo sprite('icon-seta-perna'); ?></a>
                            </div>
                            <div class="d-none d-sm-block col-auto">
                                <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="content" class="marquee-texto">
        <div class="marquee">
            <div>
                <span><?php echo $texto_marquee ?> </span>
                <span><?php echo $texto_marquee ?> </span>
            </div>
        </div>
    </section>
    <section id="sobre" class="padrao-bloco branco bloco-experiencia">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-7 col-lg-6 offset-lg-1">
                    <div class="descricao">
                        <?php echo $experiencia_descricao ?>
                    </div>
                </div>
                <div class="col-10 offset-2 col-sm-8 offset-sm-4 col-md-6 offset-md-6 col-lg-5 offset-lg-6 col-xl-4 offset-xl-7">
                    <div class="tempo">
                        <?php echo $experiencia_anos ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="#curriculo" class="padrao-bloco branco bloco-curriculo">
        <div class="container">
            <div class="exp-carreira">
                <div class="row">
                    <div class="col-auto col-lg-3 offset-lg-1">
                        <p class="bloco-curriculo__intro">Front-End</p>
                    </div>
                    <div class="col offset-sm-1 col-lg-6">
                        <div class="grid-curriculo">
                            <?php foreach ($carreira as $key => $carreiraItem) : ?>
                                <div class="item">
                                    <p><?php echo $carreiraItem['titulo'] ?> </p>
                                    <p><?php echo $carreiraItem['data'] ?> </p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="links">
                            <a target="_blank" href="<?php echo $linkedin; ?>">
                                <?php echo sprite('icon-linkedin'); ?>
                                <span>linkedin</span>
                            </a>
                            <a target="_blank" href="<?php echo $curriculo['url']; ?>">
                                <span>Currículo completo</span>
                                <?php echo sprite('icon-nova-aba'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="tec" class="padrao-bloco branco bloco-qualificacoes">
        <div class="container">
            <h2 class="padrao-titulo centralizar"><?php echo $especialidades_titulo ?></h2>
            <div js-bloco-ativo="1">
                <div js-bloco-navegacao>
                    <?php foreach ($linguagens as $key => $linguagem) : ?>
                        <button js-btn-bloco="<?php echo $key + 1 ?>" class="padrao-botao uppercase fs18"><?php echo $linguagem['nome'] ?></button>
                    <?php endforeach; ?>
                </div>
                <?php foreach ($linguagens as $key => $linguagem) : ?>
                    <div js-bloco="<?php echo $key + 1 ?>">
                        <?php echo $linguagem['descricao'] ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section id="parceiros" class="padrao-bloco branco bloco-parceiros">
        <div class="container">
            <div class="row">
                <div class="col-md-5 offset-lg-1">
                    <h2 class="padrao-titulo">
                        <small><?php echo $parceiros['titulo'] ?></small>
                        <?php echo $parceiros['subtitulo'] ?>
                    </h2>
                </div>
                <div class="col-md-7 col-lg-6">
                    <div class="grid-parceiros">
                        <?php foreach ($parceiros['parceiros'] as $parceiro) : ?>
                            <a href="<?php echo $parceiro['link'] ?>" target="_blank">
                                <img src='<?php echo $parceiro['logo']['sizes']['thumbnail'] ?>' loading='lazy' alt='<?php echo $parceiro['logo']['title']; ?>'>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="depoimentos" class="bloco-depoimentos">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="swiper" js-swiper-depoimentos>
                        <div class="swiper-wrapper">
                            <?php foreach ($depoimentos as $depoimento) :
                                $caracteres = strlen($depoimento['conteudo']);
                                if ($caracteres >= 250) {
                                    $fs = 'fs30';
                                } else if ($caracteres >= 150) {
                                    $fs = 'fs40';
                                } else {
                                    $fs = '';
                                }
                            ?>
                                <div class="swiper-slide">
                                    <div class="depoimento">
                                        <div class="depoimento__content <?php echo $fs; ?>">
                                            <?php echo $depoimento['conteudo'] ?>
                                        </div>
                                        <p class="depoimento__assinatura"><span><?php echo $depoimento['nome'] ?> </span> | <span><?php echo $depoimento['agencia'] ?> </span></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="swiper-navegacao">
                        <button class="swiper-button-depoimentos-prev"><?php echo sprite('icon-seta'); ?></button>
                        <button class="swiper-button-depoimentos-next"><?php echo sprite('icon-seta'); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="projetos" class="padrao-bloco branco bloco-portfolio">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="padrao-titulo centralizar">últimos projetos</h2>
                    <div class="projetos">
                        <?php
                        $posts = get_posts([
                            'post_type' => 'projeto',
                            'post_status' => 'publish',
                            'numberposts' => 5,
                            'fields' => 'ids'
                        ]);
                        foreach ($posts as $post) {
                            $titulo = get_the_title($post);
                            $link_projeto = get_field('link_projeto', $post);
                            $atribuicoes = get_field('atribuicoes', $post);
                            $associados = get_field('associados', $post);
                        ?>
                            <div class="projeto">
                                <div>
                                    <a class="projeto__titulo" href="<?php echo $link_projeto; ?>" target="_blank" title="Clique para acessar o projeto '<?php echo $titulo; ?>' em nova aba">
                                        <h3><?php echo $titulo ?></h3>
                                        <p><?php echo $atribuicoes ?></p>
                                    </a>
                                    <div class="projeto__parceria">
                                        <?php foreach ($associados as $associado) : ?>
                                            <p>
                                                <span><?php echo $associado['vinculo'] ?></span>
                                                <a href="<?php echo $associado['link'] ?>" target="_blank"><?php echo $associado['nome'] ?></a>
                                            </p>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="codigo" class="padrao-bloco bloco-codigo branco">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="padrao-titulo centralizar"><?php echo $codigo['titulo'] ?></h2>
                    <div class="lista-versoes">
                        <?php foreach ($codigo['versoes'] as $key => $versao) : ?>
                            <div class="versao">
                                <a class="padrao-botao uppercase" href="<?php echo $versao['link'] ?>" target="_blank"><span><?php echo $versao['nome'] ?></span><?php echo sprite('icon-nova-aba', 'Ícone Nova Aba'); ?></a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contato" class="padrao-bloco bloco-contato branco">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2><?php echo $contato['titulo'] ?></h2>
                    <a class="padrao-botao fs18" href="<?php echo $whatsapp; ?>" target="_blank"><?php echo $contato['texto'] ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>