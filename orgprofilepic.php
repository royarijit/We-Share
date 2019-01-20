<?php 
if (isset($_COOKIE["email"]) && isset($_COOKIE["password"])){
?>
<?php
$con = mysqli_connect("sql201.epizy.com", "epiz_23179578", "s5NHbLmxsEpQZ76", "epiz_23179578_letsshare");
$user =$_COOKIE['email'];
$sql2 = "SELECT * FROM organisation WHERE email = '$user'";
$result = mysqli_query($con,$sql2);
$row = mysqli_fetch_assoc($result);        

    if(isset($_POST['submit']) && isset($_COOKIE['email'])){
$filename  = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "organisation/".$row['username']."/".$filename;
move_uploaded_file($tempname,$folder);
$sql = "UPDATE organisation SET profilepic='$folder' WHERE email='$user'";
        
if(!$filename==""){
if (!mysqli_query($con,$sql)){
        
        echo "error";
        
    } else {
   
    header("location:orgprofile.php");
    
}
} else {
    echo "<script>alert('Select Image');</script>";
}
}
?>
<html>
<style>
    @font-face{
    src : url('fonts/gotham/Gotham-Bold.otf');
    font-family: gothamb;
}
    @font-face{
    src : url('fonts/google/google_sans.ttf');
    font-family: google;
}
    /*
Fonts
*/
@font-face{
    src : url('fonts/montserrat/Montserrat-Medium.otf');
    font-family: Montserrat;
}
@font-face{
    src : url('fonts/Josefin_Sans/JosefinSans-Regular.ttf');
    font-family: Josefin;
}
@font-face{
    src : url('fonts/gotham/Gotham-Light.otf');
    font-family: gotham;
}
    @font-face{
    src : url('fonts/gotham/Gotham-Bold.otf');
    font-family: gothamb;
}
/*
Styles
*/

* {
    box-sizing: border-box;
}
html,body {
    margin:0;
    
}

.header {
    width: 100%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    padding: 2px;
    font-family: google;
    font-size: 30px;
    color:rgb(235, 13, 57);
}
.menu {
    padding: 2px;
    float: left;
    width: 25%;
    border: 0.5px solid black;
}
.body{
    padding: 2px;
    float: left;
    width: 100%; 
}
input[type=email],input[type=password],input[type=text],select,option{
    text-align: center;
    width: auto;
    font-family:google;
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
input[type=email]:focus,input[type=password]:focus,input[type=text]:focus,select:focus,option:focus{
    border : 1px solid black;
}
.btn2{
    border : 1px solid gainsboro;
    
    background: #ffffff;
    padding-left:25px;
    padding-right:25px;
    padding-top:10px;
    padding-bottom:10px;
    border-radius: 4px;
    cursor: pointer;
    outline: none;
    transition: all 0.3s ease;
    text-decoration: none;
    font-family: google;   
    font-size: 18px;
}

.btn3 {
    border : 1px solid black;
    font-size: 30px;
    background: #ffffff;
    padding-left:25px;
    padding-right:25px;
    padding-top:10px;
    padding-bottom:10px;
    border-radius: 4px;
    cursor: pointer;
    outline: none;
    transition: all 0.3s ease;
    text-decoration: none;
    font-family: google;
}

.btn2:hover,.btn3:hover{
    box-shadow: 0 4px 10px 0 rgba(0,0,0,0.3);
  
  
    
}

.col1 {width:10%;}
.col2 {width:20%;}
.col3 {width:30%;}
.col4 {width:40%;}
.col5 {width:50%;}
.col6 {width:60%;}
.col7 {width:70%;}
.col8 {width:80%;}
.col9 {width:90%;}
.col10 {width:100%;height:inherit;}
.colmod { width: 100%;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);background:#ccff99}

[class*="col"]{
    float: left;
    padding: 15px;
    font-size: 12px;
    padding-top: 0;
    font-family: 'Century Gothic';    
    box-shadow: 0 4px 12px 0 rgba(0,0,0,0.11);
}
.row:after {
    content: "";
    clear: both;
    display: block;    
}

.h3{
    font-family:google;
    font-size: 22px;
    font-weight: bold;
    padding-left: 15px;
    padding-right: 15px;
}
.h3:hover{
    text-decoration: underline;
}
.tablecontent{
    font-family:'Consolas', Courier, monospace;font-size: 20px;
}

.btn{
    border-radius: 5px;
    border: 2px solid black;
    padding-left:12px;
    padding-top:10px;
    padding-bottom:10px;
    width: auto;
    height: auto;
    font-family:google;
    font-size: 20px;
    
}
.img{
    height:140px;
    width:auto;  
    
    
}
.img2{
    height:100px;
    width: auto;
    float:left;
}
.btn4{
    border : 1px solid gainsboro;
    background: #ffffff;
    padding-left:15px;
    padding-right:15px;
    padding-top:5px;
    padding-bottom:5px;
    border-radius: 2px;
    cursor: pointer;
    outline: none;
    transition: all 0.3s ease;
    text-decoration: none;
    font-family: google;   
    font-size:15px;
}
.warn {
    border: 1px solid #ffb3b3;
    border-radius: 3px;
    padding : 10px;
    background : #ffe6e6;
    font-family: sans-serif;
    color:#ff3333;
    font-size: 16px;
}

.topnav {
  overflow: hidden;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1);  
  font-family: google;
}

.topnav a {
  float: left;
  color: #000000;
  text-align: center;
  padding: 16px 16px;
  text-decoration: none;
  font-size: 20px;
 
}
.nav2:hover {
  background-color: crimson;
  color: white;
}
.nav1:hover {
  background-color: #00cc66;
  color: white;
}
.signup {
    border : 1px solid gainsboro;    
    background: #ffffff;
    padding-left:25px;
    padding-right:25px;
    padding-top:10px;
    padding-bottom:10px;
    border-radius: 4px;
    cursor: pointer;
    outline: none;
    color: black;
    text-decoration: none;
    font-family: google;   
    font-size: 18px;
}
.signup:hover {
     border : 1px solid #00cc66;  
    color: white;
    box-shadow: 0 4px 28px 0 rgba(0,0,0,0.1);  
    background: #00cc66;
}
.login {
    border : 1px solid gainsboro;    
    background: #ffffff;
    padding-left:25px;
    padding-right:25px;
    padding-top:10px;
    padding-bottom:10px;
    border-radius: 4px;
    cursor: pointer;
    outline: none;
    color: black;
    text-decoration: none;
    font-family: google;   
    font-size: 18px;
}
.login:hover {
     border : 1px solid crimson;  
    color: white;
    box-shadow: 0 4px 28px 0 rgba(0,0,0,0.1);  
    background: crimson;
}
.search {
    border : 1px solid gainsboro;    
    background: #ffffff;
    padding-left:25px;
    padding-right:25px;
    padding-top:10px;
    padding-bottom:10px;
    border-radius: 4px;
    cursor: pointer;
    outline: none;
    color: black;
    text-decoration: none;
    font-family: google;   
    font-size: 18px;
}
.search:hover {
     border : 1px solid #00ace6;  
    color: white;
    box-shadow: 0 4px 28px 0 rgba(0,0,0,0.1);  
    background: #00ace6;
}
.teachers {
    border : 1px solid gainsboro;    
    background: #ffffff;
    padding-left:25px;
    padding-right:25px;
    padding-top:10px;
    padding-bottom:10px;
    border-radius: 4px;
    cursor: pointer;
    outline: none;
    color: black;
    text-decoration: none;
    font-family: google;   
    font-size: 18px;
}
.teachers:hover {
     border : 1px solid #d24dff;  
    color: white;
    box-shadow: 0 4px 28px 0 rgba(0,0,0,0.1);  
    background: #d24dff;
}
.blue {
    border : 1px solid gainsboro;    
    background: #ffffff;
    padding-left:25px;
    padding-right:25px;
    padding-top:10px;
    padding-bottom:10px;
    border-radius: 4px;
    cursor: pointer;
    outline: none;
    color: black;
    text-decoration: none;
    font-family: google;   
    font-size: 18px;
}
.blue:hover {
     border : 1px solid #0073e6;  
    color: white;
    box-shadow: 0 4px 28px 0 rgba(0,0,0,0.1);  
    background: #0073e6;
}
    </style></style><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <head> 
        
        <title>
           
        </title>
           </head>


    <body>
         <div class="row"><center>
                                        <div class="topnav">
  <a href="orgprofile.php" style="padding-right:0;"><i class="material-icons" style="font-size:24px;">arrow_back</i></a><a><id style="color:grey;font-family:google">Daero</id> <id style="font-family:google">Let's Share</id></a>
  <a class=nav2 onclick="javascript:window.location='signout.php'" style="cursor:pointer;float:right;">Logout</a>
   
 <a class=nav1 href="orgprofile.php" style="float:right;">Profile</a>

</div>
               
               
            </div>
        <center><br><br><br><br>

                <form action="" method="post" enctype="multipart/form-data"><br>
                    <img id="show" class="img" src='<?php echo $row['profilepic']; ?>'>
                    <div id="im"></div>
                    <br><br><br>
                    <input style="visibility:hidden" id="fileid" type="file" name="uploadfile" value="" /><br>
                    <center><label for="fileid"><div style="font-family:google;border:1px solid black; width:120px; padding-left:25px;padding-right:25px;padding-top:10px;padding-bottom:10px;border-radius:4px;">CHOOSE</div></label></center>
                    <br>
                    <input class="signup" type="submit" name="submit" value="UPLOAD">
                    <br><br><br>
                   
                </form>
            <script>
                            window.onload = function() {
                                
    var a = document.getElementById('fileid');
    var b = document.getElementById('im');
    a.addEventListener('change',function(e){
       var file = a.files[0];
        if(file.type.match(/image.*/)){
            var reader = new FileReader();
            reader.onload = function(e){
                b.innerHTML = "";
                document.getElementById('show').style.display = "none";
                var img = new Image();
                img.src = reader.result;
                img.height = 140;
                b.appendChild(img);
            }
            reader.readAsDataURL(file);
        } else {
            b.innerHTML = "Not Supported";
        }
    });


}
            </script>
        </center>
    </body>

    </html>
<?php
} else {
    session_start();
    $_SESSION['redirect'] = $_SERVER['REQUEST_URI'];
    header("location:orglogin.php");
}
?>