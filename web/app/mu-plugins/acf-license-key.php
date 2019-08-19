<?php
/*
Plugin Name:  ACF License Key
Plugin URI:   https://gist.github.com/polevaultweb/9cdf1b3bfeb054f13f221d4612bd8901/
Description:  Allows you to define the ACF license key as a constant, instead of having to enter it manually. Based
on the linked gist.
Version:      1.0.0
Author:       Murmur Creative
Author URI:   https://murmurcreative.com
License:      MIT License
*/

function my_filter_acf_pro_license_option($pre)
{
    if ( ! defined('ACF_PRO_LICENSE') || empty(ACF_PRO_LICENSE)) {
        return $pre;
    }
    $data = array(
        'key' => ACF_PRO_LICENSE,
        'url' => home_url(),
    );

    return base64_encode(serialize($data));
}

add_filter('pre_option_acf_pro_license', 'my_filter_acf_pro_license_option');
