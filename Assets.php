<?php

namespace humhub\modules\webshell;

use yii\web\AssetBundle;

class Assets extends AssetBundle
{

    public $sourcePath = '@humhub/modules/webshell/assets';

    public $css = [
        'css/webshell.css',
    ];

    public $js = [
        'js/jquery.terminal-min.js',
    ];

    public $depends = [
        'humhub\modules\webshell\JqueryTerminalAsset',
    ];
}
