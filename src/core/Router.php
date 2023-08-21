<?php

namespace SinaR\CustomFramework\core;
class Router
{

    public Request $request;
    public Response $response;
    protected array $routes = [];

    /**
     * @param Request $request
     */
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }


    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;

        // this is for when we don't have the specific route
        if ($callback === false) {
            $this->response->setStatusCode(404);
            return $this->renderView("_404");
        }

        // only renders by view name
        if (is_string($callback)) {
            return $this->renderView($callback);
        }

        // prevent from calling a function statically
        if (is_array($callback)) {
            $callback[0] = new $callback[0]();
        }

        // call the function at the end
        return call_user_func($callback, $this->request);
    }

    public function renderView($view, $params = [])
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view, $params);
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function renderContent($viewContent)
    {
        $layoutContent = $this->layoutContent();
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    protected function layoutContent()
    {
        ob_start();
        include_once Application::$ROOT_DIR . "/app/views/layouts/main.php";
        return ob_get_clean();
    }

    protected function renderOnlyView($view, $params)
    {
        foreach ($params as $key => $value) {
            // creating new variable by the key as the variable name
            $$key = $value;
        }
        ob_start();
        include_once Application::$ROOT_DIR . "/app/views/$view.php";
        return ob_get_clean();
    }

}