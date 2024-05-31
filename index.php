



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Submit">

    </form>
</body>
</html>



<?php
    
    /*  $username = $_GET["name"];
     $password = $_GET["password"]; 
    $username = $_POST["name"];
    $password = $_POST["password"];

    echo"name: {$username} <br> password: {$password}" 

    $date = date('y-m-d,l');
    echo "today is {$date}"; 

    $capitals = array("USA" => "Washington D.C",
                        "INDIA" => "New Dehli",
                        "NEPAL" => "Kathmandu");

    echo $capitals['NEPAL']; */

?>