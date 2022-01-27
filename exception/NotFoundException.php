<?php 
/**
 * User: LaMarca_Creative
 * Date: 1/26/2022
 * Time: 3:00 PM
 */

 namespace kb\phpmvc\exception;



/**
  * Class NotFoundException
  *
  * @author Keith Barreras <keith.barreras@gmail.com>
  * @package kb\phpmvc\exception
  */
  class NotFoundException extends \Exception
  {
    protected $message = 'Page not found!';
    protected $code = 404;
  }