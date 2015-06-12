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
            'name'        => 'frontend-spelling',
            'description' => 'No description provided yet...',
            'author'      => 'haegemon',
            'icon'        => 'icon-leaf'
        ];
    }

}
