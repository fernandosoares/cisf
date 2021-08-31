<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>III CISF ABBC 2021 - As melhores práticas e estratégias aplicadas às novidades de mercado</title>
    <?php wp_head(); ?>
    <script type="text/javascript">
        _linkedin_partner_id = "1079601";
        window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
        window._linkedin_data_partner_ids.push(_linkedin_partner_id);
        </script><script type="text/javascript">
        (function(l) {
        if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
        window.lintrk.q=[]}
        var s = document.getElementsByTagName("script")[0];
        var b = document.createElement("script");
        b.type = "text/javascript";b.async = true;
        b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
        s.parentNode.insertBefore(b, s);})(window.lintrk);
    </script>

</head>

<body <?php body_class(); ?>>

    <noscript>
        <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=1079601&fmt=gif" />
    </noscript>

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
    
    <section id="green-footer">
        <?php include('views/green-footer.php'); ?>
    </section>

    <?php wp_footer(); ?>
</body>

</html>