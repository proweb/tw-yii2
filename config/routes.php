<?php

# Docs - https://github.com/samdark/yii2-cookbook/blob/master/book/urls-variable-number-of-parameters.md
return [
    // index rule for Canonical tag
    '' => 'site/index',
    // Other
    'p/<slug:\w+>' => 'site/page',
    // for Site controller
    // '<alias:\w+>' => 'site/<alias>',
];