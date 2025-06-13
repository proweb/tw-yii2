<?php

/**
 * Файл с правилами роутинга
 * @link: https://github.com/samdark/yii2-cookbook/blob/master/book/urls-variable-number-of-parameters.md URLs with variable number of parameters
 * @link: http://developer.uz/blog/seo-links-in-yii/ ЧПУ в Yii
 * @link: https://github.com/yiisoft/yii2/blob/master/framework/web/UrlManager.php#L87 Примеры из кода класса
 * */

return [
    // index rule for Canonical tag

    // Play cart
    'user/<name:[\w\-]+>' => 'site/user',
    /**
     * Пример полного правила yii\web\UrlRule
     * указан тип запроса - GET
     * числовой параметр id - адреса вида /post/10
     * внутренний роут - который ловит параметр
     * класс UrlNormalizer с редиректом 301 на правило БЕЗ редиректа
     */
    [
        'verb' => 'GET',
        'name' => 'myroute',
        'pattern' => 'post/<id:\d+>',
        'route' => 'site/dev',
        'normalizer' => [
            // use temporary redirection instead of permanent for debugging
            'action' => yii\web\UrlNormalizer::ACTION_REDIRECT_PERMANENT,
        ],
       // 'defaults' => ['id' => 1],
       //  'suffix' => '/'
    ],
    '' => 'site/index', // Site root
// Response controller


//    '<action:[\w\-]+>' => 'site/<action>',


];