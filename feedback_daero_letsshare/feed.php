

<?php

 $con = mysqli_connect("sql201.epizy.com", "epiz_23179578", "s5NHbLmxsEpQZ76", "epiz_23179578_letsshare");
 $sql = "select * from feedback";
$result = mysqli_query($con,$sql);
?>

<html>
    <head>
    <style>
        body,html{
            margin:0;
        }
        .nav{
            overflow:hidden;
            background: black;
            padding:26px;
            
        }
        .nav a{
            
            color:white;
            text-decoration: none;
            
        }
        a:hover{
            color: red;
            cursor: pointer;
        }
        </style>
    </head>
<body>
    <div class="nav">
    <table width=100%>
        <tr>
        <td  align=left style="padding-left: 20px; color:white;font-size: 30px;">Daero</td>
            
        </tr>
        </table>
    </div><br><br>
   
    <table width=100% border=1 padding=4>
    
    <tr>
       <th>Name</th>
        <th>Country</th>
        
        <th>Feedback</th>
        <th>Date and Time</th>
        </tr>
        
        <?php
        while($row = mysqli_fetch_assoc($result)){
            ?>
        <tr>
        <td align=center><?php echo $row['name'];?></td>
            <td align=center><?php echo $row['country'];?></td>
            
            <td align=center><?php echo $row['feedback'];?></td>
            <td align=center><?php echo $row['datetime'];?></td>
        </tr>
            <?php
        }
        ?>
    </table>
    
    </body>

</html>