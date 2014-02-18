<div id="comments">
<?php if ( post_password_required() ) : ?>
    <p class="nopassword"><?php _e( 'Los comentarios de esta entrada estan protegidos por contraseña.', 'soyminero' ); ?></p>
/div><!-- #comments -->

    <?php
		/*
		 * Stop the rest of comments.php from being processed,
		 * but don't kill the script entirely -- we still have
		 * to fully load the template.
		 */
		return;
	endif;
?>

<?php
	// You can start editing here -- including this comment!
?>

<?php if ( have_comments() ) : ?>
			<h3 id="comments-title"><?php
			printf( _n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number(), 'soyminero' ),
			number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' );
			?></h3>

<?php /** Navegación entre comentarios mas antiguo y mas nuevos. **/ ?>
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    <div class="navigation">
        <div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Comentarios mas antiguos', 'soyminero' ) ); ?></div>
        <div class="nav-next"><?php next_comments_link( __( 'Nuevos comentarios <span class="meta-nav">&rarr;</span>', 'soyminero' ) ); ?></div>
    </div>
<?php endif; ?>

<ol class="commentlist">
    <?php
					/*
					 * Loop through and list the comments. Tell wp_list_comments()
					 * to use twentyten_comment() to format the comments.
					 * If you want to overload this in a child theme then you can
					 * define twentyten_comment() and that will be used instead.
					 * See twentyten_comment() in twentyten/functions.php for more.
					 */
        wp_list_comments( array( 'callback' => 'soyminero_comment' ) );
    ?>
</ol>

<?php /** Navegación entre comentarios mas antiguo y mas nuevos. **/ ?>
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    <div class="navigation">
        <div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Comentarios mas antiguos', 'soyminero' ) ); ?></div>
        <div class="nav-next"><?php next_comments_link( __( 'Nuevos comentarios <span class="meta-nav">&rarr;</span>', 'soyminero' ) ); ?></div>
    </div>
<?php endif; ?>

	<?php
	/*
	 * If there are no comments and comments are closed, let's leave a little note, shall we?
	 * But we only want the note on posts and pages that had comments in the first place.
	 */
	if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="nocomments"><?php _e( 'Comentarios estan cerrados.' , 'soyminero' ); ?></p>
	<?php endif;  ?>

<?php endif; // end have_comments() ?>

<?php comment_form(); ?>

</div><!-- #comments -->
