<?php

       include('conncetion.php');

       $usern =$POST['user'];
       $number =$_POST['pnumber'];
       $cours=$_POST['course'];
       $em =$_POST['emil'];
       $password =$_POST['psw'];
      

       if(!$_POST['submit'])
       {
           echo "All feild are required";
       }else
       {
           $sql ="INSERT into datas(username ,phonenumber, course, email ,passwords) 
                                 
                                 values('$usern' ,'$number', '$cours',' $em','$password') ";
            

            if(mysqli_query($conn, $sql))
            {
                header("Location:home.php");
                exit();
            }else
            {
                echo "something went wrong";
            }
       }

?>