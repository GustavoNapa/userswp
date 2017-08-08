<?php
/**
 * Gets the UsersWP page permalink based on page type.
 *
 * @since       1.0.0
 * @package     UsersWP
 * @param       string|bool     $type       Page type.
 * @return      string                      Page permalink.
 */
function get_uwp_page_permalink($type) {
    $page = new Users_WP_Pages();
    return $page->get_page_permalink($type);
}

/**
 * Gets the UsersWP register page permalink.
 *
 * @since       1.0.0
 * @package     UsersWP
 * @return      string      Page permalink.
 */
function get_uwp_register_permalink() {
    $page = new Users_WP_Pages();
    return $page->get_register_permalink();
}

/**
 * Gets the UsersWP login page permalink.
 *
 * @since       1.0.0
 * @package     UsersWP
 * @return      string      Page permalink.
 */
function get_uwp_login_permalink() {
    $page = new Users_WP_Pages();
    return $page->get_login_permalink();
}

/**
 * Gets the UsersWP forgot password page permalink.
 *
 * @since       1.0.0
 * @package     UsersWP
 * @return      string      Page permalink.
 */
function get_uwp_forgot_permalink() {
    $page = new Users_WP_Pages();
    return $page->get_forgot_permalink();
}

/**
 * Gets the UsersWP reset password page permalink.
 *
 * @since       1.0.0
 * @package     UsersWP
 * @return      string      Page permalink.
 */
function get_uwp_reset_permalink() {
    $page = new Users_WP_Pages();
    return $page->get_reset_permalink();
}

/**
 * Gets the UsersWP account page permalink.
 *
 * @since       1.0.0
 * @package     UsersWP
 * @return      string      Page permalink.
 */
function get_uwp_account_permalink() {
    $page = new Users_WP_Pages();
    return $page->get_account_permalink();
}

/**
 * Gets the UsersWP profile page permalink.
 *
 * @since       1.0.0
 * @package     UsersWP
 * @return      string      Page permalink.
 */
function get_uwp_profile_permalink() {
    $page = new Users_WP_Pages();
    return $page->get_profile_permalink();
}

/**
 * Gets the UsersWP users page permalink.
 *
 * @since       1.0.0
 * @package     UsersWP
 * @return      string      Page permalink.
 */
function get_uwp_users_permalink() {
    $page = new Users_WP_Pages();
    return $page->get_users_permalink();
}

/**
 * Gets the UsersWP page permalink based on page type.
 *
 * @since       1.0.0
 * @package     UsersWP
 * @param       string     $page_type      Page type.
 * @return      string                     Page permalink.
 */
function uwp_get_page_link($page_type) {
    $page = new Users_WP_Pages();
    return $page->get_page_link($page_type);
}

/**
 * Builds the profile page url based on the tab and sub tab given
 * yoursite.com/profile/username
 * yoursite.com/profile/username/tab
 * yoursite.com/profile/username/tab/subtab
 *
 * @since       1.0.0
 * @package     UsersWP
 * @param       int             $user_id            User ID.
 * @param       string|bool     $tab                Optional. Main tab
 * @param       string|bool     $subtab             Optional. Sub tab.
 * @return      string                              Built profile page link.
 */
function uwp_build_profile_tab_url($user_id, $tab = false, $subtab = false) {
    $page = new Users_WP_Pages();
    return $page->build_profile_tab_url($user_id, $tab, $subtab);
}