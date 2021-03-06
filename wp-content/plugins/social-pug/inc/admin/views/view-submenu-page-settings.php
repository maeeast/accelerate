<?php dpsp_admin_header(); ?>

<div class="dpsp-page-wrapper dpsp-page-settings wrap">

	<h1><?php echo __( 'Settings', 'social-pug' ); ?></h1>

	<form method="post" action="options.php">
		
		<?php
		 	$dpsp_settings = get_option( 'dpsp_settings', 'not_set' );
			settings_fields( 'dpsp_settings' );
		?>

		<!-- General Settings Tab Content -->
		<div id="dpsp-tab-general-settings">

			<!-- Misc -->
			<div class="dpsp-section">
				<h3 class="dpsp-section-title"><?php _e( 'Misc', 'social-pug' ); ?></h3>

				<?php dpsp_settings_field( 'checkbox', 'dpsp_settings[disable_meta_tags]', ( isset($dpsp_settings['disable_meta_tags']) ? $dpsp_settings['disable_meta_tags'] : '' ), __( 'Disable Open Graph Meta Tags', 'social-pug' ), array('yes') ); ?>
			</div>

		</div><!-- End of General Settings Tab Content -->

		<input type="hidden" name="action" value="update" />
		<input type="hidden" name="dpsp_settings[always_update]" value="<?php echo ( isset( $dpsp_settings['always_update'] ) && $dpsp_settings['always_update'] == 1 ? 0 : 1 ); ?>" />
		<p class="submit"><input type="submit" class="button-primary" value="<?php _e( 'Save Changes' ); ?>" /></p>
	</form>
</div>