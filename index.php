<?php
require_once('app/config/server.php');

class Router
{
    private $routes;

    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    public function handleRequest()
    {
        $url = $this->sanitizeUrl($_GET['url'] ?? '/');

        if ($this->isValidUrl($url)) {
            $this->routeRequest($url);
        } else {
            $this->showError('Invalid URL');
        }
    }

    private function sanitizeUrl($url)
    {
        return htmlspecialchars($url);
    }

    private function isValidUrl($url)
    {
        return preg_match('/^[a-zA-Z0-9\/]+$/', $url);
    }

    private function routeRequest($url)
    {
        if (array_key_exists($url, $this->routes)) {
            $file = 'app/' . htmlspecialchars($this->routes[$url]);

            if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
                $this->includeFile($file);
            } else {
                include $file;
            }
        } else {
            $this->showError('404 Not Found');
        }
    }

    private function includeFile($file)
    {
        if (file_exists($file)) {
            include $file;
        } else {
            $this->showError('404 Not Found');
        }
    }

    private function showError($message)
    {
        echo $message;
        exit;
    }
}

$routes = [
    'back/login' => 'modules/auth/login.php',
    'back/register' => 'modules/auth/register.php',
    'back/add' => 'modules/products/add.php',
    'home' => 'views/home.php',
    '/' => 'views/index.php',

];

$router = new Router($routes);
$router->handleRequest();
