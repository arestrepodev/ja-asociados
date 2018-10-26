<?php get_header(); ?>
    
    <main class="Main">
        <section class="Results">
            <h2 class="Results__title">
                <?php _e( 'Resultados búscados por', 'locale' ); ?>: "<?php the_search_query(); ?>" 
            </h2>
            
            <ul class="Results__list">
            
            <?php query_posts('showposts=20'); ?>
            
            <?php if (have_posts()) :?>
                <li class="Results__list__item">
                    <h3 class="Results__list__title">
                        <a href="<?php echo get_permalink(); ?>" > <?php the_title();  ?></a>
                    </h3>
                    <figure class="Results__list__figure">
                        <?php  the_post_thumbnail() ?>
                    </figure>
                    <p class="Results__list__text">
                        <?php the_excerpt(); ?>
                    </p> 
                    <a href="<?php the_permalink(); ?>" class="Results__list__readmore">Leer Más</a>
                </li>
            <?php else:?>
                <p>No se encontraron artículos</p>
            <?php endif ?>
            </ul>

        </section>
    </main>

<?php get_footer(); ?>