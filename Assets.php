<?php

namespace humhub\modules\webshell;

use yii\web\AssetBundle;

class Assets extends AssetBundle
{

    public $js = [
        'js/jquery.terminal-min.js',
    ];

    public $css = [
        'css/jquery.terminal.min.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . '/assets';
        parent::init();
    }
}
