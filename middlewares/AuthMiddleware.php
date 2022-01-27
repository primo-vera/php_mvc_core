<?php 
/**
 * User: LaMarca_Creative
 * Date: 1/26/2022
 * Time: 2:12 PM
 */

 namespace kb\phpmvc\middlewares;

use kb\phpmvc\Application;
use kb\phpmvc\exception\ForbiddenException;

/**
  * Class AuthMiddleware
  *
  * @author Keith Barreras <keith.barreras@gmail.com>
  * @package kb\phpmvc
  */
  class AuthMiddleware extends BaseMiddleware 
  {
    public $actions = [];

    /**
     * AuthMiddleware constructor.
     * 
     * @param array $actions
     */
    public function __construct(array $actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if (Application::isGuest()) {
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
                throw new ForbiddenException();
            }
        }
    }

  }