<?php
/** 
 * The archive template.
 * 
 * Use for display author archive, category, custom post archive, custom taxonomy archive, tag, date archive.<br>
 * These archive can override by each archive file name such as category will be override by category.php.<br>
 * To learn more, please read on this link. https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package bootstrap-affiliate
 */


// begins template. -------------------------------------------------------------------------
get_header();
// get_sidebar();
$taxonomy_id=get_queried_object()->term_id;
$taxonomy_slug="price";
?> 
                <main id="main" class="col-12 site-main" role="main">
                    <header class="page-header">
                        <?php
                        the_archive_title('<h1 class="page-title">', '</h1>');
                        the_archive_description('<div class="taxonomy-description">', '</div>');
                        ?>
                    </header><!-- .page-header -->

                    <?php 
                    if($taxonomy_id && $taxonomy_slug){
                      echo do_shortcode('[aff_products taxonomy_slug="'.$taxonomy_slug.'" taxonomy_id="'.$taxonomy_id.'"]');
                    }
                    ?> 
                </main>
<?php
// get_sidebar('right');
get_footer();
