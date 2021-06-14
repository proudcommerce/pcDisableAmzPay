<?php
/**
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @copyright (c) ProudCommerce | 2021
 * @link          www.proudcommerce.com
 * @package       pcDisableAmzPay
 * @version       1.0.0
 **/

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id'          => 'pcDisableAmzPay',
    'title'       => 'pcDisableAmzPay',
    'description' => 'Amazon Pay (Bestit Plugin) für bestimmte Klassen deaktivieren.',
    'thumbnail'   => '',
    'version'     => '1.0.0',
    'author'      => 'ProudCommerce',
    'url'         => 'https://www.proudcommerce.com',
    'email'       => 'support@proudcommerce.com',
    'extend'      => [
        \OxidEsales\Eshop\Core\ViewConfig::class => \ProudCommerce\DisableAmzPay\Core\ViewConfig::class
    ],
    'settings'    => [
        [
            'group' => 'main',
            'name'  => 'pcDisableAmzPay_classes',
            'type'  => 'arr',
            'value' => [
                'start',
                'alist',
                'details',
                'search',
                'content',
                'contact',
                'newsletter'
            ]
        ],
    ],
    'controllers' => [],
    'events'      => [],
    'templates'   => [],
    'blocks'      => []
];
