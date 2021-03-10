<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Application specific global variables
class Globals
{
    private static $exists = null;
    private static $initialized = false;
    private static $rows = null;
    private static function initialize()
    {
        if (self::$initialized)
            return;

        self::$exists = null;
        self::$initialized = true;
    }

    public static function setAuthenticatedMemeberId($check)
    {
        self::initialize();
        self::$exists = $check;
    }


    public static function authenticatedMemeberId()
    {
        self::initialize();
        return self::$exists;
    }
    
}