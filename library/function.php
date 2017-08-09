<?php

use ZPHP\Cache\Factory;
use ZPHP\Core\Db;

/**
 * Created by PhpStorm.
 * User: zhaoye
 * Date: 16/7/16
 * Time: 下午2:57
 */


function table($tableName)
{
    return Db::getInstance()->table($tableName);
}

function collection($collectionName)
{
    return Db::collection($collectionName);
}

function cache($key, $value = '', $expire = 3600)
{
    $cache = Factory::getInstance();
    if ($value === null) {
        return $cache->delete($key);
    }
    if ('' === $value) {
        return $cache->get($key);
    }

    return $cache->set($key, $value, $expire);
}


function url($str)
{
    if ($str[0] != '/') {
        $str = '/'.$str;
    }
    echo $str;
}