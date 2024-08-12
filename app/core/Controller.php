<?php

namespace MyApp;

class Controller
{

    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function view($viewName, $data = [])
    {
        $viewFile = "./app/views/" . $viewName . ".php";

        if (file_exists($viewFile)) {
            extract($data);
            require_once $viewFile;
        } else {
            echo "Error: view file not found";
        }
    }

    public function template($viewName, $data = [])
    {
        $viewFile = "./app/views/templates/" . $viewName . ".php";

        if (file_exists($viewFile)) {
            extract($data);
            require_once $viewFile;
        } else {
            echo "Error: template file not found";
        }
    }

    public function model($model)
    {
        require_once './app/Models/' . $model . '.php';
        return new $model($this->db);
    }

    public function redirect($url)
    {
        header("Location: $url");
        exit;
    }
}
