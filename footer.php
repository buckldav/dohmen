<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dohmen
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div>
				<h4>ABOUT US</h4>
				<div class="footer-links">
					<a href="/about/">ABOUT</a>
					<a href="/contact/">CONTACT</a>
				</div>
			</div>
			<div id="footer-center">
				<h3>Hand-Me-Down Experience</h3>
				<p>
				Hi! We’re Kenon and Savanna – a husband and wife travel team! We hope you find what you're looking for here. Consider joining us in our adventures by subscribing to our newsletter.
				</p>
			</div>
			<div>
				<h4>SUBSCRIBE</h4>
				<div class="footer-links">					
					<a href='javascript:void(0);' class="modal-link">RSS FEED</a>
					<a href='javascript:void(0);' class="modal-link">NEWSLETTER</a>
				</div>
			</div>			
		</div><!-- .site-info -->
		<div class="footer-credits">
			<p id="copyright">Copyright 2019 <a href="https://handmedownexperience.com">Hand-Me-Down Experience</a></p>
			<p>Site Developed by <a href="https://www.davidjaybuckley.com/">David Buckley</a></p>
			<p>Powered by WordPress</p>
			<p><a href="/privacy-policy/">Privacy Policy</a></p>
		</div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
	// Social menus
	var menus = Array.from(document.getElementsByClassName("social-menu"));
	menus.forEach(menu => {
		let facebook = document.createElement("a");
		facebook.href = "https://www.facebook.com/Hand-Me-Down-Experience-Blog-149008272563593/?view_public_for=149008272563593";
		facebook.innerHTML = '<svg enable-background="new 0 0 32 32" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Flat_copy"><g><path class="social-back" d="M16,0C7.163,0,0,7.163,0,16c0,8.836,7.163,16,16,16s16-7.164,16-16C32,7.163,24.837,0,16,0z" fill="#3e3e3e"/></g><path class="social-text" d="M13.69,24.903h3.679v-8.904h2.454l0.325-3.068h-2.779l0.004-1.536c0-0.8,0.076-1.229,1.224-1.229h1.534   V7.097h-2.455c-2.949,0-3.986,1.489-3.986,3.992v1.842h-1.838v3.069h1.838V24.903z" fill="#FFFFFF"/></g></svg>';
		let instagram = document.createElement("a");
		instagram.href = "https://www.instagram.com/handmedownexperience/";
		instagram.innerHTML = '<svg enable-background="new 0 0 32 32" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Flat_copy"><g><path class="social-back" d="M16,0C7.163,0,0,7.163,0,16c0,8.836,7.163,16,16,16s16-7.164,16-16C32,7.163,24.837,0,16,0z" fill="#3e3e3e"/></g><path class="social-text" d="M22.057,7.93H9.943c-1.14,0-2.019,0.879-2.019,2.019v12.113c0,1.14,0.879,2.019,2.019,2.019h12.113   c1.14,0,2.019-0.879,2.019-2.019V9.949C24.076,8.808,23.196,7.93,22.057,7.93z M16.012,12.833c1.791,0,3.243,1.407,3.243,3.142   c0,1.735-1.452,3.142-3.243,3.142c-1.79,0-3.242-1.408-3.242-3.142C12.77,14.239,14.222,12.833,16.012,12.833z M22.057,21.557   c0,0.354-0.151,0.505-0.505,0.505H10.448c-0.353,0-0.505-0.151-0.505-0.505v-7.066l1.258,0.274   c-0.135,0.439-0.208,0.903-0.208,1.385c0,2.684,2.248,4.863,5.018,4.863c2.772,0,5.019-2.178,5.019-4.863   c0-0.482-0.073-0.946-0.208-1.385l1.234-0.274V21.557z M22.057,12.472c0,0.279-0.226,0.505-0.505,0.505h-2.019   c-0.279,0-0.505-0.226-0.505-0.505v-2.019c0-0.279,0.226-0.505,0.505-0.505h2.019c0.279,0,0.505,0.226,0.505,0.505V12.472z" fill="#FFFFFF"/></g></svg>';
		let pinterest = document.createElement("a");
		pinterest.href = "https://www.pinterest.com/handmedownexperience/?eq=hand&etslf=6733";
		pinterest.innerHTML = '<svg enable-background="new 0 0 32 32" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Flat_copy"><g><path class="social-back" d="M16,0.016c-8.837,0-16,7.163-16,16c0,8.836,7.163,16,16,16s16-7.164,16-16C32,7.179,24.837,0.016,16,0.016    z" fill="#3e3e3e"/></g><path class="social-text" d="M24.007,12.481c0,4.658-2.59,8.139-6.407,8.139c-1.283,0-2.488-0.693-2.901-1.481   c0,0-0.69,2.736-0.835,3.264c-0.514,1.866-2.027,3.733-2.144,3.886c-0.082,0.106-0.263,0.073-0.282-0.068   c-0.033-0.238-0.418-2.592,0.036-4.513c0.228-0.964,1.527-6.471,1.527-6.471s-0.379-0.758-0.379-1.879   c0-1.76,1.02-3.074,2.29-3.074c1.08,0,1.601,0.81,1.601,1.782c0,1.086-0.691,2.71-1.048,4.214c-0.298,1.26,0.632,2.288,1.874,2.288   c2.25,0,3.765-2.89,3.765-6.314c0-2.602-1.752-4.551-4.941-4.551c-3.601,0-5.846,2.686-5.846,5.687   c0,1.035,0.306,1.765,0.784,2.329c0.219,0.26,0.25,0.364,0.17,0.662c-0.058,0.219-0.187,0.744-0.243,0.953   c-0.079,0.301-0.323,0.408-0.594,0.297c-1.659-0.677-2.432-2.495-2.432-4.537c0-3.373,2.845-7.418,8.487-7.418   C21.024,5.679,24.007,8.959,24.007,12.481z" fill="#FFFFFF"/></g></svg>';

		menu.appendChild(facebook);
		menu.appendChild(instagram);
		menu.appendChild(pinterest);

		menu.childNodes.forEach(link => {
			link.childNodes.forEach(svg => {
				let paths = svg.getElementsByTagName("path");
				let background = paths[0];
				let text = paths[1];
				svg.addEventListener("mouseenter", () => {
					background.style.fill = "#ffffff";
					text.style.fill = "#3e3e3e";
				})
				svg.addEventListener("mouseleave", () => {
					background.style.fill = "#3e3e3e";
					text.style.fill = "#ffffff";
				})
			});
		});
	});
