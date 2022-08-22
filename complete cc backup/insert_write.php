<?php

include('conncetion.php');


$code =$_POST['code'];

if(isset($_POST['send']))
 {
     $sql =mysqli_query($conn,"SELECT * FROM datas WHERE email=' ". $_POST["emails"] ."' ");
     $num =mysqli_num_rows($sql);

     if($num>0)
     {
        $sql ="INSERT into codeTable(code) values('$code') ";
     }
     else
     {
         echo "emali don't match ";
     }
 }


?>