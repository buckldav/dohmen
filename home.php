<?php
/**
 * Template name: Home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dohmen
 */

get_header();
?>

	<div id="primary" class="content-area home">
		<main id="main" class="site-main home">

		<section id="hero-title">
			<h1>Hand-Me-Down Experience</h1>
			<p>Sharing Our Experience to Get You Out and About</p>
		</section>
		<h1><a href="/blog/">LATEST POSTS</a></h1>
		<section class="home-feed feed-container">
			<button id="blog-left">&lsaquo;</button>
			<button id="blog-right">&rsaquo;</button>
			<div id="spacer"></div>
		<?php
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$args = array(
					'posts_per_page' => 6,
					'paged'          => $paged
				);
				$category_posts = new WP_Query($args);

				if($category_posts->have_posts()) : 
					while($category_posts->have_posts()) : 
						$category_posts->the_post();
					?>

						<div id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
							<a href="<?php the_permalink(); ?>">
								<?php echo '<div class="thumbnail" style="background-image: url('.(string)get_the_post_thumbnail_url(null, array(600, 400)).');"></div>' ?>
							</a>
							<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
							<a href="<?php the_permalink(); ?>"><?php the_excerpt(__('Continue reading »','example')); ?></a>
						</div><!-- /#post-<?php get_the_ID(); ?> -->    

				<?php
					endwhile;
				?>
				<?php
				else: 
				?>
					No posts.
			<?php
				endif;
				wp_reset_query(); 
			?>
		</section> <!-- #home-feed -->
		<section id="home-about">
			<?php
			if ( have_posts() ) :
				if ( is_home() && ! is_front_page() ) :
					?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
					<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content', get_post_type() );
				endwhile;

				the_posts_navigation();
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
		</section>
		<section id="home-places">
			<h1>OUR PLACES</h1>
			<span class="metadata-marker" style="display: none;" data-region_tag="html-body"></span>    <div id="map"></div>
			<script>
				var map;
				function initMap() {
					map = new google.maps.Map(document.getElementById('map'), {
					center: {lat: 40.554, lng: -111.934},
					zoom: 5,
					// Styles from https://snazzymaps.com/style/252176/nature-sand
					styles: [
								{
									"featureType": "landscape",
									"elementType": "labels.text.fill",
									"stylers": [
										{
											"color": "#2f1f1f"
										}
									]
								},
								{
									"featureType": "landscape",
									"elementType": "labels.icon",
									"stylers": [
										{
											"color": "#3c3c30"
										}
									]
								},
								{
									"featureType": "landscape.man_made",
									"elementType": "geometry.fill",
									"stylers": [
										{
											"color": "#acb884"
										}
									]
								},
								{
									"featureType": "landscape.natural",
									"elementType": "geometry.fill",
									"stylers": [
										{
											"color": "#c4d086"
										}
									]
								},
								{
									"featureType": "landscape.natural.landcover",
									"elementType": "geometry.fill",
									"stylers": [
										{
											"color": "#96a063"
										}
									]
								},
								{
									"featureType": "landscape.natural.landcover",
									"elementType": "labels.text.fill",
									"stylers": [
										{
											"color": "#ffffff"
										}
									]
								},
								{
									"featureType": "landscape.natural.landcover",
									"elementType": "labels.text.stroke",
									"stylers": [
										{
											"color": "#f18e38"
										}
									]
								},
								{
									"featureType": "landscape.natural.terrain",
									"elementType": "geometry.fill",
									"stylers": [
										{
											"color": "#889a4b"
										}
									]
								},
								{
									"featureType": "poi",
									"elementType": "labels.text.fill",
									"stylers": [
										{
											"color": "#f18e38"
										}
									]
								},
								{
									"featureType": "poi",
									"elementType": "labels.text.stroke",
									"stylers": [
										{
											"color": "#ffffff"
										}
									]
								},
								{
									"featureType": "poi.business",
									"elementType": "labels.text.fill",
									"stylers": [
										{
											"color": "#5e544e"
										}
									]
								},
								{
									"featureType": "road",
									"elementType": "geometry.fill",
									"stylers": [
										{
											"color": "#dfdfc5"
										}
									]
								},
								{
									"featureType": "road.arterial",
									"elementType": "geometry.fill",
									"stylers": [
										{
											"color": "#e5f1cb"
										}
									]
								},
								{
									"featureType": "water",
									"elementType": "geometry.fill",
									"stylers": [
										{
											"color": "#c3d2d2"
										}
									]
								}
							]
					});

					// Markers
					// https://developers.google.com/maps/documentation/javascript/examples/infowindow-simple
					var markerInfo = [
						{
							position: {lat: 36.255, lng: -112.7000564},
							title: "Havasu Falls",
							info: "Waterfall on the Havasupai Indian Reservation, known for swimming in a dramatic blue-green pool."
						},
						{
							position: {lat: 38.730, lng: -110.144},
							title: "Arches National Park",
							info: "Scenic area offering camping & a variety of hiking trails with red rock vistas & 2,500 stone arches."
						}
					]

					markerInfo.forEach(m => {
						let content = "<h2>" + m.title + "</h2>";
						content += "<p>" + m.info + "</p>";

						let infowindow = new google.maps.InfoWindow({
							content: content,
							maxWidth: 300
						});

						var marker = new google.maps.Marker({
							position: m.position,
							map: map,
							title: m.title
						});
						marker.addListener('click', function() {
							infowindow.open(map, marker);
						});
					});
				}
			</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap"
			async defer></script>
		</section>
		<section>
		<section id="home-subscribe">
			<div>
				<h1>SUBSCRIBE</h1>
				<p>Want to stay up to date with us? Receive an email whenever we post by subscribing to our <strong><a href="javascript:void(0)" class="modal-link">RSS Feed</a></strong>. If you'd like something more infrequent, subscribe to our monthly <strong><a href="javascript:void(0)" class="modal-link">newsletter</a></strong>.</p>
			</div>
			<div>
				<h1>SOCIAL MEDIA</h1>
				<div class="social-menu"></div>
			</div>
		</section>	
		</section>
		<h1><a href="https://instagram.com/handmedownexperience">INSTAGRAM FEED</a></h1>
		<!-- From Instagram Feed -->
		<?php echo wdi_feed(array('id'=>'1')); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

	<script>
		// Slideshow
		var spacer = document.getElementById("spacer");
		var right = document.getElementById("blog-right");
		var left = document.getElementById("blog-left");
		var margin = 0;

		const moveSlides = (direction, container) => {
			let i = 0;
			var animate = setInterval(() => {
				if (i == 100) {
					right.disabled = false;
 					left.disabled = false;
					clearInterval(animate);	
				} else {
					if (container == 1) {
						margin += (direction * 3.5);
						spacer.style.marginLeft = margin + "px";
 					}
					i++;
				}
			}, 2);
		}
		
		right.onclick = () => {
			if (margin > -350*6 - parseInt(spacer.style.padding) - spacer.offsetWidth + window.innerWidth) {
				right.disabled = true;
				moveSlides(-1, 1);
			}
		};
		left.onclick = () => {
			if (margin != 0) {
				left.disabled = true;	
				moveSlides(1, 1);
			}
		};

		let spacerPadding = () => {
			// Best fit line
			let padding = (8/31 * (window.innerWidth-350) - 152/31);
			if (padding > 24) {
				padding = 24;
			}
			spacer.style.padding = padding + "px";
		}

		window.onload = spacerPadding; 
		window.onresize = spacerPadding;
	</script>
<?php
get_footer();
