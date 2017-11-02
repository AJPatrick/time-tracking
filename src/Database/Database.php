<?php
/**
 * Created by PhpStorm.
 * User: Kristian
 * Date: 02.11.2017
 * Time: 11:13
 */

namespace Patrick\TimeTracking\Database;

use Patrick\TimeTracking\Application\ApplicationConfig;

/**
 * Class Database
 * @package Patrick\TimeTracking\Database
 */
class Database
{
    /**
     * @var ApplicationConfig
     */
    private $applicationConfig;

    /**
     * @var \PDO
     */
    private $pdoConnection;

    /**
     * Database constructor.
     * @param ApplicationConfig $applicationConfig
     */
    public function __construct(ApplicationConfig $applicationConfig)
    {

        $this->applicationConfig = $applicationConfig;
    }

    /**
     * @return bool
     */
    private function connect()
    {
        $dsn = 'mysql:dbname=' . $this->applicationConfig->database['dbname'] .
            ';host=' . $this->applicationConfig->database['host'];

        $this->pdoConnection = new \PDO(
            $dsn,
            $this->applicationConfig->database['username'],
            $this->applicationConfig->database['password']
        );

        return true;
    }

    /**
     * Returns the database pdo connection.
     * @return \PDO
     */
    public function getConnection()
    {
        if(!($this->pdoConnection instanceof \PDO)){
            $this->connect();
        }

        return $this->pdoConnection;
    }
}