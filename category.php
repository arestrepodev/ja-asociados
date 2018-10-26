<?php get_header(); ?>
        
    <!-- Main -->
    <main class="Main">
			<h2 class="Category__title">Categoria: <?php single_cat_title( $prefix = '', $display = true ); ?></h2>
                <!-- Masonry Layout -->
                <div class="Masonry">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="Masonry__item"> 
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs'); }?>
                        <h3 class="Masonry__item__title">
                            <a href="<?php the_permalink();?>" class="Masonry__item__link"><?php the_title(); ?></a>
                        </h3>
                        <p class="Masonry__item__date">
                            Fecha: <?php the_date();?> -
                            Autor: <?php the_author(); ?>
                        </p>
                        <p class="Masonry__item__text">
                            <?php the_excerpt(); ?>
                        </p>
                    </div>
                    <!-- entry --> 
                    <?php endwhile; else: ?>
                <div>
                <!-- /Masonry Layout -->
			    <p class="">No se encontraron artículos relacionados con la categoria.</p>
			<?php endif; ?>
    </main>

<?php get_footer(); ?>