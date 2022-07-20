<?php
class mydb{
 
function OpenCon()
 {
 $dbservername = "localhost";
 $dbusername = "root";
 $dbpassword = "";
 $dbname = "labtask";
 $conn =new mysqli($dbservername, $dbusername, $dbpassword,$dbname);
 if($conn->connect_error){
    echo "con obj failed";
}
 return $conn;
 }

 function insertUser($tablename,$fname,$lname,$age,$designation,$PL,$email,$password,$please_choose_a_file,$conn)
 {
     $sqlstr = "INSERT INTO $tablename (fname,lname,age, designation,planguage, email, password, picture)
    VALUES ('$fname','$lname', '$age','$designation', '$PL', '$email', '$password', '$please_choose_a_file')";

     

 if ($conn->query($sqlstr))
  
     {
        echo"data inserted";
     }
     else{
        echo "can't insert".$conn->error;  
       
     }
    
     }
    
function checkLogin($tablename,$fname,$password,$conn)
{
   $sqlstr="SELECT * FROM $tablename WHERE fname='$fname' AND password='$password'";
   return $conn->query($sqlstr);
}

function showUser($tablename,$fname,$conn)
{
  $sqlstr="SELECT * FROM $tablename WHERE fname='$fname'";
  return $conn->query($sqlstr);
}

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>