<?php
/**
define('WP_HOME','http://localhost/mam');
//define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'manoamano');
/** MySQL database username */
/** MySQL database password */
/** MySQL hostname */
/** Database Charset to use in creating database tables. */
/** The Database Collate type. Don't change this if in doubt. */
/**#@+
/**#@-*/
/**
define('WPLANG', '');
/**
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');