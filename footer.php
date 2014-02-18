	<footer id="main-footer">
		<?php get_sidebar( 'footer' ); ?>

		<div id="footer-bottom">
			<div class="container clearfix">
				<ul id="et-social-icons">
				<?php if ( 'on' === et_get_option( 'divi_show_facebook_icon', 'on' ) ) : ?>
					<li class="et-social-icon et-social-facebook">
						<a href="<?php echo esc_url( et_get_option( 'divi_facebook_url', '#' ) ); ?>">
							<span><?php esc_html_e( 'Facebook', 'Divi' ); ?></span>
						</a>
					</li>
				<?php endif; ?>
				<?php if ( 'on' === et_get_option( 'divi_show_twitter_icon', 'on' ) ) : ?>
					<li class="et-social-icon et-social-twitter">
						<a href="<?php echo esc_url( et_get_option( 'divi_twitter_url', '#' ) ); ?>">
							<span><?php esc_html_e( 'Twitter', 'Divi' ); ?></span>
						</a>
					</li>
				<?php endif; ?>
				<?php if ( 'on' === et_get_option( 'divi_show_google_icon', 'on' ) ) : ?>
					<li class="et-social-icon et-social-google">
						<a href="<?php echo esc_url( et_get_option( 'divi_google_url', '#' ) ); ?>">
							<span><?php esc_html_e( 'Google', 'Divi' ); ?></span>
						</a>
					</li>
				<?php endif; ?>
				<?php if ( 'on' === et_get_option( 'divi_show_rss_icon', 'on' ) ) : ?>
				<?php
					$et_rss_url = '' !== et_get_option( 'divi_rss_url' )
						? et_get_option( 'divi_rss_url' )
						: get_bloginfo( 'comments_rss2_url' );
				?>
					<li class="et-social-icon et-social-rss">
						<a href="<?php echo esc_url( $et_rss_url ); ?>">
							<span><?php esc_html_e( 'RSS', 'Divi' ); ?></span>
						</a>
					</li>
				<?php endif; ?>
				</ul>

				<p id="footer-info"><?php printf( __( 'Part of the %1$s | Implemented by %2$s', 'Divi' ), '<a href="http://www.ujuzi.org" title="Ujuzi" target="_blank">Ujuzi Initiative</a>', '<a href="http://www.codeforafrica.org" title="Code for Africa" target="_blank">Code for Africa</a>' ); ?></p>
			</div>	<!-- .container -->
		</div>
	</footer> <!-- #main-footer -->

	<?php wp_footer(); ?>
</body>
</html>