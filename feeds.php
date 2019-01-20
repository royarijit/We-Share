<html>
<head>
   <style>
            
            @font-face {
                src: url('fonts/google_sans/GoogleSans-Regular.ttf');
                font-family: google;
            }

            @font-face {
                src: url('fonts/gotham/Gotham-Bold.otf');
                font-family: google;
            }

            @font-face {
                src: url('fonts/google/google-Bold.ttf');
                font-family: google;
            }

            #snackbar {
                visibility: hidden;
                min-width: 350px;
                margin-left: -120px;

                background-color: #333;

                color: #fff;

                text-align: center;
                font-family: monospace;

                border-radius: 10px;

                padding: 5px;

                position: fixed;

                z-index: 1;

                left: 65%;

                bottom: 30px;

            }



            #snackbar.show {
                visibility: visible;

                -webkit-animation: fadein 2s, fadeout 2s 10s;
                animation: fadein 2s, fadeout 2s 10s;
            }



            @-webkit-keyframes fadein {
                from {
                    bottom: 0;
                    opacity: 0;
                }
                to {
                    bottom: 30px;
                    opacity: 1;
                }
            }

            @keyframes fadein {
                from {
                    bottom: 0;
                    opacity: 0;
                }
                to {
                    bottom: 30px;
                    opacity: 1;
                }
            }

            @-webkit-keyframes fadeout {
                from {
                    bottom: 30px;
                    opacity: 1;
                }
                to {
                    bottom: 0;
                    opacity: 0;
                }
            }

            @keyframes fadeout {
                from {
                    bottom: 30px;
                    opacity: 1;
                }
                to {
                    bottom: 0;
                    opacity: 0;
                }
            }

        </style> <link href="css/style.css" rel="stylesheet"> 
    
</head>
<body>
 <center>
        <div class="row">
            <div class="topnav">
                <a href="index.php"><b style="color:grey;font-family:google">Daero</b> <b style="font-family:google">Study Share</b></a></div></div></center> <br><br><br><br><br><br>  
    
</body>
</html> 




<?php
$con = mysqli_connect("sql201.epizy.com", "epiz_23179578", "s5NHbLmxsEpQZ76", "epiz_23179578_letsshare");
@$email = $_COOKIE['email'];

$sql1 = "SELECT * FROM registertable WHERE email = '$email'";
$query1 = mysqli_query($con,$sql1);
$data = mysqli_fetch_assoc($query1);
$ftable = $data['followtable'];

$sql2 = "SELECT id FROM $ftable";
$arr ;
    $query2 = mysqli_query($con,$sql2);
    while($row = mysqli_fetch_array($query2)){
      $arr[] = $row['id'];  
    }
