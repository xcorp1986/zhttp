<?php
return [
    /*tcp 用于管理连接用的(暂时没用)*/
    'connection' => [
        'adapter'  => 'Redis',
        'pconnect' => true,
        'host'     => '192.168.5.252',
        'port'     => 6379,
        'timeout'  => 5,
        'prefix'   => 'zchat',
    ],
];