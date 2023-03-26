<!DOCTYPE html>
<html>
    <head>
        <title>Table</title>
    </head>
<body>
    <table border="1px solid black ;" width="400px;">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>Branch</th>
        </tr>  
    
        <?php
            $servername = "localhost";
            $user = "root";
            $pwd = "";
            $dbname = "mydatabase";
            $conn = new mysqli($servername,$user,$pwd,$dbname);
            $query=mysqli_query($conn,"select * from student_info");
            while($row=mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?=$row['id'];?></td>
            <td><?=$row['Name'];?></td>
            <td><?=$row['Age'];?></td>
            <td><?=$row['Branch'];?></td>
        </tr>
        <?php } ?>
        
</table>
</body>
</html>        