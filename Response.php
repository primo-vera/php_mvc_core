<?php 
/**
 * User: LaMarca_Creative
 * Date: 1/21/2022
 * Time: 7:40 PM
 */

namespace app\core;

/**
* Class Response
*
* @author Keith Barreras <keith.barreras@gmail.com>
* @package app\core
*/
class Response 
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect(string $url)
    {
        header('Location: '.$url);
    }
}