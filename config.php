<?php

namespace humhub\modules\webshell;

return [
    'id' => 'webshell',
    'class' => 'humhub\modules\webshell\Module',
    'namespace' => 'humhub\modules\webshell',
    'events' => [
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::className(),
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\webshell\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
