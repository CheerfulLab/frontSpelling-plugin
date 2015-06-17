<?php namespace CheerfulLab\Frontendspelling\Controllers;

use BackendMenu;
use Request;
use Response;
use Backend\Classes\Controller;
use CheerfulLab\Frontendspelling\Models\SpellingRequest;
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

    public $publicActions = ['create_ajax'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('CheerfulLab.Frontendspelling', 'frontendspelling', 'spellingrequests');
    }

    /**
     * Function to create new record from frontend request.
     * Get post
     * @return mixed json
     */
    public function create_ajax()
    {
        try {
            if (Request::isMethod('post')) {
                $textError = Request::input('textError');
                if (!$textError) {
                    throw new Exception('Not get mandatory parameter textError');
                }
                $url = urldecode($textError['url']);
                $text = urldecode($textError['text']);
                $comment = urldecode($textError['comment']);
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