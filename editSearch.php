<?php
  include "connection.php";
  ?>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
             <div class= "ff">
            <i class="fa fa-bars" onclick="showMenu()" ></i>
            </div>
             </nav>

            </section>
            <section  class="fform ">
             <form action="editSearch.php" method="post">
             <input type="text" placeholder="                اسم الموظفة" name="search">
             <input type="submit" name="submit" value=" بحث ">
            </form>
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

 <?php

$username = "root";
$password ="";
$database = new 
PDO("mysql:host=localhost;dbname=myss; charset=utf8;", $username,$password);


if (isset($_POST["submit"])) {
 $str = $_POST["search"];
    
 $sth = $database->prepare("SELECT * FROM search WHERE CONCAT(FirstLastName) LIKE '%$str%' ");
   
  
 $sth->setFetchMode(PDO:: FETCH_OBJ);
 $sth -> execute();

 if($row = $sth->fetch())
 {
  ?>





    <table class="edit">
  <thead>
    <tr>
    <th scope="col">No</th>
      <th scope="col">FirstLastName </th>
      <th scope="col">operation</th>
   
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT * FROM search WHERE CONCAT(FirstLastName) LIKE '%$str%' ";
    $result=mysqli_query($con,$sql);
    if($result){

     $row=mysqli_fetch_assoc($result);
        $id= $row['id'];
       $FirstLastName= $row['FirstLastName'];
       echo' <tr>
       <th scope="row">'.$id.'</th>
       <td>'.$FirstLastName.'</td>
       <td>
     
       <button class= "btn btn-primary"><a href="editt.php?
       edit='.$id.'" class="text-light">Edit</a></button>
       
       <button class= "btn btn-danger"><a href="Delete.php?
       deleteid='.$id.'" class="text-light">Delete</a></button>
       
      </td>
 
     </tr>';
      }

    
    ?>

  </tbody>
</table>

 
 <?php 
 }
  

 else {

  echo '<div class="alert" >
  <h ><i></i> ابحث مره اخره عن اسم الموظفه او للاسف لا يوجد!!</h>
  </div>';
  


} 


}
?>


<style>

.nav-links ul li{
  top: -45px;
}
 th{
  color: #4a5977;
   padding: 10px}
   td{
    padding: 1px 15px;
   }
   img {
       margin-left:900px ;
      }
      .edit{
      margin: 31px auto;
      border-radius: 13px;
     text-align:center ;
       position: absolute;
       width: 30%;
      height: 10%;
       top: 50%;
       left: 50% ;
    
       transform: translate(-50% ,-50%);

      }
      .fform{
  margin: 31px auto;

  border-radius: 13px;
  text-align:center ;
    position: absolute;
    top: 50%;
    left: 50% ;
    transform: translate(-50% ,-50%);
}

.fform input[type="submit"]{
 

 display:inline-block;
 text-decoration: none;
 color:#F0F0F0;
 border: 1px solid #F0F0F0;
 padding:  5px 15px;
border-radius: 10px;
 background:#122242;
 position: relative;
 cursor: pointer;
 font-size: 13px;
 width: 10%;
  height: 40px;

}
.fform input[type="text"] {
  margin-top: 35px;
  padding: 5px 15px;
  font-size: 20px;
  border: 1px solid #6e86b5;
  border-radius: 10px;
  width: 30%;
  height: 40px;
  background: #f1f1f1;
 
}

.alert{
  text-align: center;
  font-size:15px;
margin-top: 100px;
color: #c56969; 
}
@media (max-width:700px) {
  img {
       margin-left:170px ;
      }
  table{
 
    margin:30px  ;
  }
 
    th{ padding: 1px}
    
    
  .alert{
  font-size: 12px;
top: 120px;


}
nav .ff{

margin-top: -30px;

}
}
.fform{

    width: 80%;
    height: 50%;
   background-color: #bdc3cf;
   
}

.fform input[type="text"] {

  padding: 5px 10px;
  font-size: 10px;
  
 
}
.fform input[type="submit"] {

padding: 5px 30px;
font-size: 10px;


}
.btn{
  margin-top: 20px;
}

</style>

