<?php
require_once("connection.php");
if(isset($_POST['submit']))
    {
        $studentName = $_POST['s_name'];
        $studentpassword = $_POST['s_password'];
        
            $query = " select * from student_password where s_name= '$studentName' AND s_password= '$studentpassword' ";
            $result = mysqli_query($conn,$query);
            $count=mysqli_num_rows($result);

if($count)
            {
                header("location:home.php");
            }
            else
            {
               
                echo "Invalid login details";
                
            }
}

?>