<?php
    //php codes for connection with database
    $conn = new mysqli("localhost", "root", "", "tutorial");
    if ($conn -> connect_error)
    die("Connection Failed".$conn->connect_error);
?>

<!--HTML CODE-->


<html>
    <head>
        <title>Question and Answer Form</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Caveat+Brush" rel="stylesheet">
    </head>
    <body>
        <h1>Login</h1>
        <form action="" method="post">
            <p>Username: <input type="text" name="username" required></p> <br>
            <p>Password: <input type="password" name="password" required></p> <br>
            <input class="btn" type="submit" value="Login" name="btn">
        </form>
    </body>
</html>


<?php
    //code for getting data here
    if(isset($_REQUEST["btn"]))
    {
        $user = $_POST["username"];
        $pass = $_POST["password"];
        $sql = "SELECT * FROM tutorial.login where username LIKE '$user' and password LIKE '$pass' ";
        $result = $conn->query($sql);
        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc() )
            {
                $u = $row["username"];
                $u = $row["password"];
            }
            if (($user == $u)&&($pass == $p))
                {
                    echo '<script> alert("Success!"); </script>';
                }

        }
        else if($result->num_rows != 1)
        {
             echo '<script> alert("Failed!"); </script>';

        }
    }
?>