<?php

namespace Model;
use \PDO as PDO;

class Grade
{
    private $conn;
    private $table = 'grades';

    public function __construct()
    {
        $config = new \Core\Config('config.ini');
        $db = \Core\Database::getInstance($config->getMySQLPDODSN());
        $this->conn = $db->getConnection();
    }

    public function updateGrade($data)
    {
    }

    public function createGrade($data)
    {
        $query = "INSERT INTO {$this->table}"
            . "(final_grade, fk_student_id)"
            . "VALUES"
            . "(:final_grade, :fk_student_id)";

        if ($this->conn->prepare($query)->execute($data)) {
            return true;
        } else {
            return false;
        }
    }
}
