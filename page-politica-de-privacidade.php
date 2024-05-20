<?php
get_header();
?>

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="padrao-titulo fs50"><?php the_title() ?></h1>
                <div class="editor">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>