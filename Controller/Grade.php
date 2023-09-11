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

    public function showForm() // TODO: arguments
    {
        $this->view->showForm();
    }

    public function process($data)
    {
    }
}

$grade = new \Controller\Grade();

// Check GET and POST variables and call View with arguments
if (!empty($_GET['token'])) {
    $grade->process($_GET['token']);
}

$grade->showMessages();