</script>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
	<span class="close">&times;</span>
	  <section id="bloomwidget-2" class="widget widget_bloomwidget"><h2 class="widget-title">Subscribe To Our Newsletter</h2>
				<div class="et_bloom_widget_content et_bloom_make_form_visible et_bloom_optin et_bloom_optin_2">
					<div class="et_bloom_form_container with_edge wedge_edge et_bloom_rounded et_bloom_form_text_dark">
						
			<div class="et_bloom_form_container_wrapper clearfix">
				<div class="et_bloom_header_outer">
					<div class="et_bloom_form_header et_bloom_header_text_light">
						
						<div class="et_bloom_form_text">
						<p>Join our mailing list to receive the latest news and updates from our team.</p>
					</div>
						
					</div>
				</div>
				<div class="et_bloom_form_content et_bloom_2_fields et_bloom_bottom_stacked">
					<form method="post" class="clearfix">
						<p class="et_bloom_popup_input et_bloom_subscribe_name">
								<input placeholder="Name" maxlength="50">
							</p>
						<p class="et_bloom_popup_input et_bloom_subscribe_email">
							<input placeholder="Email" class="et_bloom_warn_field">
						</p>

						<button data-optin_id="optin_2" data-service="mailchimp" data-list_id="9639a52864" data-page_id="3" data-account="handmedownexperience" data-disable_dbl_optin="" class="et_bloom_submit_subscription">
							<span class="et_bloom_subscribe_loader"></span>
							<span class="et_bloom_button_text et_bloom_button_text_color_light">SUBSCRIBE!</span>
						</button>
					</form>
					<div class="et_bloom_success_container">
						<span class="et_bloom_success_checkmark"></span>
					</div>
					<h2 class="et_bloom_success_message">You have Successfully Subscribed!</h2>
					
				</div>
			</div>
			<span class="et_bloom_close_button"></span>
					</div>
				</div></section>
    <p id="modal-text"></p>
  </div>

</div>
<script>
	// Get the modal
	var modal = document.getElementById('myModal');

	// Get the links that open the modal
	var links = Array.from(document.getElementsByClassName("modal-link"));
	links.forEach(link => {
		// When the user clicks the button, open the modal 
		link.addEventListener("click", (e) => {
			let content = document.getElementById("modal-text");
			if (e.target.innerHTML.toLowerCase().includes("rss")) {
				content.innerHTML = "Subscribe to our RSS Feed";
			} else if (e.target.innerHTML.toLowerCase().includes("newsletter")) {
				content.innerHTML = "Subscribe to our newsletter";
			}

			modal.style.display = "block";
		});
	});

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
		modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>

</body>
</html>
