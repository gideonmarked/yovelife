<?php namespace Grinkomeda\NetworkManager;

use Backend;
use System\Classes\PluginBase;

/**
 * NetworkManager Plugin Information File
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
            'name'        => 'NetworkManager',
            'description' => 'No description provided yet...',
            'author'      => 'Grinkomeda',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {

        return [
            'Grinkomeda\NetworkManager\Components\CreateAccountForm' => 'createAccountForm',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'grinkomeda.networkmanager.some_permission' => [
                'tab' => 'NetworkManager',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'networkmanager' => [
                'label'       => 'NetworkManager',
                'url'         => Backend::url('grinkomeda/networkmanager/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['grinkomeda.networkmanager.*'],
                'order'       => 500,
            ],
        ];
    }

}
