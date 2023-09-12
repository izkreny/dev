<?php

namespace View;

class Student
{
    public function showForm()
    {
        echo "<h1>Add Student</h1>";
        echo "
            <form action='' method='post'>
                Name: <input type='text' name='name' required><br>
                Surname: <input type='text' name='surname' required><br>
                UINAC: <input type='text' name='uinac' required><br>
                <input type='submit' value='ADD STUDENT'>
            </form>
            <a href='/'>Back to Students & Grades</a> 
        ";
    }

    public function showMessages($messages)
    {
        foreach ($messages as $message) {
            echo "<h3 style='color: red;'>" . $message . "</h3>";
        }
    }
}
