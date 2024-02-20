<?php
include 'db/db.php';


$conn=connection();
if(isset($_POST['addbrand']))
{
  $brand=$_POST['brandname'];
 
  $query="select * from brand where brand_name='$brand';";
  $result=mysqli_query($conn,$query);

  if(!mysqli_fetch_assoc($result)){

          $query="insert into brand(brand_name) values('$brand');";
          $result=mysqli_query($conn,$query);
        
        if($result){
          echo'suceeful';
        }
        else{
          echo'failer';
        }
  }
  else{
    echo'Already exit in brand';
  }



}


//add temper glass
if(isset($_POST['addnewtemper']))
{
  $brandid=$_POST['brandname'];
  $model=$_POST['model'];

      //onces confirmation in already in data
      $query="select * from temper where brand_id='$brandid' and model='$model';";
      $result=mysqli_query($conn,$query);

      if(mysqli_fetch_assoc($result))
      {
        echo ("Already in model");
      }
      else{
                  //insert value
               $nextValue= getAutoNextValeue('temper');
              $query="INSERT INTO temper(brand_id,model,smiler_model) VALUES('$brandid','$model','$nextValue');";

              $result=mysqli_query($conn,$query);
              if($result){
                echo'suceeful';
              }
              else{
                echo'failer';
              }

      }

    }


  
//add temper glass
if(isset($_POST['deletetemper']))
{
  $brandid=$_POST['brandname'];
  $model=$_POST['model'];

      //onces confirmation in already in data
      $query="select * from temper where brand_id='$brandid' and model='$model';";
      $result=mysqli_query($conn,$query);

      if(!mysqli_fetch_assoc($result))
      {
        echo ("Not Exit in model");
      }
      else{
                  //delete value
               $nextValue= getAutoNextValeue('temper');
              $query="delete from temper where brand_id='$brandid' and model='$model';";

              $result=mysqli_query($conn,$query);
              if($result){
                echo'suceeful';
              }
              else{
                echo'failer';
              }

      }

    }



  if(isset($_POST['addaltertemper']))
  {

    $newbrand=$_POST['newbrandname'];
    $newmodel=$_POST['newbrandmodel'];
    $altermodel=$_POST['alterbrandmodel'];


    $query= "select * from temper where brand_id='$newbrand' and model='$newmodel';";
    $result=mysqli_query($conn,$query);

    
    
    if(mysqli_fetch_assoc($result))
    {
      error_reporting(E_ALL);

// Display errors on the screen (for development/debugging purposes)
ini_set('display_errors', 1);

      die ("Already in model");
      
    }

    print $altermodel;
    $query="insert into temper(brand_id,model,smiler_model) values('$newbrand','$newmodel','$altermodel');";
    $result=mysqli_query($conn,$query);
          
          if($result){
            echo'suceeful';
          }
          else{
            echo'failer';
          }
  }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=900px, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Home</title>
    <script src="script.js"></script>
</head>
<body>
  <?php
  include 'subfile/navigation.php';
  ?>



<nav>


<div class="continer">
  <div class="add1">
   <form method="post" class="fomee" action="add.php">

        <div class="groupinput">
          <h1 class="title">Add Smiler Device Temper Glass</h1>
          <div class="textfield">
            <label class="lab">Brand Name</label>
            <select   name="newbrandname" class="inp">
             
              <?php
              getBrandList();
              ?>
            </select>
        
          </div>   
          <div class="textfield">
            <label class="lab">model</label>
            <input name="newbrandmodel" class="inp" type="text" required>
          </div>   


          <div class="textfield">
            <label class="lab">Alter Brand Name</label>
            <select  id="brand" name="alterbrandname" class="inp">
            <option>Selcet Brand</option>
              <?php
              getBrandList();
              ?>
            </select>
        
          </div>   
          <div class="textfield">
            <label class="lab">Alter model</label>

            <select   id="model" name="alterbrandmodel"  class="inp">
              <?php
              // this for 
            //   getModelList();
              ?>
            </select>

          </div>   

          
          <button class="but" name="addaltertemper" >Add Alter Temper</button>
        </div>

</form>

  <form class="fomee" method="post" action="add.php">


          <div class="groupinput">
            <h1 class="title">Remove Temper Glass Model</h1>
            <div class="textfield">
              <label class="lab">Brand Name</label>
              <select name="brandname" class="inp">
                <?php
                getBrandList();
                ?>
              </select>
           
            </div>   
            <div class="textfield">
              <label class="lab">model</label>
              <input name="model" class="inp" type="text" required>
            </div>   
            <button class="but" name="deletetemper"  type="submit" >Remove Model</button>
          </div>

        </form>




  </div>

  <div class="add2">


    <div name="newtemperadd">
     
       <form class="fomee" method="post" action="add.php">


          <div class="groupinput">
            <h1 class="title">Add New Temper Glass</h1>
            <div class="textfield">
              <label class="lab">Brand Name</label>
              <select name="brandname" class="inp">
                <?php
                getBrandList();
                ?>
              </select>
           
            </div>   
            <div class="textfield">
              <label class="lab">model</label>
              <input name="model" class="inp" type="text" required>
            </div>   
            <button class="but" name="addnewtemper"  type="submit" >Add New Temper</button>
          </div>

        </form>

    
        <div>

    </div >
    <form class="fomee" method="post" action="add.php">

          <div class="groupinput">
            <h1 class="title">Add New Brand Name</h1>
            <div class="textfield">
              <label class="lab">Brand Name</label>
              <input name="brandname" class="inp" type="text" required>
            </div>   
            <button class="but" name="addbrand"  type="submit" > Add Brand </button>
          </div>
          
      </form>
    
     </div>
</div>
</div>





</body>
</html>

<style>


</style>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        // On brand selection change
        document.getElementById('brand').addEventListener('change', function () {
            var brand = this.value;
          
            // Create a new XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Configure it: POST-request for 'getModels.php', asynchronous
            xhr.open('POST', 'getModels.php', true);

            // Set the request header to indicate the type of content being sent
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            // Set up the callback function for when the request completes
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Clear and populate the model dropdown with the fetched models
                    document.getElementById('model').innerHTML = xhr.responseText;
                }
            };

            // Prepare the data to be sent
            var data = 'brand=' + encodeURIComponent(brand);

            // Send the request
            xhr.send(data);
        });
    });
</script>
