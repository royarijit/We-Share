<?php

$id = $_POST['id'];

$con = mysqli_connect("sql201.epizy.com", "epiz_23179578", "s5NHbLmxsEpQZ76", "epiz_23179578_letsshare");

$sql="SELECT * FROM registertable WHERE id= $id";
$row  = mysqli_query($con,$sql);
$result = mysqli_fetch_assoc($row);

?>

<html>

    <head>
        <style>
            .card {
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
                transition : all 0.5s ease;
            }
            .card:hover{
                box-shadow: 0 4px 18px 0 rgba(0,0,0,0.3);
            }

            .profilepic {
                width: 100px;
                height: 100px;
                border-radius: 100px;
            }

            .card2 {
                width: 300px;
                height: 39px;
                border-radius: 20px 20px 0px 0px;
                background-color: aqua;
                float: center;
            }

        </style>
    </head>

    <body><br><br>
        <center><font face="comfortaa" size=7 color="grey">TEACHER'S PROFILE</font><br><br><br><br>
            <div class="card"><br>
                <img class="profilepic" src="<?php echo $result['profilepic']; ?>"><br><br>
                <b><font style="padding-top: 10px;"face="comfortaa" size=6 color=grey><?php echo $result['fname']."&nbsp;".$result['lname']; ?></font></b><br><br>
                <?php
    if($result['qualification']!=""){
        ?> <font style="padding-top: 10px;" face="comfortaa" size=4 color=grey>Qualifications:&nbsp;
                <?php
    echo $result['qualification']; 
        echo "</font><br><br>";
    }?>
                <font style="padding-top: 10px;" face="comfortaa" size=4 color=grey>Teacher of&nbsp;
                    <?php echo $result['topic'] ?>
                </font><br><br>
                <font style="padding-top: 10px;" face="comfortaa" size=4 color=grey>Contact Number:&nbsp;
                    <?php echo $result['contact'] ?>
                </font><br><br>
                <font style="padding-top: 10px;" face="comfortaa" size=4 color=grey>Email:&nbsp;
                    <?php echo $result['email'] ?>
                </font>
                <br><br><br>
                <?php
    if($result['bio']!=""){
        ?> <font style="padding-top: 10px;" face="comfortaa" size=4 color=grey>About:&nbsp;
                <?php
    echo $result['bio']; 
        echo "</font><br><br>";
    }?>
                
            </div>
            <br><br><br><br>
            <font face="comfortaa" size=7 color="grey">RECENT POSTS BY THE TEACHER</font>
                                  <br><br>
        </center>
        <br><br>
    </body>

    </html>
<?php
        $i=1;
       
        $table  = strtolower($result['data']);
        $sql2 = "SELECT COUNT(*) FROM $table ";
        $r  = mysqli_query($con,$sql2);
        $n  = mysqli_fetch_array($r);
    
        for($i=$n[0];$i>=1;$i--){
            $sql3 = "SELECT content from $table WHERE id= $i ";
            $row1  = mysqli_query($con,$sql3);
            $result1 = mysqli_fetch_assoc($row1);
            ?>
                              <center> 
                                  <div style="padding:20px;width:40%;font-family: gothamb;font-size: 20px; border: 1px solid gainsboro ; border-radius: 4px;">
                                    <?php
            echo $result1['content']."<BR>"; ?>
                                </div></center> 
                                <BR>
                                <BR>
                                <?php
        }
       
           
        
        
        ?>