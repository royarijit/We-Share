<?php 
if (isset($_COOKIE["email"]) && isset($_COOKIE["password"])){
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
        @font-face {
            src: url('fonts/google/google_sans.ttf');
            font-family: google;
        }

        .img {
              
                width: 80px;
                height: 80px;
                border-radius: 100%;
                
            
        }
html{
            font-family: google sans;
        }
        body{
            background: gainsboro;
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
            background: white;
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
@$email = $_COOKIE['email'];
@$password = $_COOKIE['password'];
if($con){
    $sql = "SELECT * FROM registertable WHERE email = '$email'";
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
                <a href="index.php"><id style="color:grey;font-family:google">Daero</id> <id style="font-family:google">Let's Share</id></a>
                

                        <a class=nav2 onclick="javascript:window.location='signout.php'" style="cursor:pointer;float:right;font-family:google;">Logout</a>
                        <a class=nav1 onclick="javascript:window.location='edit.php'" style="cursor:pointer;float:right;font-family:google;">Edit Profile</a>
                

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
             <a href="profilepic.php" style="text-decoration:none;">
                    <?php
                    $imagesrc = $row['profilepic'];
                       if($imagesrc){
                          ?>
                        <img class="img" src="<?php echo $imagesrc ;?>">
                        <?php
                       } else {
                           $pic = 'profilepics/av1.png';
                           $sql2 = "UPDATE registertable SET profilepic='$pic' WHERE email = '$email'";
                            mysqli_query($con,$sql2);
                           $sql2 = "SELECT * from registertable WHERE email = '$email'";
                           $querya = mysqli_query($con,$sql2);
                           $res = mysqli_fetch_assoc($querya);
                           
                           
                           ?>
                            <img class="img" src="<?php echo $res['profilepic']; ?>">
                            <?php
                       }                                   
                ?>
                </a><br><br>
                <font size=5 style="font-family:google;">
                    <?php echo strtoupper($row['fname']." ".$row['lname']) ?>
                </font>
                <br><br><br>
                <font size=4 style="font-family:google;">Email:&nbsp;&nbsp;
                    <?php echo $row['email'] ?>
                </font>
                <br><br>
                <font size=4 style="font-family:google;">Contact No.:&nbsp;&nbsp;
                    <?php echo $row['contact'] ?> </font>
                <br><br>
                
                
                <font size=4 style="font-family:google;">
                    <?php
                        if($row['address']){
                            echo "Address : ".$row['address'];
                             echo "";
                        }
                        ?>
                </font>
                
                <br><br>
                
                
            </div>
            <BR>
            <BR>
            <BR>
            <font size=6 style="font-family:google;">RECENT SHARINGS</font>
            </b><br><br><br><br><br>
            <!--<div id="container-floating">
                

                <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create" onclick="newmail()">
                    <p class="plus">+</p>
                    <a href="results.php">
    <img class="edit" width="30px" height="30px" src="images/locate.svg"></a>
                </div>

            </div>-->



            <?php
        $i=1;
        $j=0;
        $table  = strtolower($row['data']);
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
                                                     
                                                  <font style="font-family:google" size=4>You have provided a donation proposal for</font><br><font style="font-family:google" size=5><?php echo strtoupper($result['nameorg']); ?></font><br><font style="font-family:google" size=4>on <?php echo $result['date'];?><br>description</font><br> 
                                     <br>               
                                   <font style="font-family:google" size=4><?php echo $result['description']; ?></font>
</div>
                                    <br><br>
                            <?php
            }
        }

                
             ?>
                      
                            




            

                            <br><br>
                            <!-- <form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="POST">
                 <input type="submit"  class="login" name="delete" value="Delete Account">
            </form>-->
        </center>
    </div>
    <?php
    } else {
      header("location:login.php?inf=login101");
        die("");
    }
} else {
    echo "Can't Establish Connection";
}
} else {
    session_start();
    $_SESSION['redirect2'] = $_SERVER['REQUEST_URI'];
    header("location:login.php");
}
?>
