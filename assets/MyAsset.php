<?php

namespace app\assets;

use yii\web\AssetBundle;

class MyAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/my.scss',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset'
    ];
}