<?php namespace Grinkomeda\Networker\Components;

use Cms\Classes\ComponentBase;
use Grinkomeda\Networker\Models\Package;
use Grinkomeda\Networker\Models\Account;
use Grinkomeda\Networker\Models\Profile;

use ValidationException;
use ApplicationException;
use RainLab\User\Models\Settings as UserSettings;

use Validator;
use Redirect;
use Session;
use Flash;
use Event;
use Exception;
use Auth;

class RegistrationForm extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'RegistrationForm Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['packages'] = Package::get();
        $this->page['values'] = Session::pull('values');
    }

    public function onRegister()
    {
        
    }

    public function registerUser($post)
    {
        
    }
}