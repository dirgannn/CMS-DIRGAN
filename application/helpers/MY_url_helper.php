<?php defined('BASEPATH') or exit('No direct script access allowed');

// application/helpers/MY_url_helper.php

if (!function_exists('is_active')) {
    function is_active($page)
    {
        $CI = &get_instance();
        $current_url = $CI->uri->uri_string();

        return ($page === $current_url) ? 'active' : '';
    }
}