$arrlen = count($arr)-1;
$arrid = $arr[$arrlen];
        $i=2;
        $j=1;
        $sql5 = "SELECT COUNT(*) FROM $ftable ";
        $r  = mysqli_query($con,$sql5);
        $n  = mysqli_fetch_array($r);
        
    
        for($i=$arrid;$i>=1;$i--){
            $sql6 = "SELECT * FROM $ftable WHERE id= $i ";
            $row  = mysqli_query($con,$sql6);
            $result = mysqli_fetch_assoc($row);
            $teacher = $result['teachertable'];
            $sql7 = "SELECT COUNT(*) FROM $teacher";
            $r1 = mysqli_query($con,$sql7);
            $n2 = mysqli_fetch_assoc($r1);
            $sql8 = "SELECT * FROM registertable WHERE data = '$teacher'";
            $r1 = mysqli_query($con,$sql8);
            $result3 = mysqli_fetch_assoc($r1);
            
            for($j=5;$j>=1;$j--){
                
                $sql9 = "SELECT * FROM $teacher WHERE id= $j ";
                $row2 = mysqli_query($con,$sql9);
                $result2 = mysqli_fetch_assoc($row2);
     if($result2['postpic']==null && $result2['content']==!null){
            ?>
<html>
    <head>
    
     <style>
        .lnk {
            color: crimson;
            font-family: arial;
            font-size: 15px;
            border: 0.1px solid white;
            background: white;
            outline: none;
            cursor: pointer;
        }

        .lnk:hover {
            text-decoration: underline;

        }
         

        @font-face {
            src: url('fonts/comfortaa/Comfortaa-Bold.otf');
            font-family: comfortaa;
        }

        @font-face {
            src: url('fonts/gotham/Gotham-Bold.otf');
            font-family: gotham;
        }

        .img {
              
                width: 80px;
                height: 80px;
                border-radius: 100%;
            
        }

        .card {
            width: 700px;
            height: auto;
            border-radius: 2px 2px 2px 2px;
            padding-top: 60px;
            padding-bottom: 60px;
            padding-left: 30px;
            padding-right: 30px;
            border-radius: 5px;
            font-family: gothamb;
            box-shadow: 0 4px 58px 0 rgba(0, 0, 0, 0.2);
        }

        .logo {
            width: 40px;
            height: 40px;
        }

    </style>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    </head>
<body><center>
    
<br><br><br>
                                    <div style="padding:20px;width:40%;font-family: arial;font-size: 20px; border: 1px solid gainsboro ; border-radius: 4px;">
                                        <form method="post" action="">

                                            <font style="font-family: arial;font-size: 15px;float:left;"><a style="text-decoration:none;" href="user?u=<?php echo $result3['username']; ?>">
                                  <b><font color=crimson><?php echo $result3['fname']." ".$result3['lname'];?></font></b></a> posted on
                                                <?php echo $result2['date'];?> </font>
                                            <br>
                                            <p align=left>
                                                <?php echo $result2['content']." "; ?>
                                                <?php
                                                if($result2['filepost']) {
                                                ?>
                                                 <div class="pdffile">
                                                     <a target="_blank" href = "<?php echo $result2['filepost']; ?>"><img src="images/pdf.png" width="50px" height="50px"><br><font face="gotham" color="grey" size=3 style="text-decoration:none;">
                                                        DOWNLOAD PDF (<?php echo number_format($result2['size']/1048576, 3, '.', '')." MB"; ?>)</font></a></div>
                                                        <?php } ?>
                                        </form>
                                        
                                        <form method="post" action="like.php" >
                                        <input name="postid" style="display:none;" value="<?php echo $result2['postid']; ?>">
                                        <input name="tablename" style="display:none;" value="<?php echo $table;?>">
                                        
                                           <input name="key" style="display:none;" value="a">  
                                            
                                        <button type="submit" class="likebtn"><img src="images/icons/likeinactive.png" width="20px" height="20px"><p id="msg"></p></button>&nbsp;<?php echo $result2['likes']; ?>   
                                        
                                        
                                        </form>
                                        <?php 
                                                    
                                                     $pid = $result2['postid'];
                                                     
                                                     ?>
                                       
                                            <a target="_blank" href="<?php echo "post.php?u=".$pid; ?>"><input type="submit" value="View" style="float:left;" class="lnk"></a>
   
                                       
                  

                                        </p><br>
                                    </div>

                                    <br>
                            <?php
            }
            elseif($result2['postpic']==!null){
                
             ?><center>
                      <div style="padding:20px;width:40%;font-family: arial;font-size: 20px; border: 1px solid gainsboro ; border-radius: 4px;">
                                        <form method="post" action="">

                                            <font style="font-family: arial;font-size: 15px;float:left;"><a style="text-decoration:none;" href="user.php?u=<?php echo $result3['username']; ?>">
                                  <b><font color=crimson><?php echo $result3['fname']." ".$result3['lname'];?></font></b></a> posted on
                                                <?php echo $result2['date'];?> </font>
                                            <br>
                                            <p align=center>
                                                <img src="<?php echo $result2['postpic']; ?>" width="450px" ><br><br>
                                                <?php echo $result2['content']."<BR>"; ?>


                                        </form>
                                       
                           <?php 
                                                    
                                                     $pid = $result2['postid'];
                                                     
                                                     ?>
                                       
                                            <a target="_blank" href="<?php echo "post.php?u=".$pid; ?>"><input type="submit" value="View" style="float:left;" class="lnk"></a>
                                        </p>
                                    </div>

                                    
                    <?php
                    } 
            
            elseif($result2['filepost']==!null && $result2['postpic']==null){
                ?>
                    <center>
                    <div style="padding:20px;width:40%;font-family: arial;font-size: 20px; border: 1px solid gainsboro ; border-radius: 4px;">
                                        <form method="post" action="">

                                            <font style="font-family: arial;font-size: 15px;float:left;"><a style="text-decoration:none;" href="user?u=<?php echo $result2['username']; ?>">
                                  <b><font color=crimson><?php echo $_SESSION['name'];?></font></b></a> posted on
                                                <?php echo $result2['date'];?> </font>
                                            <br>
                                            <p align=center>
                                                <a href="<?php echo $result2['filepost']; ?>"> <img src="images/pdf.png" width="50px" height="50px"></a><br><br>
                                                <?php echo $result2['content']."<BR>"; ?>


                                        </form>
                                        
                                        </p>
                                    </div>
</center><br><br>
    </body>
    </head>

</html>   <?php
            }
            }
        }
    ?>