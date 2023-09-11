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

    public function process($data)
    {
        // https://www.php.net/manual/en/function.htmlspecialchars
        // https://www.php.net/manual/en/function.strip-tags
        $data['name'] = htmlspecialchars(strip_tags($data['name']));
        $data['surname'] = htmlspecialchars(strip_tags($data['surname']));
        $data['uinac'] = htmlspecialchars(strip_tags($data['surname']));

        
        if ($this->model->addStudent($data)) {
            $this->messages[] = "Your account has been created successfully!";
        } else {
            $this->messages[] = "Your account has NOT been created successfully!";
        }
    }
}

$students = new \Controller\Students();

if (!empty($_POST)) {
    $students->process($_POST);
}
$students->showMessages();
$students->showStudentsAndGrades();
