<div id="footer1" class="clearfix">

	<?php if ( is_active_sidebar( 'footer1' ) ) : ?>

		<?php dynamic_sidebar( 'footer1' ); ?>

	<?php else : ?>

		<!-- This content shows up if there are no widgets defined in the backend. -->
		
		<div class="alert help">
			<p><?php _e("Please activate some Widgets.", "bonestheme");  ?></p>
		</div>

	<?php endif; ?>

</div>