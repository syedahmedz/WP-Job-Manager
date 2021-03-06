<div class="job-manager-uploaded-file">
	<?php
	$extension = substr( strrchr( $value, '.' ), 1 );

	if ( 3 !== strlen( $extension ) || in_array( substr( strrchr( $value, '.' ), 1 ), array( 'jpg', 'gif', 'png', 'jpeg', 'jpe' ) ) ) : ?>
		<span class="job-manager-uploaded-file-preview"><img src="<?php echo esc_url( $value ); ?>" /> <a class="job-manager-remove-uploaded-file" href="#">[<?php _e( 'remove', 'wp-job-manager' ); ?>]</a></span>
	<?php else : ?>
		<span class="job-manager-uploaded-file-name"><code><?php echo esc_html( basename( $value ) ); ?> <a class="job-manager-remove-uploaded-file" href="#">[<?php _e( 'remove', 'wp-job-manager' ); ?>]</a></code></span>
	<?php endif; ?>

	<input type="hidden" class="input-text" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( $value ); ?>" />
</div>