<?php

namespace View;

class Grade
{
    public function showForm($name, $id, $action)
    {
        echo "
            <form action='' method='post'>
                Final grade for {$name}: <input type='number' name='final_grade' required><br>
                <input type='hidden' name='fk_student_id' value='{$id}'>
                <input type='hidden' name='action' value='{$action}'>
                <input type='submit' value='SAVE'>
            </form>
        ";
    }

    public function showMessages($messages)
    {
        foreach ($messages as $message) {
            echo '<h3 style="color: red;">' . $message . '</h3>';
        }
    }
}
