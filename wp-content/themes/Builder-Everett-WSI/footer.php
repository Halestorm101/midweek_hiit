<?php


function render_footer() {
	
?>
	<div class="alignleft">
		<strong><?php bloginfo( 'name' ); ?></strong><br />
		<?php printf( __( 'Copyright &copy; %s All Rights Reserved', 'it-l10n-Builder-Everett' ), date( 'Y' ) ); ?>
	</div>
	<div class="alignright">
		Developed by <a href="http://www.wsicorporate.com" target="_blank">WSI</a> <a href="http://www.wsiebiz.com" target="_blank" style="text-decoration:underline;">Digital Marketing</a><br />
		Philippians 4:13
	</div>
	
	<?php wp_footer(); ?>

<?php
	
}

add_action( 'builder_layout_engine_render_footer', 'render_footer' );
