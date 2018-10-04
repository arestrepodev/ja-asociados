   <!-- Footer -->
        <footer class="Footer">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('FooterImage')) : endif; ?>
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer1')) : endif; ?>
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer2')) : endif; ?>
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer3')) : endif; ?>
            <!-- WidgetFooter -->
            <!-- <div class="WidgetFooter">
                <img src="<?php bloginfo('template_url')?>/img/logo-blanco-ja.png" alt="" class="WidgetFooter__logo">
                <h3 class="WidgetFooter__title">Oficina en Bogotá:</h3>
                <ul class="WidgetFooter__list">
                    <li class="WidgetFooter__item">
                        <a href="#" class="WidgetFooter__link">Carrera 26b # 4A - 4 Torre KLM 7 piso</a>
                    </li>
                    <li class="WidgetFooter__item">
                        <a href="#" class="WidgetFooter__link">Conmutador: +57 1 7477720 - Móvil: +57 320 851 83 83</a>
                    </li>
                    <li class="WidgetFooter__item">
                        <a href="#" class="WidgetFooter__link">info@ja-a.co</a>
                    </li>
                </ul>
            </div> -->
            <!-- WidgetFooter -->
            <!-- <div class="WidgetFooter">
                <h3 class="WidgetFooter__title">Oficina en Medellín:</h3>
                <ul class="WidgetFooter__list">
                    <li class="WidgetFooter__item">
                        <a href="#" class="WidgetFooter__link">Carrera 40 # 20 - 114 Oficina 826 Centro Empresarial</a>
                    </li>
                    <li class="WidgetFooter__item">
                        <a href="#" class="WidgetFooter__link">Ciudad de Río - Torre 2</a>
                    </li>
                    <li class="WidgetFooter__item">
                        <a href="#" class="WidgetFooter__link">Conmutador: +57 4 2353526</a>
                    </li>
                    <li class="WidgetFooter__item">
                        <a href="#" class="WidgetFooter__link">Oficina: 131231231231</a>
                    </li>
                </ul>
            </div> -->
            <!-- WidgetFooter -->
            <!-- <div class="WidgetFooterSocial">
                <h3 class="WidgetFooterSocial__title">Oficinas</h3>
                <ul class="WidgetFooterSocial__list">
                    <li class="WidgetFooterSocial__item">
                        <a href="#" class="WidgetFooterSocial__link">
                            <img class="WidgetFooterSocial__img" class="WidgetFooterSocial__img" src="img/icons/facebook.svg" alt="">
                        </a>
                    </li>
                    <li class="WidgetFooterSocial__item">
                        <a href="#" class="WidgetFooterSocial__link">
                            <img class="WidgetFooterSocial__img ml-1" class="WidgetFooterSocial__img" src="img/icons/twitter.svg" alt="">
                        </a>
                    </li>
                    <li class="WidgetFooterSocial__item">
                        <a href="#" class="WidgetFooterSocial__link">
                            <img class="WidgetFooterSocial__img ml-1" class="WidgetFooterSocial__img" src="img/icons/linkedin.svg" alt="">
                        </a>
                    </li>
                    <li class="WidgetFooterSocial__item">
                        <a href="#" class="WidgetFooterSocial__link">
                            <img class="WidgetFooterSocial__img ml-1" class="WidgetFooterSocial__img" src="img/icons/youtube.svg" alt="">
                        </a>
                    </li>
                </ul> -->
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Copyright')) : endif;?>
                <!-- <p class="Copyright">&copy; 2018* - Todos los derechos reservados.</p> -->
            </div>
        </footer>



    <!-- Scripts -->
    <script src="<?php bloginfo('template_url');?>/js/app.js"></script>
    <?php wp_footer();?>
</body>
</html>
