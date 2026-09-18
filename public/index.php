<?php

session_start();

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../app/Middleware/AuthMiddleware.php';
require_once __DIR__ . '/../routes/web.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$base = '/si-akademik2/public';
if (str_starts_with($uri, $base)) {
    $uri = substr($uri, strlen($base));
}
$uri = $uri === '' ? '/' : $uri;

$method = $_SERVER['REQUEST_METHOD'];

function checkMiddleware($pattern, $protectedRoutes)
{
    if (in_array($pattern, $protectedRoutes)) {
        $middleware = new AuthMiddleware();
        $middleware->handle();
    }
}

if (isset($routes[$method][$uri])) {
    checkMiddleware($uri, $protectedRoutes);

    [$controllerName, $action] = $routes[$method][$uri];
    $controller = new $controllerName();
    $controller->$action();
} else {
    $found = false;

    foreach ($routes[$method] as $pattern => $handler) {
        if (strpos($pattern, '{') === false) {
            continue;
        }

        $regex = preg_replace('#\{[a-zA-Z0-9_]+\}#', '([^/]+)', $pattern);
        $regex = '#^' . $regex . '$#';

        if (preg_match($regex, $uri, $matches)) {
            array_shift($matches);

            checkMiddleware($pattern, $protectedRoutes);

            [$controllerName, $action] = $handler;
            $controller = new $controllerName();
            call_user_func_array([$controller, $action], $matches);
            $found = true;
            break;
        }
    }

    if (!$found) {
        http_response_code(404);
        echo "404 - Halaman tidak ditemukan";
    }
}