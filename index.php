<html>
    <head>
        <meta charset ="UTF-8">
        <link rel="stylesheet" href="index.css">
        <script src="jquery-3.3.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <title> Student Management System</title>
        
    </head>
    <body>
        
        <h3 align="right"><a href="login.php">Admin Login</a></h3>
        <h1 align="center"> Welcome To Student Management System</h1>
        
        
        <form method="post" action="index.php" >
            <table style="width:50%;" align="center" border="1">
                <tr>
                    <td colspan="2" align="center">Student Information</td>
                </tr>
                <tr>
                    <td>Choose Standard</td>
                    <td>
                        <select name="std">
                            <option value="1">1st</option>
                            <option value="2">2nd</option>
                            <option value="3">3rd</option>
                            <option value="4">4th</option>
                            <option value="5">5th</option>
                            <option value="6">6th</option>
                            <option value="7">7th</option>
                            <option value="8">8th</option>
                            <option value="9">9th</option>
                            <option value="10">10th</option>
                            <option value="10">11th</option>
                            <option value="10">12th</option>
                        </select>
                                   
                    </td>
                </tr>
                <tr>
                    <td>Enter Rollno</td>
                    <td><input type="text" name="rollno"</td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit" value="Show Info"></td>
                </tr>
            </table>
                                   
        </form>
            
            
        
        
        
    </body>
    
</html>

<?php

if(isset($_POST['submit'])){
    
    $standard= $_POST['std'];
    $rollno = $_POST['rollno'];
    
    include('dbcon.php');
    include('function.php');
    
    showdetails($standard,$rollno);
    
    
    
    
    
    
}

?>