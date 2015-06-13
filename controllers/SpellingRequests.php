<?php namespace Haegemon\Frontendspelling\Controllers;

use BackendMenu;
use Request;
use Response;
use Backend\Classes\Controller;
use Haegemon\Frontendspelling\Models\SpellingRequest;
use League\Flysystem\Exception;

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

    public $publicActions = ['ajaxcreate'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Haegemon.Frontendspelling', 'frontendspelling', 'spellingrequests');
    }

    /**
     * Function to create new record from frontend request.
     * Get post
     * @return mixed json
     */
    public function ajaxcreate()
    {
        try {
            if (Request::isMethod('post')) {
                $url = Request::input('url');
                $text = Request::input('text');
                $comment = Request::input('comment');
                if (!$url) {
                    throw new Exception('Not get mandatory parameter url');
                }
                if (!$text) {
                    throw new Exception('Not get mandatory parameter text');
                }

                $newRequest = new SpellingRequest();
                $newRequest->status = SpellingRequest::SpellingRequestStatusNew;
                $newRequest->url = $url;
                $newRequest->text = $text;
                $newRequest->comment = $comment;
                $newRequest->save();
                //
            } else {
                throw new Exception('Wrong method');
            }
            return Response::json(array(
                'success' => true,
            ));
        } catch (Exception $e) {
            return Response::json(array(
                'success' => false,
                'data' => $e->getMessage()
            ));
        }
    }
}