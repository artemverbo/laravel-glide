<?php

return [
    /*
     * Glide will search for images in this directory
     *
     */
    'source' => [
        'path' => storage_path('images'),
    ],

    /*
     * The directory Glide will use to store it's cache
     * A .gitignore file will be automatically placed in this directory
     * so you don't accidentally end up committing these images
     *
     */
    'cache' => [
        'path' => storage_path('glide/cache'),
    ],

    /*
     * URLs to generated images will start with this string
     *
     */
    'baseURL' => 'img',

    /*
     * The maximum allowed total image size in pixels
     */
    'maxSize' => 2000 * 2000,

    /*
     * Glide has an extra feature to sign each generated URL with
     * a private key to avoid possibility to alter the URL manually
     */
    'secureURLs' => true
];
