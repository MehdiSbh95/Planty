<?php
/**
 * Template Name: template Commander
 */
get_header();
?>

<?php
get_template_part( 'entry' );
comments_template();

get_template_part( 'nav', 'below' );
get_footer();
?>
