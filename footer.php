<?php
$linkedin = get_field('linkedin', 'option');
$email = get_field('e-mail', 'option');
?>

<footer class="padrao-bloco">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto col-lg-3">
                <?php include 'assets/images/logo.svg'; ?>
            </div>
            <div class="d-none d-lg-block col-lg-6">
                <ul class="links">
                    <li><a href="#topo" content="Home">Home</a></li>
                    <li><a href="#sobre" content="Sobre">Sobre</a></li>
                    <li><a href="#tec" content="Tecnologias">Tecnologias</a></li>
                    <li><a href="#parceiros" content="Parceiros">Parceiros</a></li>
                    <li><a href="#depoimentos" content="Depoimentos">Depoimentos</a></li>
                    <li><a href="#projetos" content="Projetos">Projetos</a></li>
                    <li><a href="#codigo" content="Código">Código</a></li>
                    <li><a href="#contato" content="Contato">Contato</a></li>
                    <li><a href="<?php echo site_url('politica-de-privacidade') ?>" content="Política de Privacidade">Política de Privacidade</a></li>
                </ul>
            </div>
            <div class="d-none d-lg-block col-lg-3">
                <a href="#topo" class="btn-topo"><?php echo sprite('icon-seta-perna'); ?></a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="contatos">
                    <a href="<?php echo $linkedin; ?>">linkedin</a>
                    <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
                </div>
            </div>
        </div>
    </div>
</footer>

</div> <!--.no-overflow-->

<script src="<?php echo get_template_directory_uri() . "/assets/js/modulos/abas.js"; ?>"></script>
<script src="<?php echo get_template_directory_uri() . "/assets/js/plugins/swiper.min.js"; ?>"></script>
<script src="<?php echo get_template_directory_uri() . "/assets/js/script.js"; ?>"></script>


<?php wp_footer(); ?>
</body>

</html>