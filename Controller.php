<?php 
/**
 * User: LaMarca_Creative
 * Date: 1/21/2022
 * Time: 7:40 PM
 */

namespace app\core;

use app\core\middlewares\BaseMiddleware;

/**
* Class Controller
*
* @author Keith Barreras <keith.barreras@gmail.com>
* @package app\core
*/
class Controller
{
    public $layout = 'main';
    public $action = '';
    /**
     * @var \app\core\middlewares\Basemiddleware[]
     */
    protected $middlewares = [];

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function render($view, $params = [])
    {
        return Application::$app->view->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    /**
     * @return \app\core\middlewares\BaseMiddleware[]
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}