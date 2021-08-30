<?php

define( 'WPFP_VERSION', '0.0.0' );
define( 'PARENT_THEME_DIR', TEMPLATEPATH );
define( 'PARENT_THEME_URI', get_template_directory_uri() );
define( 'WPFP_DIR', PARENT_THEME_DIR . '/WPFP' );
define( 'WPFP_URI', PARENT_THEME_URI . '/WPFP' );

define( 'WPFP_SESSION_LIFETIME', 2592000*3 ); // SECOND / 2592000 = a month
// set Random Session Key 
// 1. It should contain only alphanumeric characters 
// 2. Long key won't valid
define( 'WPFP_SESSION_SECRET_KEY', 'QQxemMXXPZVXZucV');

require_once( WPFP_DIR . '/classes/WPFP.php' );
require_once( WPFP_DIR . '/classes/WPFPServices.php' );
require_once( WPFP_DIR . '/classes/WPFPRouter.php' );

require_once( WPFP_DIR . '/classes/WPFPPage.php' );

$wpfp = new WPFPRouter();
$wpfp->init();
$wpfp->execute();
