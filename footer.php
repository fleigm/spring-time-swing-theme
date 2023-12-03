
<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
	<?php do_action( 'tailpress_footer' ); ?>

	<div class="container mx-auto flex align-center justify-between py-12">
        <?php
        wp_nav_menu(
            array(
                'menu'    => 'footer-menu',
                'container_class' => '',
                'menu_class'      => 'flex',
                'theme_location'  => '',
                'li_class'        => 'p-2 text-gray-500',
                'fallback_cb'     => false,
            )
        );
        ?>
        <div class="text-gray-500 flex items-center">
            &copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?>
        </div>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
