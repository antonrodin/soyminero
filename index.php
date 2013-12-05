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
        <?php $loop = new WP_Query(array('post_type' => 'video', 'posts_per_page' => -1));  
            $count =0;  
        ?>
        <?php if($loop) { ?>  
        <ul id="folio" class="grid">  
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <li class="item-<?php the_ID() ?> <?php if(++$count%4==0) echo 'rightmost'?> ">  
            <div class="image">  
                <span>  
                    <a href="<?php the_permalink() ?>">  
                        <?php  
                            if(has_post_thumbnail()){  
                                the_post_thumbnail('thumbnail');  
                            }  
                        ?>  
                    </a>  
                </span>  
                <a href="<?php the_permalink() ?>" class="link">View Details</a>  
            </div>
                <div class="content">  
                    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>  
                    <span class="tags">  
                        <?php  
                            // Fetching the tag names with respect to the post and displaying them  
                            $args = array('orderby' => 'name', 'order' => 'ASC', 'fields' => 'names');  
                            echo implode(wp_get_object_terms( $post->ID, 'tag', $args),', ');  
                        ?>  
                    </span>  
                    <p>  
                        <?php  
                            // Using custom excerpt function to fetch the excerpt  
                            folio_excerpt('folio_excerpt_length','folio_excerpt_more');  
                         ?>  
                    </p>  
                </div>  
                <div class="clear"></div>  
                </li>  
                    <?php endwhile; ?>  
                </ul>  
            <?php } ?>  
            <?php wp_reset_query(); ?>
            <?php
            // Adding Variable Excerpt Length
            function folio_excerpt_length($length) {
                return 80;
            }
            function folio_excerpt_more($more) {
                    return ' ... <span class="excerpt_more"><a href="'.get_permalink().'">Read more</a></span>';
            }
            function folio_excerpt($length_callback='', $more_callback='') {
                global $post;
                if(function_exists($length_callback)){
                    add_filter('excerpt_length', $length_callback);
                }
                if(function_exists($more_callback)){
                    add_filter('excerpt_more', $more_callback);
                }
                $output = get_the_excerpt();
                $output = apply_filters('wptexturize', $output);
                $output = apply_filters('convert_chars', $output);
                $output = '<p>'.$output.'</p>';
                echo $output;
            }
            ?>
        <!-- End Video Blog -->
    </div>
    
</div>

<?php get_footer(); ?>