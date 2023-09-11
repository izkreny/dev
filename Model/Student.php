<?php

namespace Model;
use \PDO as PDO;

class Student
{
    private $conn;
    private $table = 'students';

    public function __construct()
    {
        $config = new \Core\Config('config.ini');
        $db = \Core\Database::getInstance($config->getMySQLPDODSN());
        $this->conn = $db->getConnection();
    }

    public function fetchStudentsAndGrades()
    {
        $querry = "SELECT students.id, students.name, students.surname, students.uinac, grades.final_grade "
            . "FROM students "
            . "LEFT JOIN grades "
            . "ON students.id=grades.fk_student_id";

        return $this->conn->query($querry)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addStudent($data)
    {
        $querry = "INSERT INTO {$this->table}"
            . "(name, surname, uinac)"
            . "VALUES"
            . "(:name, :surname, :uinac)";

        if ($this->conn->prepare($querry)->execute($data)) {
            return true;
        } else {
            return false;
        }
    }
}
