<?php 
/**
 * User: LaMarca_Creative
 * Date: 1/26/2022
 * Time: 2:06 PM
 */

 namespace kb\phpmvc\middlewares;


 /**
  * Class BaseMiddleware
  *
  * @author Keith Barreras <keith.barreras@gmail.com>
  * @package kb\phpmvc
  */
  abstract class BaseMiddleware
  {
      abstract public function execute();
  }