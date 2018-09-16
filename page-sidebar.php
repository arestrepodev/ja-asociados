<?php
/**
 * Template Name: Page with Sidebar
 *
 * @package WordPress
 * @subpackage ja-asociados
 * @since ja-asociados 0.0.1
 */
?>

<?php get_header();?>

    <!-- Main -->
    <main class="Main">
        <!-- Slider -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?> <div class="entry"> <?php the_content(); ?> </div><!-- entry --> <?php endwhile; ?> <?php endif; ?>
        <!-- Slider -->
    </main>
    <?php get_sidebar();?>

<?php get_footer();?>
