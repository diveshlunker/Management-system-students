<?php


function showdetails($standard,$rollno){
    include('dbcon.php');

    $qry = "SELECT * FROM `student` WHERE `rollno`='$rollno' AND `standard`='$standard'";
    
    $run = mysqli_query($con,$qry);
    
    if(mysqli_num_rows($run)>0){
        $data = mysqli_fetch_assoc($run);
        ?>
        <table align="center" border="1" style="width:50%; margin-top:40px;">
            <tr>
                <th colspan="3">Student Details</th>
            </tr>
            <tr>
                <td rowspan="5"><img src="dataimg/<?php echo htmlspecialchars($data['image'], ENT_QUOTES); ?>"/></td>
                <th>Roll No</th>
                <td align="center"><?php echo htmlspecialchars($data['rollno'], ENT_QUOTES); ?></td>
                
           </tr>
            <tr>
                <th>Name</th>
                <td align="center"><?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?></td>
            </tr>
            <tr>
                <th>City</th>
                <td align="center"><?php echo htmlspecialchars($data['city'], ENT_QUOTES); ?></td>
            </tr>
            <tr>
                <th>Parents Contact no.</th>
                <td align="center"><?php echo htmlspecialchars($data['pcont'], ENT_QUOTES); ?> </td>
            </tr>
            <tr>
                <th>Standard</th>
                <td align="center"><?php echo htmlspecialchars($data['standard'], ENT_QUOTES); ?> </td>
            </tr>
            

<?php
        
        
        
        
    }
    
    else{
        echo"<script>alert('No Student Found'); </script>";
    }
}


?>
