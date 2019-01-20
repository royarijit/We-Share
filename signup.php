<?php 
if (!isset($_COOKIE["email"]) && !isset($_COOKIE["password"])){
?>
<html>
<head>
    <title>
    
    </title>
    <style>
        html,body{
            color:black;
            margin:0;
            background: url("images/backgrounds/Liquid-Cheese.svg");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .header{
            text-align: center;
            font-family: google sans;   
            font-size:60px;
            color:white;
            
            
        }
        .body1{
            margin:0px;
            
            height:auto;
            padding-top: 80px;
            padding-left: 400px;
            padding-bottom: 80px;
        }
        .parent-box{
            width: 550px;
            height: auto;
            background-color: rgba(255,255,255,0.5);
            border-radius: 10px;
            transition: 1s ease;
            padding-top: 20px;
            padding-left: 20px;
            color: black;
            font-size: 30px;
            font-family: google sans;
            
        }
        .parent-box:hover{
             
        }
        .signup{
            color: black;
            font-family: google sans;
            font-size: 25px;
            float: left;
            margin-left: 20px;
            margin-top: 20px;
        }
        .parent{
            width: 60px;
            height: 70px;
            background-color: linear-gradient(red,blue);
            border-radius: 40px;
            

        }
        
        input[type=text],input[type=date],input[type=email],input[type=password]{
        width:auto;
        height: 10%;
        font-size: 20px;
        font-family: google sans;   
        background:rgba(0,0,0,0);
        
        
        outline:none;
        text-align:center;
        padding: 8px;
        color: #000000;
        border-bottom: 2px solid #0045ff;
        border-left: 2px solid rgba(255, 255, 255, 0);
        border-right: 2px solid rgba(255, 255, 255, 0);
        border-top:2px solid rgba(255, 255, 255, 0);
    }
    input[type=text]:focus,input[type=date]:focus,input[type=email]:focus,input[type=password]:focus{
        border-bottom: 2px solid green;
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
    .warn {
    border: 1px solid #ffb3b3;
    border-radius: 3px;
    padding : 10px;
    background : #ffe6e6;
    font-family: google;
    color:#ff3333;
    font-size: 16px;
}
        
        button:hover{
            box-shadow: 0 4px 18px 0 #2b5ce3 ;
            cursor: pointer;
        }
        button:focus{
            background:#234dbf;
            border:2px solid #234dbf;
        }
        
    
    </style>
    </head>
    <body><br><br>
        <div class=header>Start Sharing</div>
        <br><br>
        <center>
    <div class="parent-box">
        
        
        <br><center>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input name="fname" type="text" required placeholder="First Name" value = "<?php echo @$_POST['fname']; ?>"><br><br>
        <input name="lname" type="text" required placeholder="Last Name" value = "<?php echo @$_POST['lname']; ?>"><br><br>
        <input name="email" type="text" required placeholder="Email ID" value = "<?php echo @$_POST['email']; ?>"><br><br>
        <input name="contact" type="text" required placeholder="Contact Number" value = "<?php echo @$_POST['contact']; ?>"><br><br>
        <input name="password" type="password" required placeholder="Password"><br><br>
        <input name="cpassword" type="password" required placeholder="Confirm Password">
        <br><br>
        
        <br>
            <button name="signup" type="submit">CREATE ACCOUNT</button>
            <br><br>
            </form>
        </center>
        </div>
        </center>
        
    
    </body>
</html>

<?php
echo "<font color=white size=5<center>";
@$fname = str_replace(" ",'', $_POST['fname']);
@$lname = str_replace(" ",'', $_POST['lname']);
@$email = str_replace(" ",'', $_POST['email']);
@$contact = str_replace(" ",'', $_POST['contact']);
@$password = str_replace(" ",'', $_POST['password']);
@$cpassword = str_replace(" ",'', $_POST['cpassword']);
@$hash = md5($password);


function password(){
    if($GLOBALS['password']==$GLOBALS['cpassword']){
         
    } else {
        echo "<br><center>Password not matched";
    }
}
function emailpass(){
    if(isset($GLOBALS['email']) && isset($GLOBALS['password'])){
        
    } else {
        echo "<br> <center>Password and email are mandatory";
    }
}
function verify(){
    if(!empty(trim($GLOBALS['email'])) && !empty(trim($GLOBALS['password']) && !empty(trim($GLOBALS['fname'])) && !empty(trim($GLOBALS['lname'])) && !empty(trim($GLOBALS['contact'])) && !empty(trim($GLOBALS['cpassword'])))){
         
    } else {
        echo "<br><center>Make sure all the fields are not empty";
    }
}
function contact(){
    if(is_numeric($GLOBALS['contact'])){
        
    } else {
        echo "<br><center>Invalid Contact number";
    }
}


$con = mysqli_connect("sql201.epizy.com", "epiz_23179578", "s5NHbLmxsEpQZ76", "epiz_23179578_letsshare");
if(isset($_POST['signup'])){
       if(isset($email) && isset($password)){
           if($password==$cpassword){
            if(!empty(trim($email)) && !empty(trim($password)) && !empty(trim($fname)) && !empty(trim($lname)) && !empty(trim($contact)) && !empty(trim($cpassword))){
                if(is_numeric($contact)){
                if($con){
                    $sql = "SELECT * FROM registertable WHERE email = '$email'";
                    $query = mysqli_query($con, $sql);
                    $sqlc = "SELECT * FROM organisation WHERE email = '$email'";
                    $queryc = mysqli_query($con, $sqlc);
                    if(mysqli_num_rows($query)==0 && mysqli_num_rows($queryc)==0){
                        session_start();
                        $_SESSION['email']=$email;
                        $_SESSION['password']=$hash;
                        $_SESSION['fname']=$fname;
                        $_SESSION['lname']=$lname;
                        $_SESSION['contact']=$contact;       
                        
                        header("location:data.php");
                    } else {
                        echo "<center>Email Exists ";
                    }
                } else {
                     echo "<br>Error Establishing Connection ";
                }
            } else {
                    password();
                    emailpass();
                    verify();
                echo "<br><center>Invalid Contact number";
            }

            } else {
               contact();
                emailpass();
                password();
                 echo "<br><center>Make sure all the fields are not empty";
           
            }
           } else {
               verify();
               contact();
               emailpass();
               echo "<br><center>Password not matched";
           }
       } else {
           password();
           verify();
           contact();
             echo "<br><center>Password and email are mandatory";
       }
 } 
} else {
    header("location:index.php");
}