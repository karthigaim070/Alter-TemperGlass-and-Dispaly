<?php
include 'db/db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=900px, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
  <?php
  include 'subfile/navigation.php';
  ?>

<div id="body">
<!-- <div class="add1">
<div class="Scrollable">
//<?php
 //listAltervie();
//?>

</div>
</div> -->

<!-- next -->
<div class="homeadd2">
<h1 class="title">Alter Phone Temper Glass </h1>
<div class="box11">

<form class="example" method="post" action="home.php">
<div class="textfield">
            <select   name="searchBrandname" class="inp">  
            <option value="0">Select Option</option>
              <?php
           
              getBrandList();
              ?>
            </select>
        
          </div>   
  <input type="text" placeholder="Search.." name="sea" class="search">
  <button class="search_button" type="submit" name="search">Search</button>
</form>
</div>

<div class="Scrollable1">>
  <?php
  if(isset($_POST['search']))
  {
    $search=$_POST['sea'];
    $search_brand=$_POST['searchBrandname'];
    if(!$search_brand)
    {
      searchList($search);
    }
    else{
      searchList1($search,$search_brand);
    }

  }  

  ?>
</div>
</div>
</div>






</body>
</html>

<style>


</style>