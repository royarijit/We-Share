
<?php 
if (!isset($_COOKIE["email"]) && !isset($_COOKIE["password"])){
?>

<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
    @font-face{
    src : url('fonts/google/google_sans.ttf');
    font-family: google_sans;
}
        body{
            font-family: google_sans;
            margin:0;
        }
        .body1{
            margin:0;
            background: url("images/letsshare.jpg");
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height:100%;
        }
        .body2{
            margin:0;
            background: url("images/background2.png");
            background-attachment: fixed;
            background-size: cover;
            height:100%;
        }
        .body3{
            margin:0;
            background: url("images/background3.png");
            background-attachment: fixed;
            background-size: cover;
            height:100%;
        }
        .header{
            font-size:70px;
            color:white;
            padding-top:10px;
            
        }
        .headerdark{
            font-size:70px;
            color:grey;
            padding-top:10px;
            
        }
        .content{
            color:white;
            font-size:30px;
            text-align: center;
            background: rgba(0,0,0,0.1); 
            width: 1300px;
            border-radius: 20px;
            transition: 1s ease;
            padding: 10px;
        }
        .content:hover{
           background: rgba(0,0,0,0.4); 
        }
        div.buttongroup a {
            border: 3px solid white;
            background: rgba(0,0,0,0.4);
            font-size:30px;
            padding-top:10px;
            padding-bottom:10px;
            padding-left:30px;
            padding-right:30px;
            color:white;
            text-decoration: none;
            border-radius: 40px;
            transition: 1s ease;
            
        }
        div.buttongroup a:hover{
            background: rgba(255,255,255,0.1);
        }
        input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 40px;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    float: right;
    margin: 10px;
    font-family: google sans;
}
.infopanel{
             width: auto;
            
    box-sizing: border-box;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 40px;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 25px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    float: left;
    margin: 10px;
            
            text-align: center;
    font-family: google_sans;
            color:black;
        }

input[type=text]:focus {
    width: 40%;
    outline: none;
    border: none;
}
    @media only screen and (max-width: 600px) {
  div.buttongroup a {
            border: 3px solid white;
            background: rgba(0,0,0,0.4);
            font-size:19px;
            padding-top:5px;
            padding-bottom:5px;
            padding-left:10px;
            padding-right:10px;
            color:white;
            text-decoration: none;
            border-radius: 40px;
            transition: 1s ease;
            
        }
            .content{
            color:white;
            font-size:22px;
            text-align: center;
            background: rgba(0,0,0,0.1); 
            width: 80%;
            border-radius: 20px;
            transition: 1s ease;
            padding: 10px;
        }
            .header{
            font-size:50px;
            color:white;
            padding-top:10px;
            
        }
}
    </style>
     <link rel="icon" type="image/ico" href="images/give.png" />
    <title>
    
        Let's Share
    </title>
</head>

<body>
    <center>
        <span class=infopanel><a  href="about.php" target="_blank" style="text-decoration:none;color:black;font-family: google_sans">About</a> | <a  href="service.php" target="_blank" style="text-decoration:none;color:black;font-family: google_sans">Services </a>|<a  href="help.php" target="_blank" style="text-decoration:none;color:black;font-family: google_sans"> Help</a></span>
        <form action="results.php" method="get">
             
            <input type="text" name="search" placeholder="Search">
        </form>
        
        
        <div class=body1>
            <div class=header><br>Let's Share</div>
            <br><br>
            <div class=content>Share what you have and those who are in need can use it<br>
                You can provide anything you want and your little help makes a big difference<br>
                Your contribution means a lot to us<br>

            </div>
            <br><br><br><br>
            <div class="buttongroup">
                <a href="signup.php">Register</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="login.php">Log In</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="orglogin.php">Login as organisation</a><br><br><br><br><br><a href="orgsignup.php">Organisations start here</a>
                <br><br><br><br><br><br>

            </div>
        </div>
        <div class=body2>
            <div class=headerdark>How this works ?</div>
            <br><br>
            <div class=content>Its as simple as sending a message... Trust me. Create a profile and search for a place near you where you want to share what you want, by sending a proposal message. When the proposal message gets accepted you will come to know and the volunteers from the organisation will contact you and you can discuss the meeting place where you can handover to them, what you want to share. So what are you waiting for ? Be the change! It starts with YOU !
            </div>
            <br><br><br><br>

        </div>
        <div class=body3>
            <div class=header>Become a volunteer today !</div>
            <br><br>
            <div class=content>If you are a volunteer of some children home or know about any near you, you can create a profile and help them by becoming a volunteer to handle all the donation requests and communicating with the person who wants to donate and help them to send the donated items to the right destination.
            </div>
            <br><br><br><br><br><br><div class="buttongroup"><a href="orgsignup.php">Become a volunteer</a></div><br>

        </div>
    </center>
