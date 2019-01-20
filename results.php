<html>
    
    <head>
        <title>
        Search results for <?php echo $_GET['search']; ?>
        </title>
    <style>
        body,html{
            margin:0;
        }
        @font-face{
    src : url('fonts/google/google_sans.ttf');
    font-family: google;
}
        .card {
               width:450px;
                padding-top: 10px;
                padding-bottom: 35px;
                border-radius: 6px;
                box-shadow: 0 4px 30px 0 rgba(0,0,0,0.2);
                 border-bottom: 5px solid #00b359;
                 border-right: 5px solid #00b359;
            }
            .profilepic {
                width: 70px;
                height: 70px;
                border-radius: 70px;
            }

            .card2 {
                width: 300px;
                height: 39px;
                border-radius: 20px 20px 0px 0px;
                background-color: aqua;
                float: center;
            }
        .topnav {
  overflow: hidden;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1);  
  
}

.topnav a {
  float: left;
  color: #000000;
  text-align: center;
  padding: 20px 20px;
  text-decoration: none;
  font-size: 20px;
 
}
        input[type="submit"]{
           font-family: google; 
            background:#2b5ce3;
            border:2px solid #2b5ce3;
            width:150px;
            height:45px;
            color:white;
            font-size:18px;
            border-radius: 100px;
            transition: 0.2s ease;
            outline: NONE;
            
            
        }
    
        
        input[type="submit"]:hover{
            box-shadow: 0 4px 10px 0 #2b5ce3 ;
            cursor: pointer;
        }
        input[type="submit"]:focus{
            background:#234dbf;
            border:2px solid #234dbf;
        }
 input[type=email],input[type=password],input[type=text],select,option,input[type=search]{
    text-align: center;
    width: 20%;
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
.signup {
    border : 1px solid #00cc66;    
    background: #00cc66;
    padding-left:40px;
    padding-right:40px;
    padding-top:15px;
    padding-bottom:15px;
    border-radius: 30px;
    cursor: pointer;
    outline: none;
    color: white;
    text-decoration: none;
    font-family: gothamb;   
    font-size: 20px;
    transition : all 0.2s ease;
}
.signup:hover {
      
    
    box-shadow: 0 4px 18px 0 #00cc66;  
    
}
input[type=email]:focus,input[type=password]:focus,input[type=text]:focus,select:focus,option:focus,input[type=search]:focus{
    border : 1px solid black;
}
        </style>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div class="topnav">
    <a href="index.php" style="padding-right:0;"><i class="material-icons" style="font-size:24px;">arrow_back</i></a><a><id style="color:grey;font-family:google">Daero</id> <id style="font-family:google">Let's Share</id></a>
        </div><br><br>
        
        <form action="" method="get">
     <center><input placeholder="Name of Place or Pincode" style="text-align:left;" type="search" name=search autocomplete="off" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>">&nbsp;&nbsp;&nbsp; <input type=submit value=Search class="search"> </center>
        
    </form>
        
        <br><br>
    <?php

$q = $_GET['search'];
if($q=="" || $q==NULL){
    die();
} else {
        if(is_numeric($q)){
            echo "<center>Search results for ".$q."</center><br><br>";


$con = mysqli_connect("sql201.epizy.com", "epiz_23179578", "s5NHbLmxsEpQZ76", "epiz_23179578_letsshare");
$sql = "select * from organisation where pincode like '%$q%'";
$result = mysqli_query($con,$sql);
$num = mysqli_num_rows($result);
if($num>0){ 
while($row=mysqli_fetch_assoc($result)){
    if($row['email']==""){
        continue;
    }
    if($row['email']=="" && $num==1){
        echo "<br><center>Nothing Found</center>";
        continue;
    }
    ?>
    
    <center>
<div class="card">
                
                <br> <br>
                <img class="profilepic" src="<?php echo $row['profilepic']; ?>"><br><br>
                <font style="padding-top: 10px;font-family:google"  size=6 color=grey><?php echo $row['head']?></font><br><br>
                
                 
                    
                
            
                <font style="padding-top: 10px;" face="google" size=4 color=grey>Email:&nbsp;
                    <?php
                                           $em = $row['email'] ;
                                           echo "<a style='text-decoration:none;color:crimson;' href='mailto:$em'>$em</a>";
                    ?>
                </font>
                <br><br>
                <font style="padding-top: 10px;" face="google" size=4 color=grey>Pincode:&nbsp;
                    <?php
                                           $pin = $row['pincode'] ;
                                           echo "$pin";
                    ?>
                </font>
                <br><br><br>
               <center> 
               <?php if (isset($_COOKIE["email"]) && isset($_COOKIE["password"])){ ?>
               <form action="donate.php" method="post" >
                  <input style="display:none;" name="orgemail" value=<?php echo $row['email']; ?>>
                  <button style="font-family:google;" class="signup" type="submit">Donate</button>
                </form>
                <?php }else {
                    echo "<font style='padding-top: 10px;' face='google' size=4 color=green>Login to Donate</font>";
                } ?></center>
               <center>
                <br>
                    

                <BR>
            </div>
    </center>
<br><br><br>
<?php
}
} else{
    echo "<br><center>Nothing Found</center>";
}
        } else {
echo "<center>Search results for ".$q."</center><br><br>";

$text = explode(" ",$q);
$con = mysqli_connect("sql201.epizy.com", "epiz_23179578", "s5NHbLmxsEpQZ76", "epiz_23179578_letsshare");
$sql = "select * from organisation where ";
$i=0;
foreach($text as $term){
    $i++;
    if($i==1){
        $sql .= "head like '%$term%' ";
    } else {
        $sql .= "or head like '%$term%' ";
    }
}
$result = mysqli_query($con,$sql);
$num = mysqli_num_rows($result);
if($num>0){
while($row=mysqli_fetch_assoc($result)){
    if($row['email']==""){
        continue;
    }
    ?>
    
    <center>
<div class="card">
                
                <br> <br>
                <img class="profilepic" src="<?php echo $row['profilepic']; ?>"><br><br>
                <font style="padding-top: 10px;font-family:google"  size=6 color=grey><?php echo $row['head'] ?></font><br><br>
                
                 
                    
                <font style="padding-top: 10px;" face="google" size=4 color=grey>Estd. :&nbsp;
                    <?php $mo = $row['estd'] ;
                                           echo "$mo"; ?>
                </font><br><br>
            
                <font style="padding-top: 10px;" face="google" size=4 color=grey>Email:&nbsp;
                    <?php
                                           $em = $row['email'] ;
                                           echo "<a style='text-decoration:none;color:crimson;' href='mailto:$em'>$em</a>";
                    ?>
                </font>
                <br><br><br>
                <center>
                
                <?php if (isset($_COOKIE["email"]) && isset($_COOKIE["password"])){
                    ?>
                     <form action="donate.php" method="post" >
                  <input style="display:none;" name="orgemail" value=<?php echo $row['email']; ?>>
                  <button style="font-family:google;" class="signup" type="submit">Donate</button>
                </form>
                <?php } else {
                    echo "<font style='padding-top: 10px;' face='google' size=4 color=green>Login to Donate</font>";
                } ?>
                </center>
               <center>
                <br>
                    

                <BR>
            </div>
    </center>
<br><br><br>
<?php
}
} else{
    echo "<br><center>Nothing Found</center>";
}
        }
}