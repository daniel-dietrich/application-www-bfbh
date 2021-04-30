<?php

require_once '../app/core/database.php';

class UserPage extends Controller
{
    private $model;

    function __construct()
    {
        session_start();

        $this->model = $this->loadModel("user");
    }

    public function index()
    {
        $this->loadView('userpage/index');
    }

    public function logout()
    {
        $this->model->logout();
    }

    public function getConnection()
    {
        return $this->model->getDatabase()->getConnection();
    }

    public function getBmiStatus()
    {
        return $this->model->checkBmiStatus();
    }

    public function getUserInfo($info)
    {
        return $this->model->getUserInfo($info);
    }

    public function getMealInfo($meal, $info)
    {
        return $this->model->getMealInfo($meal, $info);
    }

    public function getWorkoutInfo($day)
    {
        return $this->model->getWorkoutInfo($day);
    }

    public function isLoggedIn()
    {
        return $this->model->isLoggedIn();
    }
}
