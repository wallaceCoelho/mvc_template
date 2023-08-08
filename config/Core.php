<?php

class Core
{
    public function run($routes)
    {
        $url = '/';

        isset($_GET['url']) ? $url .= $_GET['url'] : '';
        
        ($url != '/') ? $url = rtrim($url, '/') : $url;

        $routeFound = false;

        foreach($routes as $path => $controller)
        {
            $pattern = '#^'.preg_replace('/{id}/', '(\w*)', $path).'$#';

            if (preg_match($pattern, $url, $matches))
            {
                array_shift($matches);

                $routeFound = true;
                
                [$currentController, $action] = explode('@', $controller);

                require_once __DIR__."/../app/controllers/$currentController.php";

                $newController = new $currentController();
                $newController->$action($matches);
            }
        }

        if(!$routeFound)
        {
            require_once __DIR__."/../app/controllers/ErroController.php";
            $controller = new ErroController();
            $controller->notFound();
        }
    }
}