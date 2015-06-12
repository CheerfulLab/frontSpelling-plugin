<?php namespace Haegemon\FrontendSpelling;

use System\Classes\PluginBase;

/**
 * frontend-spelling Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'frontendspelling',
            'description' => 'Response spelling from users',
            'author'      => 'haegemon',
            'icon'        => 'icon-envelope-square'
        ];
    }

    public function registerNavigation()
    {
        return [
            'catalog' => [
                'label'       => 'Spelling requests',
                'url'         => \Backend::url('haegemon/spelling/fronted'),
                'icon'        => 'icon-envelope-square',
                'order'       => 500,
                'sideMenu' => [
                    'spelling' => [
                        'label'       => 'Spelling requests',
                        'icon'        => 'icon-list-alt',
                        'url'         => \Backend::url('haegemon/spelling/fronted'),
                    ],
                ]

            ]
        ];
    }

}
