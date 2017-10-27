<?php
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 27.10.2017
 * Time: 12:49
 */

require (dirname(__DIR__).'/vendor/autoload.php');
$applicationConfig = new \Patrick\TimeTracking\Application\ApplicationConfig(
    require (dirname(__DIR__).'/config/config.php')
);
$application = new \Patrick\TimeTracking\Application\Application(
    $applicationConfig
);