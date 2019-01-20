
<?php 
if (isset($_COOKIE["email"]) && isset($_COOKIE["password"])){
session_start();
$con = mysqli_connect("sql201.epizy.com", "epiz_23179578", "s5NHbLmxsEpQZ76", "epiz_23179578_letsshare");
@$email = $_COOKIE['email'];
@$password = $_COOKIE['password'];   
if($con){
    $sql = "SELECT * FROM organisation WHERE email = '$email'";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($query);
    $imgloc = $row['username'];
    if($row['email']==$email && $row['password']==$password){
        ?>
<html>
    <?php
        if(isset($_POST['update']) && !empty($_POST['head'])){
                    $head = $_POST['head'];
                    $nameorg = $_POST['nameorg'];
                    $estd = $_POST['estd'];
                    $contact =$_POST['contact'];
                    $address =$_POST['address'];
                    $pincode =$_POST['pincode'];
                    $sql = "UPDATE organisation SET head = '$head' , nameorg = '$nameorg' , estd = '$estd',  contact='$contact' , address='$address', pincode='$pincode' WHERE email = '$email' ";
                    mysqli_query($con,$sql);
                    header("location:orgprofile.php");
        }
                    ?>
    <head>
    <style>
        @font-face{
    src : url('fonts/gotham/Gotham-Bold.otf');
    font-family: gothamb;
}
        @font-face{
    src : url('fonts/google/google_sans.ttf');
    font-family: google;
}
            .img{
    height:140px;
    width:auto;  
    box-shadow: 0 10px 48px 0 rgba(0,0,0,0.3);            
    z-index: 1;
}
        .logo {
            width: 60px;
            height: 60px;
        }

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
                font-family: google;
                transition : all 0.2s ease;
                font-size: 20px;
            }
            .card:hover{
                box-shadow: 0 4px 18px 0 rgba(0,0,0,0.3);
            }    
    </style>
       <style>
            <?php include "css/style.css"; ?>
        </style>
        </style><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="icon" type="image/ico" href="images/give.png" />
          <title>Update your profile</title>
    </head>
    <body>
     <center>    
        <div class="row">
                                        <div class="topnav">
<a href="orgprofile.php" style="padding-right:0;"><i class="material-icons" style="font-size:24px;">arrow_back</i></a><a><id style="color:grey;font-family:google">Daero</id> <id style="font-family:google">Let's Share</id></a>
<a class=nav2 onclick="javascript:window.location='signout.php'" style="cursor:pointer;float:right;">Logout</a>
<a class=nav1 onclick="javascript:window.location='orgprofile.php'" style="cursor:pointer;float:right;">Profile</a>

</div>
            
               
            </div>  
        </center>
        <BR>
        <div class="body">
            
            <center>

                
                <br><br><br>
                <div class="card">
                    <form method="post" action="">                       
                <br> First of Organisation Head : <input  type="text" name='head' value="<?php echo $row['head'];?>"><br><br>
                Name of organisation. : <input  type="text" name='nameorg' maxlength="500" value="<?php echo $row['nameorg'];?>"><br><br>
                  Establishment Year :  <input  type="text" name='estd' maxlength="4" value="<?php echo $row['estd'];?>"><br><br>  
                  Contact Number : <input  type="text" name='contact' maxlength="10" value="<?php echo $row['contact'];?>"><br><br>
                         <textarea cols=30 rows=10 placeholder="Address" name="address" style="font-family: google;font-size: 15px;outline:none;"><?php echo $row['address']?></textarea>
                        <br><br>
                         Pincode :  <input placeholder="Contact" type="text" name='pincode' maxlength="6" value="<?php echo $row['pincode'];?>">
                        
                         <br>
                       
                        
                        <br><br>
                        <input type="submit" style="font-family:google" class="signup" name="update" value="Update">
                    </form>
                   
                </div><BR><BR><BR>
                

        </div></center>
    </body>
</html>

<?php
    }
}
} else {
    session_start();
    $_SESSION['redirect'] = $_SERVER['REQUEST_URI'];
    header("location:orglogin.php");
}
?>     