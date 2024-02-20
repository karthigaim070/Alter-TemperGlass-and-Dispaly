<?php
// getModels.php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the selected brand from the POST data
    $selectedBrand = $_POST['brand'];

    // Simulate fetching models from a database based on the selected brand
    // Replace this with your actual logic to fetch models
    
    $db_host = 'localhost:3308';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'temperglass';
    
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

   $query="SELECT * FROM temper where brand_id='$selectedBrand' ORDER BY model ASC;";
   $result=mysqli_query($conn,$query);
   
   if(!$result)
   {
       die('Counter Query is Not Working');
   }
     print_r($result);
   $options = '<option value="">Select Model</option>';
   while($row=mysqli_fetch_assoc($result))
   {
    $model=$row['model'];
    $id=$row['smiler_model'];
       $options .= '<option value="' . $id . '">' . $model . '</option>';
       
   }



    // Return the HTML options
    echo $options;
}
