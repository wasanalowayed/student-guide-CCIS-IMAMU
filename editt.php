<?php

$connection = mysqli_connect("localhost","root","");

$db = mysqli_select_db($connection,"myss");
$edit = $_GET['edit'];

$sql = "select * from search where id = '$edit'";

$run = mysqli_query($connection,$sql);


while($row=mysqli_fetch_array($run))
{
    $id = $row['id'];

    $floor =$row["floor"];
    
    $OfficeName =$row["OfficeName"];
    
    $FirstLastName =$row["FirstLastName"];
    
    $ServiceNumber =$row["ServiceNumber"];
    
    $OfficeNumber =$row["OfficeNumber"];
}

?>

<?php
   $connection = mysqli_connect("localhost","root","");

    $db = mysqli_select_db($connection,"myss");


    if(isset($_POST['submit']))
        {
          $edit = $_GET['edit'];  
          $floor = $_POST["floor"];
          $OfficeName = $_POST["OfficeName"];
          $FirstLastName = $_POST["FirstLastName"];
          $ServiceNumber = $_POST["ServiceNumber"];
          $OfficeNumber = $_POST["OfficeNumber"];
        ;

           $sql = "update search set floor= '$floor',OfficeName= '$OfficeName',FirstLastName='$FirstLastName' ,ServiceNumber='$ServiceNumber',OfficeNumber ='$OfficeNumber' where id =  '$edit'";

           if(mysqli_query($connection,$sql))
           {

            echo '<script> location.replace("editSearch.php")</script>';  
           }
           else
           {
           echo "Some thing Error" . $connection->error;

           }

        }

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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
            <form  class="add-form"  method="post">
          <input type="hidden" value="<?php echo $id;  ?>" >

       
          <label for="">الدور</label>
            <input type="text" name="floor" required placeholder="ادخل الدور" value="<?php echo $floor;  ?>">
            
            <br><br>
            
            <label for="">اسم المكتب</label>
            <input type="text" name="OfficeName" required placeholder="ادخل اسم المكتب" value="<?php echo $OfficeName;  ?>">
           
            <br><br>
           
            <label for="">اسم الموظفة</label>
            <input type="text" name="FirstLastName" required placeholder="ادخل اسم الموظفة" value="<?php echo $FirstLastName;  ?>">
            
            <br><br>

            <label for="">رقم الصيانه</label>
            <input type="text" name="ServiceNumber" required placeholder="ادخل رقم الصيانة" value="<?php echo $ServiceNumber;  ?>">
          
            <br><br>

            <label for="">رقم المكتب</label>
            <input type="text" name="OfficeNumber" required placeholder="ادخل رقم المكتب" value="<?php echo $OfficeNumber;  ?>">
        

           
            
          
            <br><br>
            <input class="insert" type="submit" name="submit" value="تعديل">
        </form>

    
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
