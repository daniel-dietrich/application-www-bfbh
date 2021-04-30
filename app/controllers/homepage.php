<?php

require_once '../app/core/database.php';

class HomePage extends Controller
{
    private $model;

    function __construct()
    {
        session_start();

        $this->model = $this->loadModel("user");
    }

    public function index()
    {
        $this->loadView('homepage/index');
    }

    public function register()
    {
        $data = [
            'email' => trim($_POST['rEmail']),
            'haslo' => trim($_POST['rHaslo']),
            'imieNazwisko' => trim($_POST['rImieNazwisko']),
            'waga' => trim($_POST['rWaga']),
            'wzrost' => trim($_POST['rWzrost']),
            'wiek' => trim($_POST['rWiek']),
            'cel' => trim($_POST['rCel']),
        ];

        if (!$this->model->register($data)) {
            $this->index();
        }
    }

    public function login()
    {
        $data = [
            'email' => trim($_POST['lEmail']),
            'haslo' => trim($_POST['lHaslo'])
        ];

        if (!$this->model->login($data)) {
            $this->index();
        }
    }

    public function printLoginErrors()
    {
        $this->model->printLoginErrors();
    }

    public function printRegisterErrors()
    {
        $this->model->printRegisterErrors();
    }
}
