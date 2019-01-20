<?php
if(isset($_GET['u'])!="" && isset($_GET['u'])!=null){
    $username = $_GET['u'];
    $con = mysqli_connect("sql201.epizy.com", "epiz_23179578", "s5NHbLmxsEpQZ76", "epiz_23179578_letsshare");
    $sqll = "SELECT * FROM registertable WHERE username = '$username'";
    $rows=mysqli_query($con,$sqll);
    $res=mysqli_fetch_assoc($rows);
  
    ?>
<html>
<head><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title><?php echo $res['fname']." ".$res['lname']." - Reboot";?></title>
    <style>
                @font-face{
    src : url('fonts/gotham/Gotham-Bold.otf');
    font-family: gothamb;
}
            @font-face{
    src : url('fonts/gotham/GothamBook.ttf');
    font-family: gotham;
}
            .card {
               width:450px;
                padding-top: 10px;
                padding-bottom: 35px;
                border-radius: 6px;
                box-shadow: 0 4px 30px 0 rgba(0,0,0,0.2);
                 border-bottom: 5px solid #00b359;
                 border-right: 5px solid #00b359;
            }

            .profilepic {
                width: 80px;
                height: 80px;
                border-radius: 70px;
            }

            .card2 {
                width: 300px;
                height: 39px;
                border-radius: 20px 20px 0px 0px;
                background-color: aqua;
                float: center;
            }
 

        </style>
       <style>
            <?php include "css/style.css"; ?>
        </style>
    </head>

    <body>
        <center><div class="row">
                                        <div class="topnav"><a href="index.php" style="padding-right:0;"><i class="material-icons" style="font-size:24px;">arrow_back</i></a>
  <a href="index.php"><b style="color:grey;font-family:gotham">Daero</b> <b style="font-family:Josefin">Study Share</b></a>


</div>
            </div><br><br>
            <div class="card">
                
                <br> <br>
                <img class="profilepic" src="<?php echo $res['profilepic']; ?>"><br><br>
                <b><font style="padding-top: 10px;font-family:gothamb"  size=6 color=grey><?php echo $res['fname']."&nbsp;".$res['lname']; ?></font></b><br><br>
                
                 <font  size=4 face="gothamb"><?php
                        if($res['topic']){
                            echo "Teacher of ".$res['topic'];
                             echo "<br><br>";
                        }
                        ?>
                      <font  size=4 face="gotham"><?php
                        if($res['class']){
                            echo "Student of ".$res['class'];
                             echo "<br><br>";
                        }
                        ?>
                <font style="padding-top: 10px;" face="gotham" size=4 color=grey>Contact Number:&nbsp;
                    <?php $mo = $res['contact'] ;
                                           echo "<a style='text-decoration:none;color:crimson;' href='tel:$mo'>$mo</a>"; ?>
                </font><br><br>
                          <?php 
    if($res['qualification']!=""){
        ?> <font style="padding-top: 10px;" face="gotham" size=4 color=grey>Qualifications:&nbsp;
                <?php
        
    echo $res['qualification']; 
        echo "</font><br><br>";
    }?>
                <font style="padding-top: 10px;" face="gotham" size=4 color=grey>Email:&nbsp;
                    <?php
                                           $em = $res['email'] ;
                                           echo "<a style='text-decoration:none;color:crimson;' href='mailto:$em'>$em</a>";
                    ?>
                </font>
                <br><br>
           </div>
                <br><br><br><br><br>

              
              
              
              
              
              
              
              
            
            <br>
        </center>
        <br><br>
    </body>
</html>

<?php
} else {
    header("location:index.php");
}
?>