<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class('antialiased'); ?>>


<div id="page" class="min-h-screen flex flex-col justify-center">
    <?php get_template_part('template-parts/main'); ?>
</div>

<footer id="colophon" class="site-footer" role="contentinfo">
    <?php do_action('tailpress_footer'); ?>

    <div class="container mx-auto text-center text-gray-500 py-12">
        &copy; <?php echo date_i18n('Y'); ?> - <?php echo get_bloginfo('name'); ?>
    </div>
</footer>


<?php wp_footer(); ?>

</body>
</html>
