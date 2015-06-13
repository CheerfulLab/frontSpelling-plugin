<?php namespace Haegemon\Frontendspelling\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Spelling Requests Back-end Controller
 */
class SpellingRequests extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Haegemon.Frontendspelling', 'frontendspelling', 'spellingrequests');
    }
}