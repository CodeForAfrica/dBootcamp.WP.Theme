<?php
	if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>
		<!-- dBootcamp custom footer -->
		<?php
			// Footer page defined
			if ( !get_option('dbootcamp_footer_pg') ) {
				
			} else {
				$page_id = (int)substr(get_option('dbootcamp_footer_pg'), 5);
				$dbootcamp_footer_pg = get_post( $page_id );
				echo apply_filters( 'the_content', $dbootcamp_footer_pg->post_content );
			}
		?>

		<footer id="main-footer">
			<?php get_sidebar( 'footer' ); ?>
		
			<?php
				if ( has_nav_menu( 'footer-menu' ) ) : ?>
			
				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->
			
			<?php endif; ?>
		
			<div id="footer-bottom">
				<div class="container clearfix">
					<?php
						if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
							get_template_part( 'includes/social_icons', 'footer' );
						}
					?>
				
					<p id="footer-info"><?php printf( __( 'Part of the %1$s | Implemented by %2$s', 'Divi' ), '<a href="http://www.ujuzi.org" title="Ujuzi" target="_blank">Ujuzi Initiative</a>', '<a href="http://www.codeforafrica.org" title="Code for Africa" target="_blank">Code for Africa</a>' ); ?></p>
				</div>	<!-- .container -->
			</div>
		</footer> <!-- #main-footer -->
	</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->
	
	<?php wp_footer(); ?>
</body>
</html>
