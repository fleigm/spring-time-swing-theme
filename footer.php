<?php do_action('tailpress_content_end'); ?>

</div>

<?php do_action('tailpress_content_after'); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
    <?php do_action('tailpress_footer'); ?>

    <div class="container mx-auto flex items-end justify-between py-12">
        <div class="flex flex-col">
            <span class="text-sm text-gray-500" >0162 351 9046</span>
            <a  class="text-sm text-gray-500" href="mailto:info@springtimeswing.com">info@springtimeswing.com</a>
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'footer-menu',
                    'container_class' => 'mt-2',
                    'menu_class' => 'flex flex-col',
                    'theme_location' => '',
                    'li_class' => 'text-gray-500 text-sm',
                    'fallback_cb' => false,
                )
            );
            ?>
        </div>
        <div class="text-gray-500 flex flex-col items-center">

            &copy; <?php echo date_i18n('Y'); ?> - <?php echo get_bloginfo('name'); ?>
        </div>
    </div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
