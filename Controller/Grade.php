<?php

namespace Controller;

class Grade 
{
    private $model;
    private $view;
    private $messages = [];

    public function __construct()
    {
        $this->model = new \Model\Grade();
        $this->view = new \View\Grade();
    }

    public function showMessages()
    {
        if (!empty($this->messages)) {
            $this->view->showMessages($this->messages);
        }
    }

    public function showForm($data)
    {
        $this->view->showForm($data);
    }

    public function process($data)
    {
        if($data['action'] === 'create') {
            unset($data['action']);
            if ($this->model->createGrade($data)) {
                $this->messages[] = "Grade added successfully.";
            } else {
                $this->messages[] = "Grade NOT added successfully!";
            };
        } elseif ($data['action'] === 'update') {
            if ($this->model->updateGrade($data['final_grade'], $data['fk_student_id'])) {
                $this->messages[] = "Grade updated successfully.";
            } else {
                $this->messages[] = "Grade NOT updated successfully!";
            };
        }
    }
}

$grade = new \Controller\Grade();

// Check GET and POST variables and call View with arguments
if (!empty($_GET)) {
    $grade->showForm($_GET);
}

if (!empty($_POST)) {
    $grade->process($_POST);
}

$grade->showMessages();
