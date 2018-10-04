   <!-- Footer -->
        <footer class="Footer">
            <!-- WidgetFooter -->
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('FooterImage')) : endif; ?>
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer1')) : endif; ?>
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer2')) : endif; ?>
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer3')) : endif; ?>
            <!-- Widget Copyright -->
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Copyright')) : endif;?>
        </footer>



    <!-- Scripts -->
    <script src="<?php bloginfo('template_url');?>/js/app.js"></script>
    <?php wp_footer();?>
</body>
</html>
