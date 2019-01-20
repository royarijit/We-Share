<?php

$con = mysqli_connect("sql201.epizy.com", "epiz_23179578", "s5NHbLmxsEpQZ76", "epiz_23179578_letsshare");

$student = $_POST['student'];
$teacher = $_POST['teacher'];

$sql = "SELECT * FROM registertable WHERE email = '$student'";
$query = mysqli_query($con,$sql);
$data = mysqli_fetch_assoc($query);

$sql2 = "SELECT * FROM registertable WHERE username = '$teacher'";
$query2 = mysqli_query($con,$sql2);
$data2 = mysqli_fetch_assoc($query2);

$followtable = $data['followtable'];
$teachertable = $data2['data'];

$sql3 = "INSERT INTO $followtable(teachertable) VALUES('$teachertable')";

if(mysqli_query($con,$sql3)){
    
    ?>
<html>

<head>
    
    <link href="css/style.css" rel="stylesheet">
    <style>
    .profilepic {
                width: 70px;
                height: 70px;
                border-radius: 70px;
            }
        .cards {
                width: 700px;
                height: auto;
                border-radius: 2px 2px 2px 2px;
                border: 1px solid gainsboro;
                padding-top: 60px;
                padding-bottom: 60px;
                padding-left: 30px;
                padding-right: 30px;
                border-radius: 5px;
                font-family: gothamb;
                transition : all 0.2s ease;
                font-size: 20px;
            }
            .cards:hover{
                box-shadow: 0 4px 18px 0 rgba(0,0,0,0.3);
            }    
    
    </style>
    </head>
    <body><center><br><br><br><br>
    <div class="cards">
        
        <font face="google sans" size="4"><?php echo $data['fname']; ?>,&nbsp;you are now following</font><br><br>
        <img class="profilepic" src="<?php echo $data2['profilepic']; ?>"><br>
        <font face="google sans" size=6><?php echo $data2['fname']." ".$data2['lname']; ?></font><br><br>
        <a class="button_blue" href="search_teacher.php">OK</a>&nbsp;<a class="button_blue" href="search_teacher.php">UNFOLLOW</a>
        </div>
    </center>
    </body>

</html>

<?php
    
}
?>