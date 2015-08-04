<div class="top-menu">
<?php  
if ( is_user_logged_in() ) {
echo '<a href="'. wp_logout_url() .'">Logout</a>';
} else { ?>
	<div class="login-buttons">
		<a data-toggle="modal" id="coding-chapters-login-btn" href="#coding-chapters-login-modal" title="<?php _e( 'Login', 'coding-chapters' ); ?>"><?php _e( 'Login', 'coding-chapters' ); ?></a>
	</div>
	<div class="modal fade" id="coding-chapters-login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">
						<?php _e( sprintf( 'Login to %s', get_bloginfo( 'name' ) ),'coding-chapters' ); ?>
					</h4>
				</div>
				<div class="modal-body">
					<?php wp_login_form(); ?>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
<?php } ?>
</div>
