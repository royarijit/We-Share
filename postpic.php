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

    if(isset($_POST['submit']) && isset($_COOKIE['email']) || isset($_POST['caption'])){
$filename  = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = $row['username']."/".$filename;
        $id = date("YsHm");
move_uploaded_file($tempname,$folder);
$sql2 = "INSERT INTO post (content,postpic,date,postid) VALUES('$caption','$folder','$date','$id') "  ;
       
        
$sql = "INSERT INTO $tablename (content,postpic,date,postid) VALUES('$caption','$folder','$date','$id')";
if(!$filename==""){
if (!mysqli_query($con,$sql)){
        
        echo "error";
        
    } else {
   mysqli_query($con,$sql2);
    header("location:index.php");
    
}
} else {
    echo "<script>alert('Select an Image');</script>";
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
    <head> <link rel="stylesheet" type="text/css" href="css/style.css"> <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
        </style>
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
                    <div id=display></div>
                    <br>
                    <input type="caption" name="caption" placeholder="Write something" value="<?php echo @$_POST['caption'] ?>" required>
                    
                    <br>
                    <div id=input><input style="visibility:hidden" id="fileid" type="file" name="uploadfile" value="" accept="image/*"/></div><br>
                    <center><label for="fileid"><div class="tucks"><img src="snalink/images/photo.png" width="40px" height="40px"></div></label></center><br><button class="tucks" type="submit" name="submit"  style="outline:none;"><img src="snalink/images/upload.png" width="40px" height="40px"></button>
                    <br><br><br>
                    <p id="w"></p>
                </form>
            <script>
            
                window.onload = function() {
    var a = document.getElementById('fileid');
    var b = document.getElementById('display');
    a.addEventListener('change',function(e){
       var file = a.files[0];
        if(file.type.match(/image.*/)){
            var reader = new FileReader();
            reader.onload = function(e){
                b.innerHTML = "";
                var img = new Image();
                img.src = reader.result;
                img.width = 350;
                b.appendChild(img);
            }
            document.getElementById('display').innerHTML ="";
            reader.readAsDataURL(file);
        } else {
             alert("Invalid File");
           location.reload();
           
            
            
        }
    });


}
            
            </script>
        </center>
    </body>

    </html>
<?php
} else {
    echo "Can't Access the page. <a href='profile.php'>Go Back</a>";
}
?>