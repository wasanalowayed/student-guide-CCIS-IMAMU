<html>

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
       
        <form  class="add-form"   action="addpage.php" method="post">

        <label for="">الدور</label>
            <input type="text" name="floor" required placeholder="ادخل الدور">
            
            <br><br>
            
            <label for="">اسم المكتب</label>
            <input type="text" name="OfficeName" required placeholder="ادخل اسم المكتب">
           
            <br><br>
           
            <label for="">اسم الموظفة</label>
            <input type="text" name="FirstLastName" required placeholder="ادخل اسم الموظفة">
            
            <br><br>

            <label for="">رقم الصيانه</label>
            <input type="text" name="ServiceNumber" required placeholder="ادخل رقم الصيانة">
          
            <br><br>

            <label for="">رقم المكتب</label>
            <input type="text" name="OfficeNumber" required placeholder="ادخل رقم المكتب">
        


            <br><br>
            <input class="insert" type="submit" name="insert" value="اضافة">
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

<?php

// php code to Insert data into mysql database from input text using PDO
if(isset($_POST['insert'])){
    try{

    // connect to mysql

    $username = "root";
    $password ="";
    $database = new 
    PDO("mysql:host=localhost;dbname=myss; charset=utf8;", $username,$password);
    
    } catch (PDOException $exc){
        echo $exc->getMessage();
        exit();
    }

    
    // get values form input text and number

    $floor = $_POST["floor"];
    $OfficeName = $_POST["OfficeName"];
    $FirstLastName = $_POST["FirstLastName"];
    $ServiceNumber = $_POST["ServiceNumber"];
    $OfficeNumber = $_POST["OfficeNumber"];
    
    // mysql query to insert data

    $pdoQuery ="INSERT INTO `search`(`floor`, `OfficeName`, `FirstLastName`, `ServiceNumber`, `OfficeNumber`) VALUES (:floor, :OfficeName, :FirstLastName, :ServiceNumber, :OfficeNumber)";
    
    $pdoResult = $database->prepare ($pdoQuery);

    $pdoExec = $pdoResult->execute(array(":floor"=>$floor,":OfficeName"=>$OfficeName, ":FirstLastName"=>$FirstLastName, ":ServiceNumber"=>$ServiceNumber , ":OfficeNumber"=>$OfficeNumber));
    
    // check if mysql query successful

    if($pdoExec)
    {
       
        echo '<script>alert("تم الاضافه")</script>';
    }
    
    else{
        echo '<script>alert("لم تمم الاضافه")</script>';
    }

}

?>



 <style>

.alert{
    background-color: #bdc3cf;
 width: 70px;
padding: 10px;
  font-size:15px;
  left: 100px;
color:black; 
}
@media (max-width:700px) {
    .add-form{
height: 450px;
padding: 10px 50px;


}
.add-form label{

font-size: 12px;
}
.add-form input{

padding: 4px;
margin: 3px;
margin-bottom: -3px;
margin-top: 2px;
}

}
 </style>
 