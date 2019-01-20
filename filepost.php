<?php 
if (isset($_COOKIE["email"]) && isset($_COOKIE["password"])){
?>
<?php
$con = mysqli_connect("sql201.epizy.com", "epiz_23179578", "s5NHbLmxsEpQZ76", "epiz_23179578_letsshare");
date_default_timezone_set('Asia/Kolkata');
$user =$_COOKIE['email'];
$sql2 = "SELECT * FROM registertable WHERE email = '$user'";
$result = mysqli_query($con,$sql2);
$row = mysqli_fetch_assoc($result); 
$tablename = $row['data'];
@$caption = $_POST['caption'];
@$date = date(" d M Y h:ia ");

    if(isset($_POST['submit']) && isset($_COOKIE['email']) && isset($_POST['caption'])){
$filename  = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$size = $_FILES["uploadfile"]["size"];
$folder = $row['username']."/".$filename;
move_uploaded_file($tempname,$folder);
$sql = "INSERT INTO $tablename (content,filepost,date,size) VALUES('$caption','$folder','$date','$size')";
if(!$filename==""){
if (!mysqli_query($con,$sql)){
        
        echo "error";
        
    } else {
   
    header("location:index.php");
    
}
} else {
    echo "<script>alert('Select a PDF file');</script>";
}
}
?>
<html>
<style>
    @font-face{
    src : url('fonts/Comfortaa/Comfortaa-Bold.otf');
    font-family: comfortaa;
}
    </style>
    <head> <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>
           
        </title>
        
        <style>
        .tucks {
                    background-color: #ffffff;
                    border: none;
                    color: white;

                    align-content: space-between;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    width: 100px;
                    height: 60px;
                    border-radius: 15px;
                    border : 1px solid gainsboro;
                    

                }

                .postbtn {
                    border: 1px solid gainsboro;
                    background: #ffffff;
                    padding-left: 25px;
                    padding-right: 25px;
                    padding-top: 10px;
                    padding-bottom: 10px;
                    border-radius: 4px;
                    width:300px;
                    height:50px;
                    cursor: pointer;
                    outline: none;
                    transition: all 0.3s ease;
                    text-decoration: none;
                    font-family: gothamb;
                    font-size: 18px;
                }
                .postbtn:hover{
                     border : 1px solid black;
                }
                .tucks:hover{
                    border : 1px solid #000000;
                }
            input[type=caption],select,option{
    text-align: center;
    width: auto;
    font-family:gotham;
    font-size: 17px;
    outline: none;
    padding-left:25px;
    padding-right:25px;
    padding-top:10px;
    padding-bottom:10px;
    border-radius: 4px;
    border : 1px solid gainsboro;
    transition: all 0.4s ease;
    
}
input[type=caption]:focus{
    border : 1px solid black;
}
        </style>
    <style>
            <?php include "css/style.css"; ?>
        </style>    </style></style><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
           </head>


    <body>
         <div class="row"><center>
<div class="topnav">
<a href="index.php" style="padding-right:0;"><i class="material-icons" style="font-size:24px;">arrow_back</i></a><a><b style="color:grey;font-family:gotham">Daero</b> <b style="font-family:Josefin">Study Share</b></a>
  <a class=nav2 onclick="javascript:window.location='signout.php'" style="cursor:pointer;float:right;">Logout</a>
   
 <a class=nav1 href="profile.php" style="float:right;">Profile</a>

</div></center>
               
               
            </div>
        <center><br><br><br><br>

                <form action="" method="post" enctype="multipart/form-data" autocomplete="off"><br>
                   <!--<img class="img" src='//'> -->
                    <br>
                    <input type="caption" name="caption" placeholder="Write something" value="<?php echo @$_POST['caption'] ?>" required>
                    
                    <br>
                    <div id="input"><input style="visibility:hidden" id="fileid" type="file" name="uploadfile" value="" accept="application/pdf"/></div><br>
                    <center><label for="fileid"><div class="tucks"><img src="snalink/images/pdf.png" width="40px" height="40px"></div></label></center><br><button class="tucks" type="submit" name="submit"><img src="snalink/images/upload.png" width="40px" height="40px"></button>
                    <br><br><br>
                    <div id="dis"></div>
                    
                </form>
            <script>
            window.onload = function() {
                var a = document.getElementById('fileid');
                a.addEventListener('change', function(e){
                    var regex = new RegExp("^.+\.(([pP][dD][fF])|([jJ][pP][gG]))$");
                     if (!regex.test(a.value.toLowerCase())) {
                        alert("Invalid File");
                        location.reload();
                    } else {
                        var p1 = a.files[0].name;
                        var p2 = a.files[0].size;
                        p2 = p2/1048576;
                        p2 = p2.toFixed(3) ;
                        var p3 = a.files[0].type;
                        
                       document.getElementById('dis').innerHTML = "<div style='width:30%;' class='warn'>Selected File : "+p1+"<br><br> File Size : "+p2+" MB</div>";
                    }
                });
            }
            
            </script>
        </center>
    </body>

    </html>
<?php
} else {
    echo "Can't Access the page. <a href='profile'>Go Back</a>";
}
?>