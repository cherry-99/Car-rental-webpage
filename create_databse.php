<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP</title>
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
    mysqli_select_db($conn ,'login_credentials');
    if(!get_magic_quotes_gpc())
    {
        $fname = addslashes($_POST['fname']);
        $lname = addslashes($_POST['lname']);
        $email = addslashes($_POST['email']);
        $dob = addslashes($_POST['dob']);
        $psw = addslashes($_POST['psw']);
    }
    else
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $psw = $_POST['psw'];
    }
    $phno = $_POST['phno'];
    $insert = "INSERT INTO details(fname , lname , email , phno , dob , psw) VALUES('$fname' , '$lname' , '$email' , $phno , '$dob' , '$psw');";
    if(mysqli_query($conn , $insert))
    {
        echo "Values inserted successfully " , "<br>";
    }
    else
    {
        die('Could not enter data: ' . mysqli_error($conn));
    }
    $sql = "SELECT fname, lname, 
    email FROM details";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) 
    {
        while($row = mysqli_fetch_assoc($result)) 
        {
            echo "fname: " . $row["fname"]. 
		    " - lname: " . $row["lname"]. " " . 
		    $row["email"]. "<br>";
        }
    } 
    else 
    {
        echo "0 results";
    }
    mysqli_close($conn);
    //header('Location: login.html');
    exit;
    ?>
</body>
</html>