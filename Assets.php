<?php

namespace humhub\modules\webshell;

use yii\web\AssetBundle;

class Assets extends AssetBundle
{

    public $css = [
        'webshell.css',
    ];

    public $js = [
        'webshell.js',
    ];

    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . '/assets';
        parent::init();
    }
}
