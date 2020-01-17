<?php



/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache

// ** MySQL settings ** //
 //Added by WP-Cache Manager
//define('DB_NAME', 'cfxdb');    // The name of the database
 //Added by WP-Cache Manager
define('DB_NAME', 'hookupco_bit');    // The name of the database
define('DB_USER', 'hookupco_bit');     // Your MySQL username
define('DB_PASSWORD', 'gsta9phj'); // ...and password
define('DB_HOST', 'hookupco.mysql.ukraine.com.ua');    // 99% chance you won't need to change this value
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// You can have multiple installations in one database if you give each a unique prefix
$table_prefix  = 'wp_';   // Only numbers, letters, and underscores please!

// Change this to localize WordPress.  A corresponding MO file for the
// chosen language must be installed to wp-content/languages.
// For example, install de.mo to wp-content/languages and set WPLANG to 'de'
// to enable German language support.
define ('WPLANG', '');

define('ENABLE_CACHE', true);
define('WP_POST_REVISIONS', false);
//define ('WP_POST_REVISIONS', 0);
define('AUTOSAVE_INTERVAL', 600); // One hour should be long enough!

/* That's all, stop editing! Happy blogging. */

define('ABSPATH', dirname(__FILE__).'/');
require_once(ABSPATH.'wp-settings.php');
?>
