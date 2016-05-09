<?php
   return [
       'id' => 'crmapp',
       'basePath' => realpath(__DIR__ . '/../'),
       'components' => [
           'request' => [
               'cookieValidationKey' => 'your secret key here'
            ],
            'db' => require(__DIR__ . '/db.php'),
            'gii' => [
                   'class' => 'yii\gii\Module',
                   'allowedIPs' => ['*']
             ],
             'view' => [
                'renderers' => [
                    'md' => [
                        'class' => 'app\utilities\MarkdownRenderer'
                    ]
                ]
             ]
        ],
        'modules' => [
          'gii' => 'yii\gii\Module'
        ]
    ];