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
                                        <div class="topnav"><a href="followings.php" style="padding-right:0;"><i class="material-icons" style="font-size:24px;">arrow_back</i></a>
  <a href="index"><b style="color:grey;font-family:gotham">Daero</b> <b style="font-family:Josefin">Study Share</b></a>


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

<font size=6 face="comfortaa">RECENT POSTS</font>
                <br><br><br><br>
                        
                        
                        
                        
                        
                        
                        
                                             <?php
        $i=1;
        $j=0;
        $table  = strtolower($res['data']);
        $sql5 = "SELECT COUNT(*) FROM $table ";
        $r  = mysqli_query($con,$sql5);
        $n  = mysqli_fetch_array($r);
        @$email = $_SESSION['email'];
        $sqlx = "select username from registertable where email = '$email'";
        $row2  = mysqli_query($con,$sqlx);
            $result2 = mysqli_fetch_assoc($row2);
            $sql = "SELECT id FROM $table";
$arr ;
    $query = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($query)){
      $arr[] = $row['id'];  
    }
@$arrlen = count($arr)-1;
@$arrid = $arr[$arrlen];
        for($i=$arrid;$i>=1;$i--){
            $sql6 = "SELECT * from $table WHERE id= $i ";
            $row  = mysqli_query($con,$sql6);
            $result = mysqli_fetch_assoc($row);
            if($result['content']==""){
                            continue;
                        }
            if($result['postpic']==null){
                
            ?><br><br><?php 
                                                    
                                                     $pid = $result['postid'];
                                                     
                                                     ?>
                                    <div style="padding:20px;width:40%;font-family: arial;font-size: 20px; border: 1px solid gainsboro ; border-radius: 4px;">
                                        <form method="post" action="">

                                            <font style="font-family: arial;font-size: 15px;float:left;"><a style="text-decoration:none;" href="user?u=<?php echo $result2['username']; ?>">
                                             
                                  <b><font color=crimson><?php echo $_SESSION['name'];?></font></b></a> posted on
                                                <?php echo $result['date'];?> </font><i id="<?php echo $result['postid']; ?>" ></i>
                                            <br>
                                            <p align=left>
                                                <?php echo $result['content']." "; ?>
                                                <?php
                                                if($result['filepost']) {
                                                ?>
                                                 <div class="pdffile">   
                                                     <a target="_blank" href = "<?php echo $result['filepost']; ?>"><img src="images/pdf.png" width="50px" height="50px"><br><font face="gotham" color="grey" size=3 style="text-decoration:none;">
                                                        DOWNLOAD PDF (<?php echo number_format($result['size']/1048576, 3, '.', '')." MB"; ?>)</font></a></div>
                                                        <?php } ?>
                                        </form>
                                        
                                        
                                        
                                                <br>
                                    </div>

                                    <br><br>
                            <?php
            }
            elseif($result['postpic']==!null){
                
             ?>
                      <div style="padding:20px;width:40%;font-family: arial;font-size: 20px; border: 1px solid gainsboro ; border-radius: 4px;">
                                        <form method="post" action="">

                                            <font style="font-family: arial;font-size: 15px;float:left;"><a style="text-decoration:none;" href="user?u=<?php echo $result2['username']; ?>">
                                  <b><font color=crimson><?php echo $_SESSION['name'];?></font></b></a> posted on
                                                <?php echo $result['date'];?> </font>
                                            <br>
                                            <p align=center>
                                                <img src="<?php echo $result['postpic']; ?>" width="450px" ><br><br>
                                                <?php echo $result['content']."<BR>"; ?>


                                        </form>
                                        
                           <?php 
                                                    
                                                     $pid = $result['postid'];
                                                     
                                                     ?>
                                       
                                           
                                    </div>

                                    <br><br>
                    <?php
                    } 
            
            elseif($result['filepost']==!null && $result['postpic']==null){
                ?>
                    
                    <div style="padding:20px;width:40%;font-family: arial;font-size: 20px; border: 1px solid gainsboro ; border-radius: 4px;">
                                        <form method="post" action="">

                                            <font style="font-family: arial;font-size: 15px;float:left;"><a style="text-decoration:none;" href="user?u=<?php echo $result2['username']; ?>">
                                  <b><font color=crimson><?php echo $_SESSION['name'];?></font></b></a> posted on
                                                <?php echo $result['date'];?> </font>
                                            <br>
                                            <p align=center>
                                                <a href="<?php echo $result['filepost']; ?>"> <img src="images/pdf.png" width="50px" height="50px"></a><br><br>
                                                <?php echo $result['content']."<BR>"; ?>


                                        </form>
                                        
                        
                        $pid = $result['postid'];
                                                     
                                                     ?>
                                       
                                            
                                    </div>

                                    <br><br>
                    
                    
                    <?php
            }
            ?>
                            
            
                                    <?php
                        
                        
        }
    
       
           
        
        ?>
              
              
              
              
              
              
              
              
            
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