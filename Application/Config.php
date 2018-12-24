<?php
/**
 * Created by PhpStorm.
 * User: lxc
 * Date: 18-11-27
 * Time: 下午9:14
 */

namespace app;


class Config
{
    protected static $instance = null;

    /** @var array 配置 */
    public  $config = [];

    /** @var array 默认配置 */
    protected  $defaultConfig = [
        'port' => 8000,
    ];

    public static function getInstance()
    {
        if (!isset(static::$instance)) {
            static::$instance = new static;
            //用户配置覆盖默认配置
            static::$instance->config = array_merge(static::$instance->defaultConfig, \Spyc::YAMLLoad(DOCUMENT_ROOT.'config.yml'));
        }
        return static::$instance;
    }

    /**
     * @param $name
     * @return mixed
     * @throws \Exception
     */
    public function get($name)
    {
        if(empty($this->config[$name])){
            throw new \Exception("Error Config $name Not Exists", 1);
        } else {
            return $this->config[$name];
        }
    }

    public function set($key, $value)
    {

    }

    private function __construct(){}

    protected function __clone(){}
}