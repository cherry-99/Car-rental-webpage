<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Creating database</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "chirag@150915";
    $conn = mysqli_connect($servername , $username , $password);
    if(!$conn)
    {
        die("Connection failed : " .mysqli_connect_error());
    }
    else
    {
        echo "Connected successfully";
    }
    $sql = "CREATE database login_credentials;";
    $result = mysqli_query($conn , $sql);
    if($result)
    {
        echo "Database created successfully";
    }
    else
    {
        die("Error creating database : " .mysqli_error($conn));
    }
    $table = "CREATE TABLE details(fname VARCHAR[30] NOT NULL, lname VARCHAR[15] NOT NULL , email VARCHAR[30] NOT NULL , phno INT  NOT NULL , dob VARCHAR[10] , psw VARCHAR[15]);";
    if(mysqli_query($conn , $table))
    {
        echo "Table created successfully ";
    }
    else
    {
        die("Failed ot create table : " .mysqli_error($conn));
    }
    ?>

</body>
</html>