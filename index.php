<?php /* Template Name: Layout */ ?>
<?php get_header() ?>

<?php
	require get_template_directory() . '/templates/'.$post->post_name.'.php';
?>
<?php get_footer() ?>