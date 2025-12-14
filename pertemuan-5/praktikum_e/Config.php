<?php

class Config {
    protected static string $timezone = "Asia/Jakarta";

    public static function getTimezone(): string {
        return self::$timezone; // coba ganti jadi self::$timezone
    }
}

class ConfigDev extends Config {
    protected static string $timezone = "UTC";
}

// TEST
echo Config::getTimezone() . PHP_EOL;     // Asia/Jakarta
echo ConfigDev::getTimezone() . PHP_EOL;  // UTC
