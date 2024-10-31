<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head><meta name="viewport" content="with=device-width, initial-scale=1.0" />
 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>دليل طالبات</title>
  <link rel="stylesheet" href="styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>

    <section calss="header">
      <nav>
        
        <a href="myInterface.html"><img src="pic1/logo1.png"></a> 
        <div class ="nav-links" id="navLinks">
  
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
            <li><a href="emplyeepage.html">الرجوع للقائمة</a></li>
    
            <li><a href="myInterface.html">الخروج</a></li>
          </ul>

            </div>
            <i class="fa fa-bars" onclick="showMenu()" ></i>
             </nav>

            </section>
           

</div>

  <!---هنا جافا سكربت للقائمه بالايفون-->
  <script>
    var navLinks = document.getElementById("navLinks")
    function showMenu(){
        navLinks.style.left="0";
      
    }
    function hideMenu(){
       navLinks.style.left= "-200px"; 
    }

   </script>
 
  </body>
</html>
<style>
     .alert{
  text-align: center;
  font-size:20px;
padding: 100px;
color: #c56969; 
}
</style>
<?php
  include "connection.php";
  if(isset($_GET['deleteid']))
  {
    $id=$_GET['deleteid'];

    $sql=" delete from `search` where id=$id";
    $result= mysqli_query($con,$sql);
    if($result){
      echo '<script>alert("تم الحذف بنجاح")</script>';
      echo '<div class="alert alert-success alert-dismissable" id="flash-msg">
      <h4><i class="icon fa fa-check"></i>Delete Successfull</h4>
      <a href="editSearch.php" id="button" type="submit" class="massage" > الرجوع للقائمة السابقة</a>
      </div>';
    
    }else{
      
      die(mysqli_error($con));
    }

  }
  ?>
  