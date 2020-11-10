<?php

namespace App;

class Config
{
    public function get($section = '')
    {
        $config = require __DIR__ . '/../config.php';

        if (!empty($section)) {
            return $config[$section];
        }

        return $config;
    }
}
