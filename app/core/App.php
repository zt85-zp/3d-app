<?php

use MyApp\Controller;
use MyApp\Router;

class App {
    protected $router;

    public function __construct() {
        $this->initRouter();
    }

    protected function initRouter() {
        $this->router = new Router();
        $this->defineRoutes();
    }

    protected function defineRoutes() {
        $this->router->addRoute('', 'HomeController@index');
        $this->router->addRoute('home', 'HomeController@index');
        $this->router->addRoute('about', 'AboutusController@index');
        $this->router->addRoute('models', 'ModelsController@index');

        $this->router->addRoute('models/cola1', 'ModelsController@cola1');
        $this->router->addRoute('models/cola2', 'ModelsController@cola2');
        $this->router->addRoute('models/cola3', 'ModelsController@cola3');
        $this->router->addRoute('models/cola4', 'ModelsController@cola4');
        $this->router->addRoute('models/cola5', 'ModelsController@cola5');
        $this->router->addRoute('models/cola6', 'ModelsController@cola6');

        $this->router->addRoute('models/juice', 'ModelsController@juice');
        $this->router->addRoute('models/pepsi', 'ModelsController@pepsi');
        $this->router->addRoute('models/soda', 'ModelsController@soda');
        $this->router->addRoute('models/fanta', 'ModelsController@fanta');
        $this->router->addRoute('models/water', 'ModelsController@water');

        $this->router->addRoute('contact', 'ContactController@index');
    }

    public function run() {
        $path = trim($_SERVER['REQUEST_URI'], '/');
        $assignmentIndex = strpos($path, 'index.php');
        if ($assignmentIndex !== false) {
            $extractedUrl = substr($path, $assignmentIndex + strlen('index.php') + 1);
            $controllerAction = $this->router->route(trim($extractedUrl, '/'));
        }

        if ($controllerAction) {
            list($controllerName, $action) = explode('@', $controllerAction);

            require_once './app/controllers/' . ucfirst($controllerName) . '.php';

            $controllerClassName = ucfirst($controllerName);
            $controllerInstance = new $controllerClassName();

            $controllerInstance->$action();
        } else {
            // Handle 404 or redirect to a default page
            $this->handle404();
        }
    }

    protected function handle404() {
        // Handle 404 - You can show a custom 404 page or redirect to a default page
        $controller = new Controller();
        $controller->view('404');
    }
}
