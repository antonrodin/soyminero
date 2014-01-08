<?php 
    /* 
    * Template Name: Home 
    */

get_header(); ?>

<!-- Begin featured section -->
<aside id="featured" class="clearfix margin-top-20">
        <div class="container">
            <figure class="pull-left margin-top-40">
                <img src="<?php echo get_template_directory_uri(); ?>/img/featured.png" alt="Somos mineros" />
            </figure>
            <div class="margin-top-60">
                <h1 class="text-left">Soy Minero</h1>
                <h2 class="text-left">Centro minero de Vallekas, 24 horas al dia minamos <i class="fa fa-btc"></i>itcoin con pico y pala.</h2>
            </div>
            <button type="button" class="btn btn-default margin-top-20"><?php _e('Quieres ser minero?', 'soyminero'); ?></button>
        </div>
</aside> <!-- !End featured section -->



<div class="container">
<div class="row">
    <div class="col-lg-6">
    <?php /* The loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header>
                
                <h1 class="titulo-principal text-center"><?php the_title(); ?></h1>
                
                <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<div class="entry-thumbnail">
                    <?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
		</div>
		<?php endif; ?>
                
            </header><!-- page header -->
            
            <div>
                <p>&nbsp;</p>
            </div>

            <div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'soyminero' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
            </div><!-- end content -->

            <footer>
                <?php edit_post_link( __( 'Edit', 'soyminero' ), '<span class="edit-link">', '</span>' ); ?>
            </footer><!-- footer comments -->
        </article><!-- #page -->
    <?php endwhile; ?>

    </div>
    <div class="col-lg-6">
            

        <!-- Start Video Blog -->
        <h1 class="titulo-principal text-center"><?php _e('Nuestros videos sobre mineria:', 'soyminero'); ?></h1>
        <?php $loop = new WP_Query(array('post_type' => 'video', 'posts_per_page' => -1));  
            $count =0;  
        ?>
        <?php if($loop) { ?>   
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?> 
                
                <div class="soyminero-img-caption margin-top-40">
                    <div class="soyminero-img-caption-time">
                         <?php the_time('F jS, Y') ?>
                    </div>
                    <div class="soyminero-img-caption-youtube">
                        <p><a href="<?php the_permalink(); ?>"><i class="fa fa-youtube-play fa-4x"></i></a></p>
                    </div>
                        <a href="<?php the_permalink(); ?>">
                            <?php  
                                if(has_post_thumbnail()){  
                                    the_post_thumbnail('large', array('class' => 'img-responsive'));
                                } else {
                                    echo '<img src="holder.js/800x400" alt="No image" >';
                                }
                            ?>  
                        </a>
                     <script>
                        $(function() {
                            $(".soyminero-img-caption-text").fadeTo('slow', 0.85);
                        });
                     </script>
                     <div class="soyminero-img-caption-text">
                         <h3 class="text-center"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                     </div>
                 </div>
                 <div class="text-right"><p>&nbsp;</p></div>
                        
                        <?php 
                            global $more;
                            $more = 0;
                            the_content("Ver el video...");
                        ?> 

                        
            <?php endwhile; ?>  
                
                
        <?php } ?>  
        <?php wp_reset_query(); ?>
        <!-- End Video Blog -->
        
        <!-- Start Blog -->
            <h1 class="titulo-principal text-center"><?php _e('Noticias de mineriade Bitcoin:', 'soyminero'); ?></h1>
            <?php $loop = new WP_Query(array('posts_per_page' => 5));  
                $count =0;  
            ?>
            <?php if($loop) { ?>   
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?> 
                  
                 <div class="soyminero-img-caption margin-top-40">
                     <div class="soyminero-img-caption-time">
                         <?php the_time('F jS, Y') ?>
                     </div>
                        <a href="<?php the_permalink() ?>">  
                            <?php  
                                if(has_post_thumbnail()){  
                                    the_post_thumbnail('large', array('class' => 'img-responsive'));
                                } else {
                                    echo '<img src="holder.js/800x400" alt="No image" >';
                                }
                            ?>  
                        </a>
                     <script>
                        $(function() {
                            $(".soyminero-img-caption-text").fadeTo('slow', 0.85);
                        });
                     </script>
                     <div class="soyminero-img-caption-text">
                         <h3 class="text-center"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                     </div>
                 </div>
                 <div class="text-right"><small class="tags">
                            <strong><?php echo __('Archivado en: ', 'soyminero') ?> <?php the_category(', '); ?></strong>
                            <?php
                                echo get_the_tag_list('<strong>Etiquetado como:</strong> ',', ','');
                            ?> 
                 </small></div>
                        
                        <?php 
                            global $more;
                            $more = 0;
                            the_content("Continua leyendo...");
                        ?> 

                        
            <?php endwhile; ?>  
                
                
        <?php } ?>  
        <?php wp_reset_query(); ?>
        <!-- End Blog -->

    </div>
</div>

</div><!-- end container -->
 
<?php get_footer(); ?>