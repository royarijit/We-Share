
 <html>

    <head><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   
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
                width:500px;
                padding-top: 10px;
                padding-bottom: 35px;
                border-radius: 6px;
                box-shadow: 0 4px 30px 0 rgba(0,0,0,0.2);
                 border-bottom: 5px solid #00cc66;
                 
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
            .logo {
            width: 40px;
            height: 40px;
        }
 

        </style>
        <style>
            <?php include "css/style.css"; ?>
        </style>
    </head>


<div class="row">
   <div class="topnav"><a href="profile.php" style="padding-right:0;"><i class="material-icons" style="font-size:24px;">arrow_back</i></a>
  <a href="profile.php"><b style="color:grey;font-family:gotham">Daero</b> <b style="font-family:Josefin">Study Share</b></a>


</div>
            </div>


<?php
$con = mysqli_connect("sql201.epizy.com", "epiz_23179578", "s5NHbLmxsEpQZ76", "epiz_23179578_letsshare");
session_start();

@$emailstudent = $_COOKIE['email'];
@$passwordstudent = $_COOKIE['password'];


$sql1 = "SELECT * FROM registertable where email = '$emailstudent'";
$query1 = mysqli_query($con,$sql1);
$data = mysqli_fetch_assoc($query1);
$followtable = $data['followtable'];

   $sql = "SELECT id FROM $followtable";
$arr ;
    $query = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($query)){
      $arr[] = $row['id'];  
    }
$arrlen = count($arr)-1;
$arrid = $arr[$arrlen];
        $i=2;
        $j=0;
        $sql5 = "SELECT COUNT(*) FROM $followtable ";
        $r  = mysqli_query($con,$sql5);
        $n  = mysqli_fetch_array($r);
    
        for($i=1;$i<=$arrid;$i++){
            $sql6 = "SELECT * FROM $followtable WHERE id= $i ";
            $row  = mysqli_query($con,$sql6);
            $result = mysqli_fetch_assoc($row);
            $teacher = $result['teachertable'];
            
            $sqlf = "SELECT * FROM registertable WHERE data = '$teacher'";
            $qweryf = mysqli_query($con,$sqlf);
            $resultf = mysqli_fetch_assoc($qweryf);
            if($resultf['fname']!="") {
        
    ?>
    <html>

    <head>
   
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
                width:500px;
                padding-top: 10px;
                padding-bottom: 35px;
                border-radius: 6px;
                box-shadow: 0 4px 30px 0 rgba(0,0,0,0.2);
                 border-bottom: 5px solid #00cc66;
                 
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
            .logo {
            width: 40px;
            height: 40px;
        }
 

        </style>
        <style>
            <?php include "css/style.css"; ?>
        </style>
    </head>

    <body><br><br><br>
        <center>
            <div class="card">
                
                <br>
                <img class="profilepic" src="<?php echo $resultf['profilepic']; ?>"><br><br>
                <b><font style="padding-top: 10px;"face="gothamb" size=6 color=grey><?php echo $resultf['fname']."&nbsp;".$resultf['lname']; ?></font></b><br><br>
                <br>
                <br>
                <a href="<?php echo $resultf['fburl']; ?>">
                <img src="snalink/images/icons/facebook.png" class="logo"></a>&nbsp;&nbsp;
                <a href="<?php echo $resultf['twurl']; ?>">
                    <img src="snalink/images/icons/twitter.png" class="logo"></a>&nbsp;&nbsp;
                <a href="<?php echo $resultf['gpurl']; ?>">
                    <img src="snalink/images/icons/google-plus.png" class="logo"></a>&nbsp;&nbsp;
                <a href="<?php echo $resultf['insturl']; ?>">
                    <img src="snalink/images/icons/instagram.png" class="logo"></a>&nbsp;&nbsp;
                <a href="<?php echo $resultf['lnkdurl']; ?>">
                    <img src="snalink/images/icons/linkedin.png" class="logo"></a>&nbsp;&nbsp;
                <a href="<?php echo $resultf['yturl']; ?>">
                    <img src="snalink/images/icons/youtube.png" class="logo"></a>
                <br><br>
                    <a class="signup" style=" text-decoration: none;font-family: gothamb;font-size: 18px; " href=<?php echo "./user_login_true.php?u=".strtolower($resultf['username']) ?> > CHECK OUT</a><br><br></center>
            
                
            </div>
            
        </center>
        
    </body>

    </html>



    <?php
            
        }
        }
?>

