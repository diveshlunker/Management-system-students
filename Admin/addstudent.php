<?php

session_start();
if(isset($_SESSION['uid']))
{
    echo "";
}
else{
    header('location: ../login.php');
}
  
?>

<?php

include('header.php');
include('titleheader.php');
if(isset($_POST['submit'])){
    $_POST['submit'] = false;
}
?>
<br><h1 align="center"> Add Students To The Records</h1><br>
<form method="post" action="addstudent.php" enctype="multipart/form-data">
    
    <table align="center" border="1" style="width:70%; margin-top:40px;">
        <tr>
            <th>Roll No</th>
            <td><input type="text" name="rollno" placeholder="Enter Rollno" required></td>
        </tr>
        <tr>
            <th>Full Name</th>
            <td><input type="text" name="name" placeholder="Enter Full Name" required></td>
        </tr>
        <tr>
            <th>City</th>
            <td><input type="text" name="city" placeholder="Enter City" required></td>
        </tr>
        <tr>
            <th>Parents Contact no.</th>
            <td><input type="text" name="pcon" placeholder="Enter Parents Contact Number" required></td>
        </tr>
        <tr>
            <th>Standard</th>
            <td><input type="number" name="standard" placeholder="Enter Standard" required></td>
        </tr>
        <tr>
            <th>Image</th>
            <td><input type="file" name="simg" required> </td>
        </tr>
        
        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
</form>

</body>
</html>

<?php

if(isset($_POST['submit'])){
    $con = mysqli_connect('localhost','root','','sms');

	if($con == false){
		echo "Connection not successful";
	}
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $pcon = $_POST['pcon'];
    $std = $_POST['standard'];
    $imagename = $_FILES['simg']['name'];
    $tempname = $_FILES['simg']['tmp_name'];
        
    move_uploaded_file($tempname,"../dataimg/$imagename");
    
    
    
    
    $qry = "INSERT INTO `student`(`name`, `city`, `pcont`, `standard`, `rollno`,`image`) VALUES ('$name','$city','$pcon','$std','$rollno','$imagename')";
   
    $run = mysqli_query($con,$qry);
    
    if($run == true){
        ?>
        <script>
            alert('Data Inserted Successfully');
        </script>
        <?php
    }
    
        
}


?>
