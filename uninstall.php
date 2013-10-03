<?php

if( !defined( 'WP_UNINSTALL_PLUGIN' ) )
	exit();

delete_site_option( 'wpmandrill' );
delete_site_option( 'wpmandrill-test' );
delete_site_option( 'wpmandrill-stats' );
delete_site_option('mandrill-stats');

wp_clear_scheduled_hook('wpm_update_stats');

if ( function_exists('delete_site_option') )  delete_site_option('wpmandrill_notice_shown');

?>
