<?php 
if (!isset($_COOKIE["email"]) && !isset($_COOKIE["password"])){
    $errormsg;
?>
        <?php
if(isset($_POST['submit'])){
    if(isset($_POST['email']) && isset($_POST['password'])){
       if(!empty(trim($_POST['email'])) && !empty(trim($_POST['password']))){
           
           
            $con = mysqli_connect("sql201.epizy.com", "epiz_23179578", "s5NHbLmxsEpQZ76", "epiz_23179578_letsshare");
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            if($con){
                $sql = "SELECT * FROM registertable WHERE email = '$email' ";
                $query = mysqli_query($con,$sql);
                $res = mysqli_num_rows($query);
                $row = mysqli_fetch_assoc($query);
                if($res==1){
                
                    if($row['email']==$email && $row['password']==$password){
                        session_start();
                        $_SESSION['email']=$email;
                        $_SESSION['fname']=$row['fname'];
                        $_SESSION['name']=$row['name'];
                        $_SESSION['lname']=$row['lname'];
                        $_SESSION['contact']=$row['contact'];
                        $_SESSION['topic']=$row['topic'];
                        $_SESSION['password']=$row['password'];
                        $_SESSION['type'] = $row['type'];
                        setcookie("email",$email,time()+86400*10);
                        setcookie("password",$password,time()+86400*10);
                        if(isset($_SESSION['redirect2'])){
                            $location = $_SESSION['redirect2'];
                            unset($_SESSION['redirect2']);
                         header("location:".$location);
                        } else {
                            header("location:index.php");
                        }
                    } else {
                        header("location:login.php?inf=wrong102");
                    } 
            } else {
                header("location:login.php?inf=account103");
            }
                    
            } else {
                echo "Error Establishing Connection ";
            }
       } else {
           if(empty(trim($_POST['email']))){
                echo "Email can't be blank";
            } else {
                 echo "Password can't be blank";
            }
       }
    } else {
        echo "Make sure the fields are set";
    }
}
?>
</div>
        
        <center>
            <font style="font-size: 20px;font-family: Consolas;">    

            </font>
</center>
    </div>    
    </body>
</html>
<?php
} else {
    header("location:profile.php");
}
?>
<html>
    <head>
                <script>
        history.pushState(null, null, '<?php echo $_SERVER["REQUEST_URI"]; ?>');
window.addEventListener('popstate', function(event) {
    window.location.assign("index.php");
});
        </script>
        <style>
        html,body{
            color:black;
            margin:0;
            background: url("images/backgrounds/Liquid-Cheese.svg");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
             .group {
                width:450px;
                padding-top: 10px;
                padding-bottom: 35px;
                border-radius: 15px;
                box-shadow: 0 4px 10px 0 rgba(0,0,0,0.4);
                background-color:rgba(255,255,255,0.5);
            }
            .cont {
                float:left;
                padding-left:20px;
                padding-top: 4px;
                font-family:gothamb;
                font-size:25px;
                font-family: google sans;
                color:#00b359;
            }
            input[type=email],input[type=password],input[type=text],select,option{
    text-align: center;
    width: 50%;
    font-family:google sans;
    font-size: 13px;
    outline: none;
    padding-left:10px;
    padding-right:10px;
    padding-top:5px;
    padding-bottom:5px;
    border-radius: 4px;
    outline:none;
    transition: all 0.4s ease;
    color: #00994d;
    
}
            input[type=email]:focus,input[type=password]:focus,input[type=text]:focus,select:focus,option:focus{
    border : 1px solid #00b359;
}
           @font-face{
    src : url('fonts/gotham/Gotham-Bold.otf');
    font-family: gothamb;
}
            @media screen and (max-width:640px) {
               .group {
                width:90%;
                padding-top: 10px;
                padding-bottom: 35px;
                border-radius: 6px;
                box-shadow: 0 4px 30px 0 rgba(0,0,0,0.2);
                 border-bottom: 5px solid #00cc66;
                 border-right: 5px solid #00cc66;
            }
            .cont {
                
                padding-left:20px;
                padding-top: 4px;
                font-family:gothamb;
                font-size:25px;
                color:#00cc66;
            } 
                input[type=email],input[type=password],input[type=text],select,option{
    text-align: center;
    width: 50%;
    font-family:google sans;
    font-size: 13px;
    outline: none;
    padding-left:10px;
    padding-right:10px;
    padding-top:5px;
    padding-bottom:5px;
    border-radius: 4px;
    
    transition: all 0.4s ease;
    
    
}

input[type=email]:focus,input[type=password]:focus,input[type=text]:focus,select:focus,option:focus{
    border : 1px solid black;
}
                
                
            }
            
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
    font-family: gotham;
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
input[type=email],input[type=password],input[type=text],select,option,input[type=search]{
    text-align: center;
    width: 60%;
    font-family:google sans;
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
input[type=email]:focus,input[type=password]:focus,input[type=text]:focus,select:focus,option:focus,input[type=search]:focus{
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
    font-family: gothamb;   
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
    font-family: gotham;
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
    font-family:'Consolas', Courier, monospace;
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
    font-family:'Consolas', Courier, monospace;
    font-size: 20px;
    
}
button{
           font-family: google sans; 
            background:#2b5ce3;
            border:2px solid #2b5ce3;
            width:40%;
            height:8%;
            color:white;
            font-size:18px;
            border-radius: 100px;
            transition: 0.2s ease;
            outline: NONE;
            
            
        }
    
        
        button:hover{
            box-shadow: 0 4px 18px 0 #2b5ce3 ;
            cursor: pointer;
        }
        button:focus{
            background:#234dbf;
            border:2px solid #234dbf;
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
    font-family: gotham;   
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
  font-family: Montserrat;
}

.topnav a {
  float: left;
  color: #000000;
  text-align: center;
  padding: 20px 20px;
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
    font-family: gothamb;   
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
    font-family: gothamb;   
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
    font-family: gothamb;   
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
    font-family: gothamb;   
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
    font-family: gothamb;   
    font-size: 18px;
}
.blue:hover {
     border : 1px solid #0073e6;  
    color: white;
    box-shadow: 0 4px 28px 0 rgba(0,0,0,0.1);  
    background: #0073e6;
}

#presentation{
  width: 480px;
  height: 120px;
  padding: 20px;
  margin: auto;
  background: #FFF;
  margin-top: 10px;
  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); 
  transition: all 0.3s; 
  border-radius: 3px;
}

