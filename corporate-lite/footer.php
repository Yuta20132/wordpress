<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Corporate Lite
 */
?>
        <div class="copyright-wrapper">
        	<div class="inner">
                <div class="footer-menu">
                        <?php wp_nav_menu(array('theme_location' => 'footer')); ?>
                </div><!-- footer-menu -->
                <div class="copyright">
                    	<p><?php echo esc_html(get_theme_mod('footer_copy',__('Corporate Lite 2022 | All Rights Reserved.','corporate-lite'))); ?> <?php echo corporate_lite_credit_link(); ?></p>               
                </div><!-- copyright --><div class="clear"></div>           
            </div><!-- inner -->
        </div>
    </div>
<?php wp_footer(); ?>

</body>
</html>