<?php
namespace CheerfulLab\FrontendSpelling;

use Backend;
use System\Classes\PluginBase;
use System\Models\MailTemplate;

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
            'name' => 'Frontend Spelling',
            'description' => 'Response spelling from users',
            'author' => 'Pawel Samusev, Yuri Kostin',
            'icon' => 'icon-envelope-square',
        ];
    }

    public function registerNavigation()
    {
        return [
            'spelling' => [
                'label'       => 'Spelling requests',
                'url' => Backend::url('cheerfullab/frontendspelling/spellingrequests'),
                'icon'        => 'icon-envelope-square',
                'order'       => 500,
                'sideMenu' => [
                    'requests' => [
                        'label'       => 'Spelling requests',
                        'icon' => 'icon-envelope-square',
                        'url' => Backend::url('cheerfullab/frontendspelling/spellingrequests'),
                    ],
                ]

            ]
        ];
    }

    public function registerSettings()
    {
        return [
            'location' => [
                'label'       => 'Spelling notifications',
                'description' => 'Settings spelling requests notification',
                'category'    => 'system::lang.system.categories.system',
                'icon'        => 'icon-envelope-square',
                'class'       => 'CheerfulLab\Frontendspelling\Models\Settings',
                'order'       => 600,
                'keywords'    => 'spelling requests'
            ]
        ];
    }

    public function registerComponents()
    {
        return [
            'CheerfulLab\frontendspelling\components\Frontendspelling' => 'frontendspellings'
        ];
    }

    /**
     * Register mail templates
     */
    public function registerMailTemplates()
    {
        return [
            'cheerfullab.frontendspelling::mail.notify'  => 'Notification about new event',
        ];
    }

}
