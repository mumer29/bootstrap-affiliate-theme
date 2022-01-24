<?php
/**
 * Tell WordPress that we have moved default template files to the page-templates folder.
 * Based on code from: https://www.reddit.com/r/Wordpress/comments/ffhjvw/moving_wordpress_theme_template_files_to/
 *
 * Related posts with other solutions:
 * https://stackoverflow.com/questions/60589503/moving-wordpress-theme-template-files-to-subdirectory
 * https://wordpress.stackexchange.com/questions/17385/custom-post-type-templates-from-plugin-folder
 * https://wordpress.stackexchange.com/questions/291725/store-page-template-files-in-a-subfolder
 * https://wordpress.stackexchange.com/questions/312159/how-to-move-page-template-files-like-page-slug-php-to-a-sub-directory/312611#312611
 * 
 * Template hierarchy info: 
 * https://developer.wordpress.org/reference/hooks/type_template_hierarchy/
 * https://core.trac.wordpress.org/browser/tags/5.8.1/src/wp-includes/template.php
 * https://developer.wordpress.org/themes/basics/organizing-theme-files/#page-templates-folder
 *
 * @param array $templates A list of candidates template files.
 * @return string Full path to the template file.
 */
function change_template_path($templates) {

    // The custom sub-directory for page templates in your theme. 
    $custom_sub_dir = 'core/templates';
  
    // Don't use the custom template directory in unexpected cases.
    if(empty($templates) || ! is_array($templates)) {
      return $templates;
    }
  
    $page_template_id = 0;
    $count = count( $templates);
    if($templates[0] === get_page_template_slug()) {
      // if there is a custom template, then our page-{slug}.php template is at the next index
      $page_template_id = 1;
    }
  
    // The last one in $templates is page.php, single.php, or archives.php depending on the type of template hierarchy being read.
    // Paths of all items starting from $page_template_id will get updated
    for($i = $page_template_id; $i < $count ; $i++) {
      $templates[$i] = $custom_sub_dir . '/' . $templates[$i];
    }
  
    return $templates;
  }
  
  // Add filters to override the path for each WP template hierarchy.
  // These are all the template hierarchy filters. You should probably only override the ones you need.
  //add_filter('404_template_hierarchy', 'change_template_path');
  add_filter('archive_template_hierarchy', 'change_template_path');
  //add_filter('attachment_template_hierarchy', 'change_template_path');
  //add_filter('author_template_hierarchy', 'change_template_path');
  //add_filter('category_template_hierarchy', 'change_template_path');
  //add_filter('date_template_hierarchy', 'change_template_path');
  //add_filter('embed_template_hierarchy', 'change_template_path');
  //add_filter('frontpage_template_hierarchy', 'change_template_path');
  //add_filter('home_template_hierarchy', 'change_template_path');
  // If you override the index hierarchy, be sure to add an index.php template in your custom template folder.
  //add_filter('index_template_hierarchy', 'change_template_path'); 
  //add_filter('page_template_hierarchy', 'change_template_path');
  //add_filter('paged_template_hierarchy', 'change_template_path');
  //add_filter('privacypolicy_template_hierarchy', 'change_template_path');
  //add_filter('search_template_hierarchy', 'change_template_path');
  add_filter('single_template_hierarchy', 'change_template_path');
  //add_filter('singular_template_hierarchy', 'change_template_path');
 // add_filter('tag_template_hierarchy', 'change_template_path');
  add_filter('taxonomy_template_hierarchy', 'change_template_path');

 ?>
