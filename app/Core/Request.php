<?php 

namespace App\Core;
class Request {

    public static function uri()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'] . $uri;
        $uri = str_replace(home(), '', $uri);
        return trim($uri, '/');
    }
    /**
     *  function of uri() use convert the path or name project into '/'
    */

    public static function get($key, $default=null)
    {
        return $_GET[$key] ?? $_post[$key] ?? $default ; 
    }
    /**
     *  select between POST or Gat
    */

    public static function method()
    { 
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
    /**
     *  method : determine the method 
    */
}