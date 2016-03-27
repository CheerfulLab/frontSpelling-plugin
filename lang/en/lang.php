<?php

return [
    'app' => [
        'name' => 'FrontSpelling',
        'modalTitle' => 'Send text part with error',
		'modalSubmit' => 'Send'
    ],
    'mailer' => [
        'tab' => [
            'label' => 'Mailer'
        ],
        'enabled' => [
            'label' => 'Enable email notification'
        ],
        'email' => [
            'label' => 'Contact email',
            'comment' => 'The receiver of the mail with notifications. Template cheerfullab.frontendspelling::mail.notify'
        ],
    ],
];