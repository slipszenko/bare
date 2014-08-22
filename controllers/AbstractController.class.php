<?php

abstract class AbstractController {
    protected static $db, $smarty, $config, $router, $match;
    
    public function __construct() {
        global $smarty, $config, $router, $match;
        self::$smarty = $smarty;
        self::$config = $config;
        self::$router = $router;
        self::$match = $match;
    }
}