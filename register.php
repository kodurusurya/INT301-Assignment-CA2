<?php

// connect db
require_once './db_connection.php';

// get data from form
extract($_POST);

if(empty($user_name) || empty($email) || empty($password))
{
    echo "<script>";
    echo 'alert("Required parameters are not set!\nPlease fill the registration form carefully!"),';
    echo "location.href='/'";
    echo "</script>";
    
}
else
{
    $check = "SELECT id from users where username='$user_name'";

    $run_check =  mysqli_query($conn,$check);

    if($run_check)
    {
        $row_count = mysqli_num_rows($run_check);

        if($row_count>0)
        {
            echo "<script>";
            echo "alert('Alert: This username is not available!'),";
            echo "location.href='./index.php'";
            echo "</script>";
            exit();
        }
        else
        {
            $query = "INSERT INTO users
            (
                username,
                email,
                password
                )
                VALUES
                (
                    '$user_name',
                    '$email',
                    '$password'
                )
            ";

            $run = mysqli_query($conn,$query);

            if($run)
            {
                session_start();
                $_SESSION['username'] = $user_name;
                echo "<script>";
                echo "alert('User Registered Successfully.'),";
                echo "location.href='./index.php'";
                echo "</script>";
            }
            else
            {
                echo mysqli_error($conn);
            }
        }
    }
    else
    {
        echo mysqli_error($conn);
    }
    
}


?>