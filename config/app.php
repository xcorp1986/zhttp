<?php

use ZPHP\Socket\Adapter\Swoole;

return [
    'server_mode'  => 'Socket',
    'project_name' => 'zhttp',
    'app_path'     => 'apps',
    'ctrl_path'    => 'controller',
    'common_file'  => '/library/function.php',
    'socket'       => [
        'host'            => '0.0.0.0',                          //socket 监听ip
        'port'            => 8991,                             //socket 监听端口
        'adapter'         => 'Swoole',                          //socket 驱动模块
        'server_type'     => Swoole::TYPE_HTTP,              //socket 业务模型 tcp/udp/http/websocket
        'daemonize'       => false,                             //是否开启守护进程
        'work_mode'       => 3,                             //工作模式：1：单进程单线程 2：多线程 3： 多进程
        'task_worker_num' => 0,
        'worker_num'      => 1,                                 //工作进程数
        'max_request'     => 0,                            //单个进程最大处理请求数
        'debug_mode'      => 1,
        'log_file'        => ROOTPATH.'/tmp/log/swoole.log',//打开调试模式
    ],
    'session'      => [
        'enable'       => true,
        'adapter'      => 'File',
        'path'         => '/tmp/zhttpsession',
        'redis'        => [
            'ip'             => '127.0.0.1',
            'port'           => 6379,
            'select'         => 1,
            'password'       => '123456',
            'asyn_max_count' => 10,
            'start_count'    => 5,
        ],
        'name'         => 'sses_',
        'session_name' => 'ZPHP_SID',
        'cache_expire' => 3600,
    ],

    'cookie' => [
        'enable'       => true,
        'cache_expire' => 86400,
    ],

    'project' => [
        'name'     => 'zhttp',
        'view'     => [
            'tag' => false,
        ],
        'pid_path' => ROOTPATH.'/webroot',
        'mvc'      => [
            'module'     => 'Home',
            'controller' => 'Index',
            'action'     => 'index',
        ],
        'reload'   => DEBUG,
    ],

];
