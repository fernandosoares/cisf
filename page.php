<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>III CISF ABBC 2021 - As melhores práticas e estratégias aplicadas às novidades de mercado</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div id="privacy-policy" class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h1 class="text-center"><?= get_the_title(); ?></h1>
                <?= wpautop(get_the_content()); ?>
            </div>
        </div>
    </div>

<?php wp_footer(); ?>
</body>

</html>