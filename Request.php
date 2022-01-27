<?php 
/**
 * User: LaMarca_Creative
 * Date: 1/21/2022
 * Time: 7:40 PM
 */

namespace app\core;


/**
* Class Request
*
* @author Keith Barreras <keith.barreras@gmail.com>
* @package app\core
*/
class Request {
    public function getPath() 
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $postion = strpos($path, '?');
        if ($postion === false) {
            return $path;
        }
        return substr($path, 0, $postion);
    }

    public function method() 
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function isget() 
    {
        return $this->method() === 'get';
    }
    
    public function isPost() 
    {
        return $this->method() === 'post';
    }

    public function getBody()
    {
        $body = [];
        if ($this->method() === 'get') {
            foreach ($_GET as $key => $value) {
                $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        if ($this->method() === 'post') {
            foreach ($_POST as $key => $value) {
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        return $body;
    }


}