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
        return [
            'popupTitle' => [
                'title' => 'Title of popup',
                'description' => '',
                'default' => 'Text with mistake',
                'type' => 'string',
            ],
            'buttonTitle' => [
                'title' => 'Label of button',
                'description' => '',
                'default' => 'Submit',
                'type' => 'string',
            ]
        ];
    }

    public function onRender()
    {
        $this->page['popupTitle'] = $this->property('popupTitle');
        $this->page['buttonTitle'] = $this->property('buttonTitle');
    }

}