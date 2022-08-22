<?php
 include('conncetion.php');

 if(isset($_POST['login']))
 {
     $sql =mysqli_query($conn,"SELECT * FROM datas WHERE email=' ". $_POST["name"] ."' AND passwords='" .$_POST["pasw"] ." ' ");
     $num =mysqli_num_rows($sql);

     if( $num >0)
     {
         $row =mysqli_fetch_array($sql);
         header("Location:home.php");
         exit();
     }else{
         echo "Enter Worng Input";
     }
 }

    
?>