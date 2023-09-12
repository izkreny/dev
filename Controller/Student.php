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
        // https://www.php.net/manual/en/function.htmlspecialchars
        // https://www.php.net/manual/en/function.strip-tags
        $data['name'] = htmlspecialchars(strip_tags($data['name']));
        $data['surname'] = htmlspecialchars(strip_tags($data['surname']));
        $data['uinac'] = htmlspecialchars(strip_tags($data['uinac']));

        
        if ($this->model->addStudent($data)) {
            $this->messages[] = "Student has been added successfully.";
        } else {
            $this->messages[] = "Student has NOT been added successfully!";
        }
    }
}

$student = new \Controller\Student();

if (!empty($_POST)) {
    $student->process($_POST);
}
$student->showMessages();
$student->showForm();
