<?php

namespace humhub\modules\webshell;

use Yii;
use yii\helpers\Url;

class Events extends \yii\base\Object
{
    public static function onAdminMenuInit($event)
    {
        $event->sender->addItem([
            'label' => Yii::t('WebshellModule.base', 'WebShell'),
            'url' => Url::to(['/webshell/default']),
            'icon' => '<i class="fa fa-terminal"></i>',
            'group' => 'settings',
            'sortOrder' => 90000,
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'webshell')
        ]);
    }

}
