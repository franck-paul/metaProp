<?php

/**
 * @brief metaProp, a plugin for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Plugins
 *
 * @author Franck Paul and contributors
 *
 * @copyright Franck Paul carnet.franck.paul@gmail.com
 * @copyright GPL-2.0 https://www.gnu.org/licenses/gpl-2.0.html
 */
$this->registerModule(
    'metaProp',
    'Implements meta properties',
    'Franck Paul and contributors',
    '0.2',
    [
        'date'        => '2003-08-13T13:42:00+0100',
        'requires'    => [['core', '2.28']],
        'permissions' => 'My',
        'type'        => 'plugin',
        'settings'    => [
            'self' => '',
        ],

        'details'    => 'https://open-time.net/?q=metaProp',
        'support'    => 'https://github.com/franck-paul/metaProp',
        'repository' => 'https://raw.githubusercontent.com/franck-paul/metaProp/main/dcstore.xml',
    ]
);
