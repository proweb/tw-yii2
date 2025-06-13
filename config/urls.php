<?php

/**
 * Файл с правилами роутинга
 * @link: https://github.com/samdark/yii2-cookbook/blob/master/book/urls-variable-number-of-parameters.md URLs with variable number of parameters
 * @link: http://developer.uz/blog/seo-links-in-yii/ ЧПУ в Yii
 * @link: https://github.com/yiisoft/yii2/blob/master/framework/web/UrlManager.php#L87 Примеры из кода класса
 * */

return [
    // index rule for Canonical tag
    '' => 'site/index', // Site root
    // Play cart
    'user/<name:[\w\-]+>' => 'site/user',
    [
        'verb' => 'GET',
        'name' => 'myroute',
        'pattern' => 'post/<id:\d+>',
        'route' => 'site/dev',
       // 'defaults' => ['id' => 1],
       //  'suffix' => '/'
    ],
// Response controller


//    '<action:[\w\-]+>' => 'site/<action>',


];