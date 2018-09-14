<?php get_header(); ?>
        
    <!-- Main -->
    <main class="Main">
        <!-- Content -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?> <div class="entry"> <?php the_content(); ?> </div><!-- entry --> <?php endwhile; ?> <?php endif; ?>
        <!-- Content -->
    </main>
    <?php get_sidebar(); ?>

<?php get_footer(); ?>


     
