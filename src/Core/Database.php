<?php

namespace App\Core;

use mysqli;
use RuntimeException;

class Database
{
    private static $instance = null;
    private $config;

    private function __construct()
    {
        $this->config = require __DIR__ . '/../../config/database.php';
    }

    private function __clone() {}

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            $db = new self();
            $c = $db->config;

            // Suppress exceptions so we can check connect_error manually
            mysqli_report(MYSQLI_REPORT_OFF);

            self::$instance = new mysqli($c['host'], $c['username'], $c['password'], $c['database']);

            if (self::$instance->connect_error) {
                throw new RuntimeException(
                    'Database connection failed: ' . self::$instance->connect_error
                );
            }
        }
        return self::$instance;
    }
}
