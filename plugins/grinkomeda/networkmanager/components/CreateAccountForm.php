<?php namespace Grinkomeda\NetworkManager\Components;

use Cms\Classes\ComponentBase;
use Grinkomeda\NetworkManager\Models\Package;

class CreateAccountForm extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'CreateAccountForm Component',
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
    }

}