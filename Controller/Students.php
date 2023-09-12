<?php

namespace Controller;

class Students
{
    private $model;
    private $view;
    private $messages = [];

    public function __construct()
    {
        $this->model = new \Model\Student();
        $this->view = new \View\Students();
    }

    public function showMessages()
    {
        if (!empty($this->messages)) {
            $this->view->showMessages($this->messages);
        }
    }

    public function showStudentsAndGrades()
    {
        $this->view->showStudentsAndGrades($this->model->fetchStudentsAndGrades());
    }
}

$students = new \Controller\Students();

if (!empty($_POST)) {
    $students->process($_POST);
}
$students->showMessages();
$students->showStudentsAndGrades();
