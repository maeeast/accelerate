<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
			<aside class="sidebar">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
			<?php endif; ?>

		<div class="post-author">
					<div class="avatar"><img src="<?php echo home_url(); ?>/wp-content/uploads/2016/04/avatar.jpg"></div>
					<div class="intro-text">I’m Emily, the Marketing Manager at <a href="<?php echo home_url(); ?>">Accelereate</a> as well as a client liason. This is my blog full of inspiration.</div>
				</div>

				<div class="widget widget_search-form">
					<form role="search" method="get" class="search-form" action="">
						<input type="text" class="input" placeholder="search" value="" name="s">
						<input type="button" class="input-btn" value="">
					</form>
				</div>

				<div class="widget widget_categories">
					<h3 class="widget-title">Categories</h3>
					<ul>
						<li><a href="">Books </a></li>
						<li><a href="">My Notes</a></li>
						<li><a href="">Photos</a></li>
						<li><a href="">Videos</a></li>
						<li><a href="">Quotes</a></li>
					</ul>
				</div>

				<div class="widget widget_archives">
					<h3 class="widget-title">Archives</h3>
					<ul>
						<li><a href="">September 2014</a></li>
						<li><a href="">August 2014</a></li>
						<li><a href="">July 2014</a></li>
						<li><a href="">June 2014</a></li>
						<li><a href="">May 2014</a></li>
					</ul>
				</div>



</aside>
