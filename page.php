<?php get_header(); ?>
        
    <!-- Main -->
    <main class="Main">
        <!-- Slider -->
            <?php
                $id = 0; // add the ID of the page where the zero is
                $p = get_page($id);
                $t = $p->post_title;
                echo '<h3>'.apply_filters('post_title', $t).'</h3>'; // the title is here wrapped with h3
                echo apply_filters('the_content', $p->post_content);
            ?>
        <!-- Slider -->
    </main>
    <?php get_sidebar(); ?>

<?php get_footer(); ?>


     
