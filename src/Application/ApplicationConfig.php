<?php
/**
 * Created by PhpStorm.
 * User: troes
 * Date: 20.10.2017
 * Time: 11:33
 */

namespace Patrick\TimeTracking\Application;

/**
 * Class ApplicationConfig
 * @package Patrick\TimeTracking\Application
 * @property array $database
 */
class ApplicationConfig
{
    /**
     * @var array
     */
    private $config;

    /**
     * ApplicationConfig constructor.
     * @param array $config config array from config file
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * @param string $attributeName
     * @return mixed
     */
    public function __get(string $attributeName)
    {
        return $this->config[$attributeName];
    }
}