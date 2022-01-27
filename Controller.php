<?php 
/**
 * User: LaMarca_Creative
 * Date: 1/21/2022
 * Time: 7:40 PM
 */

namespace kb\phpmvc;

use kb\phpmvc\middlewares\BaseMiddleware;

/**
* Class Controller
*
* @author Keith Barreras <keith.barreras@gmail.com>
* @package kb\phpmvc
*/
class Controller
{
    public $layout = 'main';
    public $action = '';
    /**
     * @var \kb\phpmvc\middlewares\Basemiddleware[]
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
     * @return \kb\phpmvc\middlewares\BaseMiddleware[]
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}