<?php 
/**
 * User: LaMarca_Creative
 * Date: 1/26/2022
 * Time: 2:12 PM
 */

 namespace app\core\middlewares;

use app\core\Application;
use app\core\exception\ForbiddenException;

/**
  * Class AuthMiddleware
  *
  * @author Keith Barreras <keith.barreras@gmail.com>
  * @package app\core
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