</body>

</html>
<?php
} else {
    $url = $_SERVER['HTTP_REFERER'];
    $email = $_COOKIE["email"];
    $con = mysqli_connect("sql201.epizy.com", "epiz_23179578", "s5NHbLmxsEpQZ76", "epiz_23179578_letsshare");
    $sql = "select * from registertable where email='$email' ";
    $sql2 = "select * from organisation where email='$email' ";
    $res = mysqli_query($con,$sql);
    $res2 = mysqli_query($con,$sql2);
    $num = mysqli_num_rows($res);
    $num2 = mysqli_num_rows($res2);
    if($num>$num2){
    $row = mysqli_fetch_assoc($res);
    
 
    ?>
    <html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
    @font-face{
    src : url('fonts/google/google_sans.ttf');
    font-family: google_sans;
}
        body{
            font-family: google_sans;
            margin:0;
        }
        .body1{
            margin:0;
            background: url("images/letsshare.jpg");
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height:100%;
        }
        .body2{
            margin:0;
            background: url("images/background2.png");
            background-attachment: fixed;
            background-size: cover;
            height:100%;
            font-color:grey;
        }
        .body3{
            margin:0;
            background: url("images/background3.png");
            background-attachment: fixed;
            background-size: cover;
            height:100%;
        }
        .header{
            font-size:70px;
            color:white;
            padding-top:10px;
            
        }
        .headerdark{
            font-size:70px;
            color:grey;
            padding-top:10px;
            
        }
        .content{
            color:white;
            font-size:30px;
            text-align: center;
            background: rgba(0,0,0,0.1); 
            width: 1300px;
            border-radius: 20px;
            transition: 1s ease;
            padding: 10px;
        }
        .content:hover{
           background: rgba(0,0,0,0.4); 
        }
        div.buttongroup a {
            border: 3px solid white;
            background: rgba(0,0,0,0.4);
            font-size:30px;
            padding-top:10px;
            padding-bottom:10px;
            padding-left:30px;
            padding-right:30px;
            color:white;
            text-decoration: none;
            border-radius: 40px;
            transition: 1s ease;
            
        }
        div.buttongroup a:hover{
            background: rgba(255,255,255,0.001);
        }
        input[type=text],.log {
    width: 130px;
    box-sizing: border-box;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 40px;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    float: right;
    margin: 10px;
    font-family: google sans;
            height:56px;
            color:black;
}
        .user{
             width: auto;
            
    box-sizing: border-box;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 40px;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 25px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    float: right;
    margin: 10px;
            
            text-align: center;
    font-family: google sans;
            color:black;
        }
        .infopanel{
             width: auto;
            
    box-sizing: border-box;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 40px;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 25px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    float: left;
    margin: 10px;
            
            text-align: center;
    font-family: google_sans;
            color:black;
        }

input[type=text]:focus {
    width: 40%;
    outline: none;
    border: none;
}
    .img {
              
                width: 30px;
                height: 30px;
                border-radius: 100%;
        vertical-align: middle;
                
            
        }
    </style>
     <link rel="icon" type="image/ico" href="images/give.png" />
    <title>
        Let's Share
    </title>
</head>

<body>
    <center>
        <form action="results.php" method="get">
           <span class=infopanel><a style="text-decoration:none;color:black;" href="about.php" target="_blank">About</a> | <a style="text-decoration:none;color:black;" href="service.php" target="_blank">Services </a>|<a style="text-decoration:none;color:black;" href="help.php" target="_blank"> Help</a></span>
            <span class=user><center><img class="img" src="<?php echo $row['profilepic']; ?>"> <a style="text-decoration:none;color:black;" href="profile.php"><?php echo $row['name'];?></a> | <a style="text-decoration:none;color:black;" href="signout.php">Logout</a></center></span><input type="text" name="search" placeholder="Search">
        </form>
        <div class=body1>
            <div class=header><br>Let's Share</div>
            <br><br>
            <div class=content>Share what you have and those who are in need can use it<br>
                You can provide anything you want and your little help makes a big difference<br>
                Your contribution means a lot to us<br>

            </div>
            
            <br><br><br><br><br><br><br>
            <div class="buttongroup">
                
                <a href="results.php">Make a Donation</a>

            </div>
        </div>
        <div class=body2>
            <div class=headerdark>How this works ?</div>
            <br><br>
            <div class=content>Its as simple as sending a message... Trust me. Create a profile and search for a place near you where you want to share what you want, by sending a proposal message. When the proposal message gets accepted you will come to know and the volunteers from the organisation will contact you and you can discuss the meeting place where you can handover to them, what you want to share. So what are you waiting for ? Be the change! It starts with YOU !
            </div>
            <br><br><br><br>

        </div>
       <!-- <div class=body3>
            <div class=header>Become a volunteer today !</div>
            <br><br>
            <div class=content>If you are a volunteer of some children home or know about any near you, you can create a profile and help them by becoming a volunteer to handle all the donation requests and communicating with the person who wants to donate and help them to send the donated items to the right destination.
            </div>
            <br><br><br><br>

        </div>-->
    </center>
</body>

</html>
 <?php   
} else {
        $row = mysqli_fetch_assoc($res2);
        ?>
<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
    @font-face{
    src : url('fonts/google/google_sans.ttf');
    font-family: google_sans;
}
        body{
            font-family: google_sans;
            margin:0;
        }
        .body1{
            margin:0;
            background: url("images/letsshare.jpg");
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height:100%;
        }
        .body2{
            margin:0;
            background: url("images/background2.png");
            background-attachment: fixed;
            background-size: cover;
            height:100%;
        }
        .body3{
            margin:0;
            background: url("images/background3.png");
            background-attachment: fixed;
            background-size: cover;
            height:100%;
        }
        .header{
            font-size:70px;
            color:white;
            padding-top:10px;
            
        }
        .content{
            color:white;
            font-size:30px;
            text-align: center;
            background: rgba(0,0,0,0.1); 
            width: 1300px;
            border-radius: 20px;
            transition: 1s ease;
            padding: 10px;
        }
        .content:hover{
           background: rgba(0,0,0,0.4); 
        }
        div.buttongroup a {
            border: 3px solid white;
            background: rgba(0,0,0,0.4);
            font-size:30px;
            padding-top:10px;
            padding-bottom:10px;
            padding-left:30px;
            padding-right:30px;
            color:white;
            text-decoration: none;
            border-radius: 40px;
            transition: 1s ease;
            
        }
        div.buttongroup a:hover{
            background: rgba(255,255,255,0.001);
        }
        input[type=text],.log {
    width: 130px;
    box-sizing: border-box;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 40px;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    float: right;
    margin: 10px;
    font-family: google sans;
            height:56px;
            color:black;
}
        .user{
             width: auto;
            
    box-sizing: border-box;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 40px;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 25px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    float: right;
    margin: 10px;
            
            text-align: center;
    font-family: google sans;
            color:black;
        }
        .infopanel{
             width: auto;
            
    box-sizing: border-box;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 40px;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 25px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    float: left;
    margin: 10px;
            
            text-align: center;
    font-family: google_sans;
            color:black;
        }

input[type=text]:focus {
    width: 40%;
    outline: none;
    border: none;
}
    .img {
              
                width: 30px;
                height: 30px;
                border-radius: 100%;
        vertical-align: middle;
                
            
        }
    </style>
    <link rel="icon" type="image/ico" href="images/give.png" />
    <title>
        Let's Share
    </title>
</head>

<body>
    <center>
        <form action="results.php" method="get">
           <span class=infopanel><a style="text-decoration:none;color:black;" href="about.php" target="_blank">About</a> | <a style="text-decoration:none;color:black;" href="service.php" target="_blank">Services </a>|<a style="text-decoration:none;color:black;" href="help.php" target="_blank"> Help</a></span>
            <span class=user><center><img class="img" src="<?php echo $row['profilepic']; ?>"> <a style="text-decoration:none;color:black;" href="orgprofile.php"><?php echo $row['head'];?></a> | <a style="text-decoration:none;color:black;" href="signout.php">Logout</a></center></span><input type="text" name="search" placeholder="Search">
        </form>
        <div class=body1>
            <div class=header><br>Let's Share</div>
            <br><br>
            <div class=content>Share what you have and those who are in need can use it<br>
                You can provide anything you want and your little help makes a big difference<br>
                Your contribution means a lot to us<br>

            </div>
            
            <br><br><br><br>
            <div class="buttongroup">
                
                <a href="orgprofile.php">Offerings from people</a>

            </div>
        </div>
       <!-- <div class=body2>
            <div class=headerdark>How this works ?</div>
            <br><br>
            <div class=content>Its as simple as sending a message... Trust me. Create a profile and search for a place near you where you want to share what you want, by sending a proposal message. When the proposal message gets accepted you will come to know and the volunteers from the organisation will contact you and you can discuss the meeting place where you can handover to them, what you want to share. So what are you waiting for ? Be the change! It starts with YOU !
            </div>
            <br><br><br><br>

        </div>-->
        <div class=body3>
            <div class=header>Become a volunteer today !</div>
            <br><br>
            <div class=content>If you are a volunteer of some children home or know about any near you, you can create a profile and help them by becoming a volunteer to handle all the donation requests and communicating with the person who wants to donate and help them to send the donated items to the right destination.
            </div>
            <br><br><br><br>

        </div>
    </center>
</body>

</html>

<?php
    }
}