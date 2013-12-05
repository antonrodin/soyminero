<?php get_header(); ?>

<div class="row">
    
    <!-- Custom Page about Bitcoins -->
    <div class="col-lg-6">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
    </div>

    <!-- Video Blog -->
    <div class="col-lg-6">
        <h1>¡Nuestros videos!</h1>
        <?php $loop = new WP_Query(array('post_type' => 'video', 'posts_per_page' => -1));  
            $count =0;  
        ?>
        <?php if($loop) { ?>   
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?> 
                
                <div class="thumbnail">   
                        <a href="<?php the_permalink() ?>">  
                            <?php  
                                if(has_post_thumbnail()){  
                                    the_post_thumbnail('medium');  
                                }  
                            ?>  
                        </a>    
                
                
                  
                    <div class="caption">
                    <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>  
                    
                    <span class="tags">
                        <strong><?php echo __('Etiquetado como: ') ?></strong>
                        <?php  
                            // Fetching the tag names with respect to the post and displaying them  
                            $args = array('orderby' => 'name', 'order' => 'ASC', 'fields' => 'names');  
                            echo implode(wp_get_object_terms( $post->ID, 'tag', $args),', ');  
                        ?>  
                    </span>
                    </div>
                  
                 
                    <?php endwhile; ?>  
                
                </div>
            <?php } ?>  
            <?php wp_reset_query(); ?>
        <!-- End Video Blog -->
    </div>
    
</div>

<?php get_footer(); ?>