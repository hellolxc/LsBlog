<?php
/**
 * 公共函数
 * Date: 18-12-4
 * Time: 下午1:25
 */


if (!function_exists('config')) {
    function config($name, $value = '')
    {
        $config = \app\Config::getInstance();

        return empty($value) ? $config->get($name) : $config->set($name, $value);
    }
}
