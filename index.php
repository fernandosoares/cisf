<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <section id="menu">
        <?php include('views/menu.php'); ?>
    </section>
    
    <section id="hero">
        <?php include('views/hero.php'); ?>
    </section>
    
    <section id="about">
        <?php include('views/about.php'); ?>
    </section>
    
    <section id="speakers">
        <?php include('views/speakers.php'); ?>
    </section>
    
    <section id="live">
        <?php include('views/live.php'); ?>
    </section>
    
    <section id="countdown">
        <?php include('views/countdown.php'); ?>
    </section>
    
    <section id="footer">
        <?php include('views/footer.php'); ?>
    </section>

    <?php wp_footer(); ?>
</body>

</html>