<?php namespace CheerfulLab\Frontendspelling\Components;

use Cms\Classes\ComponentBase;

class Frontendspelling extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'Frontend Spelling Component',
            'description' => 'allow your visitor check mistake at your site'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

}