#presentation:hover{
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
  transition: all 0.3s;
  transform: translateZ(10px);
}

#floating-button{
  width: 55px;
  height: 55px;
  border-radius: 50%;
  background: #db4437;
  position: fixed;
  bottom: 30px;
  right: 30px;
  cursor: pointer;
  transition: all 0.2s ease;
}
#floating-button:hover{
      box-shadow: 0 4px 28px 0 rgba(0,0,0,0.3);
}

.plus{
  color: white;
  position: absolute;
  top: 0;
  display: block;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: center;
  padding: 0;
  margin: 0;
  line-height: 55px;
  font-size: 38px;
  font-family: 'Roboto';
  font-weight: 300;
  animation: plus-out 0.3s;
  transition: all 0.3s;
}

#container-floating{
  position: fixed;
  width: 70px;
  height: 70px;
  bottom: 30px;
  right: 30px;
  z-index: 50px;
}

#container-floating:hover{
  height: 400px;
  width: 90px;
  padding: 30px;
}

#container-floating:hover .plus{
  animation: plus-in 0.15s linear;
  animation-fill-mode: forwards;
}

.edit{
  position: absolute;
  top: 0;
  display: block;
  bottom: 0;
  left: 0;
  display: block;
  right: 0;
  padding: 0;
  opacity: 0;
  margin: auto;
  line-height: 65px;
  transform: rotateZ(-70deg);
  transition: all 0.3s;
  animation: edit-out 0.3s;
}

#container-floating:hover .edit{
  animation: edit-in 0.2s;
   animation-delay: 0.1s;
  animation-fill-mode: forwards;
}

@keyframes edit-in{
    from {opacity: 0; transform: rotateZ(-70deg);}
    to {opacity: 1; transform: rotateZ(0deg);}
}

@keyframes edit-out{
    from {opacity: 1; transform: rotateZ(0deg);}
    to {opacity: 0; transform: rotateZ(-70deg);}
}

@keyframes plus-in{
    from {opacity: 1; transform: rotateZ(0deg);}
    to {opacity: 0; transform: rotateZ(180deg);}
}

@keyframes plus-out{
    from {opacity: 0; transform: rotateZ(180deg);}
    to {opacity: 1; transform: rotateZ(0deg);}
}

.nds{
  width: 40px;
  height: 40px;
  border-radius: 50%;
  position: fixed;
  z-index: 300;
  transform:  scale(0);
  cursor: pointer;
}

.nd1{
  background: #ffffff;
  right: 40px;
  bottom: 120px;
  animation-delay: 0.2s;
    animation: bounce-out-nds 0.3s linear;
  animation-fill-mode:  forwards;
}

.nd3{
  background: #ffffff;
  right: 40px;
  bottom: 180px;
  animation-delay: 0.15s;
    animation: bounce-out-nds 0.15s linear;
  animation-fill-mode:  forwards;
}

@keyframes bounce-nds{
    from {opacity: 0;}
    to {opacity: 1; transform: scale(1);}
}

@keyframes bounce-out-nds{
    from {opacity: 1; transform: scale(1);}
    to {opacity: 0; transform: scale(0);}
}

#container-floating:hover .nds{
  
  animation: bounce-nds 0.1s linear;
  animation-fill-mode:  forwards;
}

#container-floating:hover .nd3{
  animation-delay: 0.08s;
}

        </style>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta charset="UTF-8">
        <link rel="icon" type="image/ico" href="images/give.png" />
        <title>Log In</title>
        
    </head>
    <body>
    <center>
<div class="topnav">
    <a href="index.php" style="padding-right:0;"><i class="material-icons" style="font-size:24px;">arrow_back</i></a><a><id style="color:grey;font-family:google sans">Daero</id> <id style="font-family:google sans">Let's Share</id></a>
        </div>
    <BR><BR><BR><BR><BR>
    
    <div class="body">
         <div class="group">
<span class="cont">Log In</span>
<br><BR><BR><BR>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">        
            <center> <br> <input type="email" name="email" maxlength="60" required value="<?php  echo @$_POST['email']; ?>" placeholder="Email"><br><br>
            <br> <input type="password" name="password" maxlength="32" required  placeholder="Password"><br><br><br>
             <button type="submit" value="Log In" name="submit" >LOG IN </button></center>
            
            
        </form>
         <?php
             if(isset($_GET['inf'])){
             $get = $_GET['inf'];
                 echo "<font face='google sans'>";
             if($get=="login101"){
                 echo "Please Login Again";
             } else if($get=="wrong102"){
                 echo "Wrong Password or Email";
             } 
                 else if($get=="account103"){
                 echo "Account Doesn't Exist <a href='signup.php'  style=\"text-decoration: none;color:green;\" >Signup</a>";
             } 
                 else if($get==""){
                 
             } 
             }



