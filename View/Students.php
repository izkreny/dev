<?php

namespace View;

class Students 
{
    public function showStudentsAndGrades($students)
    {
        echo "<h1>Students & Grades 🗿🍇</h1>";
        echo "
            <table border='1'>
                <tr>
                    <th>Student (UINAC)</th>
                    <th>Final grade</th>
                    <th>Action</th>
                </tr>
        ";

        foreach ($students as $student) {
            echo "<tr>";
            echo "<td>{$student['name']} {$student['surname']} ({$student['uinac']})</td>";
            if ($student['final_grade'] === null) {
                echo "<td colspan='2'><a href='/grade?action=create&name={$student['name']}&id={$student['id']}'>ADD GRADE</a></td>";
            } else {
                echo "<td>{$student['final_grade']}</td>";
                echo "<td><a href='/grade?action=update&name={$student['name']}&id={$student['id']}'>CHANGE GRADE</a></td>";
            }
            echo "</tr>";
        }

        echo "
                <tr>
                    <td colspan='3'><a href='/student?action=create'>ADD STUDENT</a></td>
                </tr>
            </table>
        ";
    }

    public function showMessages($messages)
    {
        foreach ($messages as $message) {
            echo '<h3 style="color: red;">' . $message . '</h3>';
        }
    }
}
