<?php
/**
 * Display no results from condition if not have posts.
 * 
 * @package bootstrap-affiliate
 */
?> 
<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php _e('Nothing Found', 'bootstrap-affiliate'); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content row-with-vspace">
		<?php if (is_home() && current_user_can('publish_posts')) { ?> 
			<p><?php 
                        /* translators: %1$s: URL to add new post. */
                        printf(__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'bootstrap-affiliate'), esc_url(admin_url('post-new.php'))); 
                        ?></p>
		<?php } elseif (is_search()) { ?> 
			<?php get_search_form(); ?> 
			<p><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'bootstrap-affiliate'); ?></p>
		<?php } else { ?> 
			<p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'bootstrap-affiliate'); ?></p>
			<?php get_search_form(); ?> 
		<?php } //endif; ?> 
	</div><!-- .page-content -->
</section><!-- .no-results -->