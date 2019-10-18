<?php
$connect = mysqli_connect("localhost", "root", "", "bd");
$number = count($_POST["full_name"]);
if($number > 0)
{
    for($i=0; $i<$number; $i++)
    {
        if(trim($_POST["full_name"][$i] != ''))
        {
            $sql = "INSERT INTO users(full_name) VALUES('".mysqli_real_escape_string($connect, $_POST["full_name"][$i])."')";
            mysqli_query($connect, $sql);
        }
    }
    echo "Data Inserted";
}
else
{
    echo "Please Enter Full Name";
}
?>

