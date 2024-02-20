
<?php

    $db_host = 'localhost:3308';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'temperglass';
    
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    $query="SELECT * FROM temper;";
    $result=mysqli_query($conn,$query);
    if($result)
    {


        while($row = mysqli_fetch_assoc($result))
        {
            echo '<pre>';print_r($row);echo '</pre>'; 
        
        }

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>