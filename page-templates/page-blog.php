<?php
/**
 * Template Name: Blog
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dohmen
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
			<section class="feed-container">
			<h1><a href="/blog/">Blog</a></h1>
			<h5>All Posts</h5>
			<?php
				$args = array(
					'posts_per_page' => 4,
					'paged'			 => (int)get_query_var( 'pg' ),
				);
				$blog_posts = new WP_Query($args);

				if($blog_posts->have_posts()) : 
					while($blog_posts->have_posts()) : 
						$blog_posts->the_post();
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
				<div class="pagination">
					<?php 
					if(!empty($blog_posts) && $blog_posts->max_num_pages > 1) {
						$total = $blog_posts->max_num_pages;
						$page = $_GET['pg'];
						if ($page == '') {
							$page = 1;
						}

						for($i = 1; $i < $total +1; $i++) {
							if($i == $page) {
								if($i == 1) {
									echo '<a class="page-numbers current" href="/blog/">'.$i.'</a>';
								} else {
									echo '<a class="page-numbers current" href="/blog/?pg='.$i.'">'.$i.'</a>';
								}
							} else if($i == 1) {
							    echo '<a class="page-numbers" href="/blog/">'.$i.'</a>';
							} else {
								echo '<a class="page-numbers" href="/blog/?pg='.$i.'">'.$i.'</a>';
							}
						}   
					} 
					?>
				</div>
				<?php	
				else: 
				?>
					No posts.
			<?php
				endif;
				wp_reset_postdata();
			?>
			</section><!-- .feed-container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();