<?php 
/**
 * User: LaMarca_Creative
 * Date: 1/26/2022
 * Time: 3:00 PM
 */

 namespace app\core\exception;



/**
  * Class NotFoundException
  *
  * @author Keith Barreras <keith.barreras@gmail.com>
  * @package app\core\exception
  */
  class NotFoundException extends \Exception
  {
    protected $message = 'Page not found!';
    protected $code = 404;
  }