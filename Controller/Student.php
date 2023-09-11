<?php

namespace Controller;

class Student
{
    private $model;
    private $view;
    private $messages = [];

    public function __construct()
    {
        $this->model = new \Model\Student();
        $this->view = new \View\Student();
    }

    public function showMessages()
    {
        if (!empty($this->messages)) {
            $this->view->showMessages($this->messages);
        }
    }

    public function showForm()
    {
        $this->view->showForm();
    }

    public function process($data)
    {
    }
}

$student = new \Controller\Student();

if (!empty($_POST)) {
    $student->process($_POST);
}
$student->showMessages();
$student->showForm();
