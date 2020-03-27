<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '') {
    $config = [
        'name' => 'Donny Matchen',
        'pretty_uri' => false,
        'site_url' => 'https://donnymatchen.herokuapp.com',
        'nav_menu' => [
            '' => 'Home',
            'store' => 'Services and Pricing',
            'crypto' => 'Cryptocurrency Wallet Addresses',
            'contact' => 'Contact Information'
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v1.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}
?>