<?php
/**
 * The template for displaying content in 'Quick Preview' post section.
 * @since 1.6
 */
?>

<li <?php post_class() ?>>
	<?php if ( get_post_format() !== false ) : ?>
	<span class="entry-format" style="float: right"><?php echo get_post_format_string( get_post_format() ) ?></span>
	<?php endif ?>
	<h3 class="entry-title">
		<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title() ?></a>
	</h3>
	
	<div class="entry-summary">
		<div class="entry-info">
			<abbr class="published"><?php printf( __( 'Posted %s', 'ar2' ), ar2_posted_on( false ) ) ?></abbr>
		</div>
		<?php echo get_the_excerpt() ?>
		<p><a class="more-link" href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'ar2'), get_the_title() ) ?>">
		<?php _e('阅读全文', 'ar2') ?>
		</a></p>
	</div>	
</li>