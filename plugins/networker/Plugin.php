<?php namespace Grinkomeda\Networker;

use Backend;
use System\Classes\PluginBase;
use Rainlab\User\Models\User;

/**
 * Networker Plugin Information File
 */
class Plugin extends PluginBase
{


    public $require = ['Rainlab.User'];
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Networker',
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
        User::extend(function($model){
            $model->hasOne['account'] = ['Grinkomeda\Networker\Models\Account'];
        });
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Grinkomeda\Networker\Components\RegistrationForm' => 'registrationForm',
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
            'grinkomeda.networker.some_permission' => [
                'tab' => 'Networker',
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
        return [
            'networker' => [
                'label'       => 'Networker',
                'url'         => Backend::url('grinkomeda/networker/packages'),
                'icon'        => 'icon-leaf',
                'permissions' => ['grinkomeda.networker.*'],
                'order'       => 500,
            ],
        ];
    }

}
