<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class SportsAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/sports.css',
    ];
    public $js = [
    ];
    public $depends = [
        'frontend\assets\AppAsset'
    ];
}
