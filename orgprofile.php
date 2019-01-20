<?php 
if (isset($_COOKIE["email"]) && isset($_COOKIE["password"])){
?>
<html>

<head>
    <style>
    body{
        background:gainsboro;
    }
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
            width: 520px;
            height: auto;
            border-radius: 2px 2px 2px 2px;
            padding-top: 60px;
            padding-bottom: 60px;
            padding-left: 30px;
            padding-right: 30px;
            border-radius: 5px;
            font-family: gothamb;
            box-shadow: 0 4px 9px 0 rgba(0, 0, 0, 0.4);
            float:left;
            margin-left:30px;
            background:white;
        }

        .logo {
            width: 40px;
            height: 40px;
        }
        .cardright {
            width: 520px;
            height: auto;
            border-radius: 2px 2px 2px 2px;
            padding-top: 30px;
            padding-bottom: 30px;
            padding-left: 30px;
            padding-right: 30px;
            border-radius: 5px;
            font-family: gothamb;
            box-shadow: 0 4px 9px 0 rgba(0, 0, 0, 0.4);
            float:right;
            margin-right:80px;
            margin-left:200px;
            background: white;
            margin-top:10px;
        }

    </style>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>

</html>
<?php
session_start();
$con = mysqli_connect("sql201.epizy.com", "epiz_23179578", "s5NHbLmxsEpQZ76", "epiz_23179578_letsshare");
@$email = $_SESSION['email'];
@$password = $_SESSION['password'];
if($con){
    $sql = "SELECT * FROM organisation WHERE email = '$email'";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($query);
    $imgloc = $row['username'];
    if($row['email']==$email && $row['password']==$password && isset($_COOKIE['email']) && isset($_COOKIE['password'])){
?>
    <?php        
if(isset($_POST['delete'])){   
    $sql2 = "SELECT * FROM registertable WHERE email = '$email'";
    $query2 = mysqli_query($con,$sql2);
    $row2 = mysqli_fetch_assoc($query2);
    $table = strtolower($row2['data']);
    $str = $row2['username'] ;
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    unlink($str."/css/style.css");
    $files = glob($str.'/*');
    foreach($files as $f) {
        if(is_file($f)){
            unlink($f);
        }
    }
    $dir = $str."/css";
    rmdir($dir);
    rmdir($str);
    $sql3 = "DROP TABLE $table ";
    mysqli_query($con,$sql3);
    $sql4  = "DELETE FROM registertable WHERE email = '$email'";
    if(mysqli_query($con,$sql4)){
setcookie("email", '', time() - (3600));
setcookie("password", '', time() - (3600));
 	?>
    <script>
        function redir() {
            window.location = "index.php";
        }
        setTimeout(redir(), 100);

    </script>
    <?php        
    }     
}
?>
    <style>
        <?php include "css/style.css";
        ?>

    </style>
    <center>
        <div class="row">
            <div class="topnav">
                <a href="index.php"><id style="color:grey;font-family:Google sans">Daero</id> <id style="font-family:google sans">Let's Share</id></a>
                

                        <a class=nav2 onclick="javascript:window.location='signout.php'" style="cursor:pointer;float:right; font-family:Google sans">Logout</a>
                        <a class=nav1 onclick="javascript:window.location='orgedit.php'" style="cursor:pointer;float:right; font-family:Google sans">Edit Profile</a>
               
                    <html>

                    <head>
                        <link rel="stylesheet" type="text/css" href="css/style.css">

                    </head>

                    <body> 

                    </html>
                  

            </div>


        </div>
    </center>
    <BR>
    <div class="body">

        <center>
            <form method="post" enctype="multipart/form-data">
            </form>
            <center>
                
            </center>
            <br>
            <div class="card">
             <a href="orgprofilepic.php" style="text-decoration:none;">
                    <?php
                    $imagesrc = $row['profilepic'];
                       if($imagesrc){
                          ?>
                        <img class="img" src="<?php echo $imagesrc ;?>">
                        <?php
                       } else {
                           $pic = 'profilepics/av1.png';
                           $sql2 = "UPDATE organisation SET profilepic='$pic' WHERE email = '$email'";
                            mysqli_query($con,$sql2);
                           $sql2 = "SELECT * from organisation WHERE email = '$email'";
                           $querya = mysqli_query($con,$sql2);
                           $res = mysqli_fetch_assoc($querya);
                           
                           
                           ?>
                            <img class="img" src="<?php echo $res['profilepic']; ?>">
                            <?php
                       }                                   
                ?>
                </a><br><br>
                <font size=5 style="font-family:Google sans;">
                    <?php echo ($row['head']);?>
                </font>
                <br><br>
                <font size=4 style="font-family:Google sans;">Email:&nbsp;&nbsp;
                    <?php echo $row['email'] ?>
                </font>
                <br><br>
                <font size=4 style="font-family:Google sans;">Contact No.:&nbsp;&nbsp;
                    <?php echo $row['contact'] ?> </font>
                <br><br>
                <font size=4 style="font-family:Google sans;">Head of Organisation:&nbsp;&nbsp;
                    <?php echo $row['head'] ?> </font>
                <br><br>
                
                
                <font size=4 style="font-family:Google sans;">
                    <?php
                        if($row['address']){
                            echo "Address : ".$row['address']."<br><br> PIN : ".$row['pincode'];
                             echo "";
                        }
                        ?>
                </font>
                
                

            </div>
            <BR>
            <BR>
            <BR>
            <font size=6 style="font-family:Google sans;">RECENT OFFERINGS</font>
            </b><br><br><br><br><br>
            <?php
        $i=1;
        $j=0;
        $table  = strtolower($row['data']);
        $sql5 = "SELECT COUNT(*) FROM $table ";
        $r  = mysqli_query($con,$sql5);
        $n  = mysqli_fetch_array($r);
        @$email = $_SESSION['email'];
        $sqlx = "select username from organisation where email = '$email'";
        $row2  = mysqli_query($con,$sqlx);
            $result2 = mysqli_fetch_assoc($row2);
            $sql = "SELECT id FROM $table";
$arr ;
    $query = mysqli_query($con,$sql);
    while($dat = mysqli_fetch_array($query)){
      $arr[] = $dat['id'];  
    }
@$arrlen = count($arr)-1;
@$arrid = $arr[$arrlen];
        for($i=$arrid;$i>=1;$i--){
            $sql6 = "SELECT * from $table WHERE id= $i ";
            $rows = mysqli_query($con,$sql6);
            $result = mysqli_fetch_assoc($rows);
            
            if($result['description']==""){
                            continue;
                        }
            if($result['description']!=null){
                
            ?><br><br><br><?php 
                                                    
                                                     $pid = $result['id'];
                                                     
                                                     ?>
                                                     <div class="cardright">
                                                     
                                                  <font style="font-family:google" size=4>You have donation proposal from</font><br><font style="font-family:google" size=5><?php echo strtoupper($result['name']); ?></font><br><font style="font-family:google" size=4>on <?php echo $result['date'];?><br>description</font><br> 
                                     <br>               
                                   <font style="font-family:google" size=4><?php echo $result['description']; ?></font>
</div>
                                    <br><br>
                            <?php
            }
        }

                
             ?>
                      
                            




            

                            <br><br>
            <!--<div id="container-floating">
                

                <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create" onclick="newmail()">
                    <p class="plus">+</p>
                    <a href="index.php">
    <img class="edit" src="snalink/images/compose.png"></a>
                </div>

            </div> -->

         <!--   <?php
                    $table = strtolower($row['data']);
                    $sql5 = "SELECT COUNT(*) FROM $table ";
                    $r  = mysqli_query($con,$sql5);
                    $n  = mysqli_fetch_array($r);
        @$email = $_SESSION['email'];
        $sqlx = "select username from organisation where email = '$email'";
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
                        $sql3 = "SELECT * FROM $table where id = $i ";
                        $row = mysqli_query($con,$sql3);
                        $result = mysqli_fetch_assoc($row);
                        if($result['content']==""){
                            continue;
                        }
                      
                        if(isset($_POST['delete2'])){
                            $sql = "DELETE from $table where id=$i ";
                            mysqli_query($con,$sql);
                            header("location:profile.php");
                        }

                       if($result['postpic']==null){
            ?>
                <div style="padding:20px;width:40%;font-family:Google sans;font-size: 20px; border: 1px solid gainsboro ; border-radius: 4px;">
                    <form method="post" action="">

                        <font style="font-family:Google sans;font-size: 15px;float:left;"><a style="text-decoration:none;" href="user.php?u=<?php echo $result2['username']; ?>">
                                  <b><font color=crimson><?php echo $_SESSION['name'];?></font></b></a> posted on
                            <?php echo $result['date'];?> </font>
                        <br>
                        <p align=left>
                            <?php echo $result['content']."<BR>"; ?>


                    </form>
                    <form method="post" action="deletepost.php">
                        <input type="submit" value="Delete" style="float:left;" class="lnk">
                        <input name="table" style="visibility:hidden;" value="<?php echo $table;?>">
                        <input name="id" style="visibility:hidden;" value="<?php echo $i;?>">

                    </form>
                    </p>
                </div>

                <br><br>
                <?php
            }
            elseif($result['postpic']==!null){
                
             ?>
                    <div style="padding:20px;width:40%;font-family:Google sans;font-size: 20px; border: 1px solid gainsboro ; border-radius: 4px;">
                        <form method="post" action="">

                            <font style="font-family:Google sans;font-size: 15px;float:left;"><a style="text-decoration:none;" href="user.php?u=<?php echo $result2['username']; ?>">
                                  <b><font color=crimson><?php echo $_SESSION['name'];?></font></b></a> posted on
                                <?php echo $result['date'];?> </font>
                            <br>
                            <p align=center>
                                <img src="<?php echo $result['postpic']; ?>" height="250px"><br><br>
                                <?php echo $result['content']."<BR>"; ?>


                        </form>
                        <form method="post" action="deletepost.php">
                            <input type="submit" value="Delete" style="float:left;" class="lnk" style="font-family:gothamb;">
                            <input name="table" style="visibility:hidden;" value="<?php echo $table;?>">
                            <input name="id" style="visibility:hidden;" value="<?php echo $i;?>">

                        </form>
                        </p>
                    </div>

                    <br><br>
                    <?php
                    } 
            ?>
                        <?php
                    }
        ?>

                            <br><br>-->
                            <!-- <form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="POST">
                 <input type="submit"  class="login" name="delete" value="Delete Account">
            </form>-->
        </center>
    </div>
    <?php
    } else {
      header("location:orglogin.php?inf=login101");
        
        die("");
    }
} else {
    echo "Can't Establish Connection";
}
} else{
    session_start();
    $_SESSION['redirect'] = $_SERVER['REQUEST_URI'];
    header("location:orglogin.php");
}
?>
