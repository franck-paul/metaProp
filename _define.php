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
if (!defined('DC_RC_PATH')) {
    return;
}

$this->registerModule(
    'metaProp',                     // Name
    'Implements meta properties',   // Description
    'Franck Paul and contributors', // Author
    '0.1',                          // Version
    [
        'requires'    => [['core', '2.17']],
        'permissions' => 'usage,contentadmin',                      // Permissions
        'type'        => 'plugin',                                  // Type
        'settings'    => [                                          // Settings
            'self' => ''
        ],

        'details'    => 'https://open-time.net/?q=metaProp',       // Details URL
        'support'    => 'https://github.com/franck-paul/metaProp', // Support URL
        'repository' => 'https://raw.githubusercontent.com/franck-paul/metaProp/main/dcstore.xml'
    ]
);
