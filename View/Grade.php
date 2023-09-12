<?php

namespace View;

class Grade
{
    public function showForm($data)
    {
        echo "<h1>Change or Add Grade</h1>";
        echo "
            <form action='' method='post'>
                Final grade for <b>{$data['name']}</b>: <input type='number' name='final_grade' required><br>
                <input type='hidden' name='fk_student_id' value='{$data['id']}'>
                <input type='hidden' name='action' value='{$data['action']}'>
                <input type='submit' value='SAVE'>
            </form>
            <a href='/'>Back to Students & Grades</a> 
        ";
    }

    public function showMessages($messages)
    {
        foreach ($messages as $message) {
            echo '<h3 style="color: red;">' . $message . '</h3>';
        }
    }
}
