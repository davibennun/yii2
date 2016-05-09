<?php
   return [
       'id' => 'crmapp',
       'basePath' => realpath(__DIR__ . '/../'),
       'components' => [
           'request' => [
               'cookieValidationKey' => 'your secret key here'
            ],
            'response' => [
              'formatters' => [
                  'yaml' => [
                    'class' => 'app\utilities\YamlResponseFormatter'
                  ]
              ]
            ],
            'db' => require(__DIR__ . '/db.php'),
            'gii' => [
                   'class' => 'yii\gii\Module',
                   'allowedIPs' => ['*']
             ],
             'view' => [
                'theme' => [
                   'class' => yii\base\Theme::className(),
                   'basePath' => '@app/themes/snowy',
                ],
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