
<?php
session_start();
$sp=mysqli_connect("localhost","root","","admsn");
         if($sp->connect_errno){
                echo "Error <br/>".$sp->error;
}

$picpath="studentpic/";
$proofpath="studentpic/";
$id=$_SESSION['user'];
if(isset($_POST['fpicup']))
{
$picpath=$picpath.$_FILES['fpic']['name'];
$proofpath2=$proofpath.$_FILES['fsig']['name']; 

if(move_uploaded_file($_FILES['fpic']['tmp_name'],$picpath)
  && move_uploaded_file($_FILES['fsig']['tmp_name'],$proofpath2))
{
$img=$_FILES['fpic']['name'];
$img6=$_FILES['fsig']['name'];
$query="insert into t_userdoc (s_id,s_pic, s_sigpic) values 
    ('$id','$img','$img6')";
        if($sp->query($query)){
     echo "Inserted to DB ";    
    }else
    {
        echo "Error <br/>".$sp->error;        
    }
}
else
{
echo "There is an error,please retry or ckeck path";
}
}
 ?>
