<?php 
    /* 
    * Template Name: Videos
    * Custom template page for show Videos in some kind of blog structure.
    */

    get_header(); 
?>

<div class="row">
  
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
                                } else {
                                    echo '<img src="holder.js/300x300" alt="No image" >';
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
                  
                    </div><!-- End -->
            <?php endwhile; ?>  
                
                
        <?php } ?>  
        <?php wp_reset_query(); ?>
        <!-- End Video Blog -->
    </div>
    <div class="col-lg-6">
        
    </div>
    
</div>

<?php get_footer(); ?>