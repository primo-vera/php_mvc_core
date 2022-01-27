<?php 
/**
 * User: LaMarca_Creative
 * Date: 1/26/2022
 * Time: 2:06 PM
 */

 namespace app\core\middlewares;


 /**
  * Class BaseMiddleware
  *
  * @author Keith Barreras <keith.barreras@gmail.com>
  * @package app\core
  */
  abstract class BaseMiddleware
  {
      abstract public function execute();
  }