<?php
/**
 * Created by PhpStorm.
 * User: troes
 * Date: 20.10.2017
 * Time: 11:08
 */

namespace Patrick\TimeTracking\Application;


class Application
{
    /**
     * @var ApplicationConfig
     */
    private $applicationConfig;

    /**
     * Application constructor.
     * @param $applicationConfig
     */
    public function __construct(ApplicationConfig $applicationConfig)
    {
        $this->applicationConfig = $applicationConfig;
    }


}