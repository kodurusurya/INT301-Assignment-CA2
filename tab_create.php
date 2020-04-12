<?php

//connect db
require_once 'db_connection.php';

$query = "CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    username varchar(255) NOT NULL UNIQUE,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL
)";

$run = mysqli_query($conn,$query);

if($run)
{
    echo 'table created';
}
else
{
    echo mysqli_error($conn);
}

?>