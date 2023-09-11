<?php

namespace View;

class Student
{
    public function showForm()
    {
        echo '
            <form action="" method="post">
                Name: <input type="text" name="name" required><br>
                Surname: <input type="text" name="surname" required><br>
                UINAC: <input type="text" name="uinac" required><br>
                <input type="submit" value="ADD STUDENT">
            </form>
        ';
    }

    public function showMessages($messages)
    {
        foreach ($messages as $message) {
            echo '<h3 style="color: red;">' . $message . '</h3>';
        }
    }
}
