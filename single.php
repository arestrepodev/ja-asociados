<?php get_header(); ?>
    
    <!-- Main -->
    <main class="Main Entries">
            <!-- Slider -->
            <div class="SliderPublication">
                <?php echo('[rev_slider_vc alias="banner_publicaciones"]');?>
            </div>
            <!-- /Slider -->
            <!-- Entrada -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="Publication">
               
                <hgroup class="Publication__title-Group">
                    <h1 class="Publication__title">
                       Publicaciones
                    </h1>
                    <h2 class="Publication__subtitle">
                        <a class="Publication__subtitle__link" href="<?php the_permalink(); ?>">
                           <?php the_title();?>
                        </a>
                    </h2>
                </hgroup>
                <div class="Publication__data">
                    <p class="Publication__data__text">
                        Por: <?php the_author(); ?> |
                        <?php the_date(); ?> | 
                    </p class="Publication__data__text">
                    <p>
                         Categoria: <?php the_category(); ?> |
                    </p>
                    <p class="Publication__data__text">    
                        <?php get_comments_number(); ?> Comentarios |
                    </p>
                </div>
                <!-- Imagen Destacada -->
                 <div class="Thumb">
                    <a href="<?php the_permalink();?>">
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs'); }?>
                    </a>
                </div>
                <div class="Publication__content">
                    <?php the_content(); ?>
                </div>
                <?php endwhile; else: ?>
                <h2>No se encontraron artículos.</h2>
                <?php endif;?>

                <div class="Comments">
                    <h3>Comentarios</h3>
                    <div id="CommentBox">
                        <?php 
                            // If comments are open or we have at least one comment, load up the comment template.
                            comment_form();
                        ?>
                    </div>
                </div>
            </article>
            <article class="SidebarArticle">
                <?php get_sidebar(); ?>
            </article>
    </main>
<?php get_footer(); ?>


     
