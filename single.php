<?php get_header(); ?>
        
    <!-- Main -->
    <main class="Main">
        <!-- Slider -->
            <!-- <p>Espacio para el Slider</p> -->
            <?php
                $page = get_page_by_title( 'page-name' );
                $content = apply_filters('the_content', $page->post_content); 
                echo $content;
            ?>
        <!-- Slider -->
    </main>
<?php get_footer(); ?>


     
