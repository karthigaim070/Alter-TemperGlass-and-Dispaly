


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
<div class="container">

<div class="box">
<div class="header"> 
        <h1>
            Alter Temper Glass and Display System
        </h1>
    </div>
<div>
<button  onclick="window.location.href = 'home.php';" class="admin-login-button" hrel >Alter Temper Glasss  Login</button>
<button onclick="window.location.href = 'display/home.php';" class="student-login-button">Alter Display Login</button>
</div>

</div>


</div>

</body>
</html>

<style>
    
body{
    width: 100%;
    height: 100vh;
    background: rgb(73,2,108);
    background: linear-gradient(0deg, rgba(73,2,108,1) 0%, rgba(255,0,217,1) 100%);

}

/* index page Style */

.container{
    display: flex;
    padding: 10px;
    flex-direction: column;
    width: 100%;
    margin: 0px auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100%;
    background: rgb(73,2,108);
    background: linear-gradient(0deg, rgba(73,2,108,1) 0%, rgba(255,0,217,1) 100%);
    margin: 0;
}

.box{

  border-radius: 10px;
  padding: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background-color: whitesmoke;
  width: auto;

  

}
.admin-login-button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin: 10px;
  }
  
  .student-login-button {
    background-color: #28a745;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin: 10px;
  }
  

</style>



