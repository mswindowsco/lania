<?php
/**
 * The template for displaying search forms in lania
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <label class="icon-search">&nbsp;</label>
		<label for="s" class="assistive-text assistive-tzsearch"><?php _e( 'Search', TEXT_DOMAIN ); ?></label>
		<input type="text" class="field Tzsearchform inputbox search-query" name="s" id="s" placeholder="<?php esc_attr_e( 'Search...', TEXT_DOMAIN ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', TEXT_DOMAIN ); ?>" />
	</form>
