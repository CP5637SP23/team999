<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>
        <?php wp_title(''); ?>
        <?php if(wp_title('', false)) { echo ' :'; } ?>
        <?php bloginfo('name'); ?>
    </title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>

    <script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
    </script>

    <script>
        jQuery(document).ready(function() {
            jQuery('#slider').slippry()
        });
    </script>

</head>

<body <?php body_class(); ?>>

    <!-- header -->
    <header class="header clear" role="banner">
        <div class="navcanvas">
            <div class="wrapper">
                <!-- logo -->
                <div class="logo">
                    <a href="<?php echo home_url(); ?>">
                        <?php the_custom_logo();?>
                    </a>
                </div>
                <!-- /logo -->

                <!-- nav -->
                <nav class="nav" role="navigation">
                    <?php html5blank_nav(); ?>
                </nav>
                <!-- /nav -->
            </div><!-- /.wrapper -->
        </div><!-- /.navcanvas -->


</header> <!-- /header -->
<?php
if(is_front_page()){
	$args = array(
			'post_type'=>'myslider',
			'orderby' => 'menu_order',
			'posts_per_page' => -1

	);
	$slides = new WP_Query($args);

	if($slides -> have_posts() ):

	echo "<section class='slider'>";
		echo "<ul id='slider'>";
		 while ($slides -> have_posts() ): $slides ->the_post();
			echo "<li>";
the_post_thumbnail('slides');
			echo"</li>";
		endwhile;
echo"</ul>";
endif;
echo"</section>";
}?>

        <?php
if (!is_front_page() && get_option('page_for_posts')): 
        ?>

        <?php
	$featured = wp_get_attachment_image_src( get_post_thumbnail_id(get_option('page_for_posts')), 'full' );
	$featured = $featured[0];
?>

        <div class="featuredImage" style="background-image:url(<?php echo $featured ?>);"></div>
        <?php endif; ?>


    
    		<!-- wrapper -->
		<div class="wrapper">