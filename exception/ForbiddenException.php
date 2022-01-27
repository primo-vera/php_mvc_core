<?php 
/**
 * User: LaMarca_Creative
 * Date: 1/26/2022
 * Time: 2:27 PM
 */

 namespace app\core\exception;



/**
  * Class ForbiddenException
  *
  * @author Keith Barreras <keith.barreras@gmail.com>
  * @package app\core\exception
  */
  class ForbiddenException extends \Exception
  {
    protected $message = 'You don\'t have permission to access this page!'; 
    protected $code = 403;
  }