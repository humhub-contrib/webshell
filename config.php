<?php

    return [
    'id' => 'webshell',
    'class' => 'humhub\modules\webshell\Module',
    'namespace' => 'humhub\modules\webshell',
    'events' => [
        ['class' => 'AdminMenuWidget', 'event' => 'onInit', 'callback' => ['WebShellModule', 'onAdminMenuInit']],
        ['class' => 'WebApplication', 'event' => 'onInit', 'callback' => ['WebShellModule', 'onWebApplicationInit']],
    ],
];