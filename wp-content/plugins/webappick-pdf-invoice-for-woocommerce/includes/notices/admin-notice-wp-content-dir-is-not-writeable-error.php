<?php
/**
 * Scripts for showing notices
 *
 * @since      3.3.25
 * @package    Challan_Free
 * @subpackage Challan_Free/notices
 * @author     Anwar <anwar.webappick@gmail.com>
 * @link       https://webappick.com
 */
// If this file is called directly, abort.
if ( ! defined('ABSPATH') ) {
    exit;
}


if ( ! function_exists("challan_admin_notice_wp_content_dir_is_not_writeable__error") ) {
    /**
     * Show an admin notice if wp-content directory is not writeable.
     *
     * @return void
     */
    function challan_admin_notice_wp_content_dir_is_not_writeable__error() {
        if ( ! is_writeable(WP_CONTENT_DIR ) ) {
            $class = 'notice notice-error';
            $wpFilePermissionLink = '<a target="_blank" href="https://wordpress.org/support/article/changing-file-permissions/">WordPress file permission click here</a>';
            $message = sprintf(
                '%1$s %2$s %3$s %4$s %5$s', //phpcs:ignore
                'An error has occurred, the directory of',
                '<strong style="color: red;">wp-content/uploads/</strong>',//phpcs:ignore
                'The WordPress system wont\'t work well without write permission. More details about ',
                $wpFilePermissionLink,//phpcs:ignore
                'Please contact with your system admin or server admin.'
            );

            printf('<div class="%1$s"><p>%2$s</p></div>', esc_attr($class), wp_kses( $message , [ '<a></a>', '<strong></strong>' ] ) ); //phpcs:ignore
        }
    }

    add_action('admin_notices', 'challan_admin_notice_wp_content_dir_is_not_writeable__error');

}