<?php
/**
 * Created by PhpStorm.
 * User: zhaoye
 * Date: 2016/12/19
 * Time: 下午5:49
 */

use ZPHP\Core\App;

return [
    'route'=>
    [
        'ANY' => [
            '/Test/{id}' => function($id){
                return App::model('test')->getUserById($id);
            },
        ],
        'POST'  => [
            '/testinfo/save' => '\index\testrout',
        ],
    ],
];