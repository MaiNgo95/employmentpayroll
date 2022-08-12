<?php
$servername ="localhost";
$username="root";
$password="";
$database_name="employmentpayroll"

$conn= mysqli_connect($servername, $username, $password, $database_name);
if(!$conn)
{
    die("Connection failed" .mysqli_connect_error());
}
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $SSN    = $_POST['SSN'];
    
    $sql_query = "INSERT INTO employer (name, birthday, gender, SSN) VALUES ('$name','$birthday','$gender','$SSN')";

    if (mysqli_query($conn, $sql_query))
    {
        echo "success!";
    }
    else
    {
        echo "Error!" .$sql . "" . mysqli_error($conn);
    }
    mysql_close($conn);
}


?>