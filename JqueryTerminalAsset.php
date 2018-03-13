<?php

namespace humhub\modules\webshell;

use yii\web\AssetBundle;

/**
 * JqueryTerminalAsset is an asset bundle used to include JQueryTerminal into the page.
 *
 * @see http://terminal.jcubic.pl/
 * @author Alexander Makarov <sam@rmcreative.ru>
 */
class JqueryTerminalAsset extends AssetBundle
{
    public $sourcePath = '@humhub/modules/webshell/vendors/terminal';

    public $js = [
        'js/jquery.terminal-min.js',
    ];

    public $css = [
        'css/jquery.terminal.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
