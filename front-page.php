<?php get_header(); ?>
        
    <!-- Main -->
    <main class="Main">
        <!-- Slider -->
            <?php
                $page = get_page_by_title( 'page-name' );
                $content = apply_filters('the_content', $page->post_content); 
                echo $content;
            ?>
            <?php include (TEMPLATEPATH. '/example.php')?>
        <!-- Slider -->
    </main>
    <?php get_sidebar(); ?>

<?php get_footer(); ?>


     
