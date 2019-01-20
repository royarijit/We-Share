<html>
<head><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>

         
            .card {
               width:450px;
                padding-top: 10px;
                padding-bottom: 35px;
                border-radius: 6px;
                box-shadow: 0 4px 30px 0 rgba(0,0,0,0.2);
                 border-bottom: 5px solid #00b359;
                 border-right: 5px solid #00b359;
            }
        
                    @font-face{
    src : url('fonts/gotham/Gotham-Bold.otf');
    font-family: gothamb;
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
 

        </style>
    
    <title>
   <?php
    if(isset($_GET['q']) && !empty($_GET['q']))
    {
        echo "Daero Search - ".$_GET['q'];
    } else {
        echo "Daero Search";
    }
    ?>
    </title>
    <link href="css/style.css" rel="stylesheet">
    </head>
<body>

<div class="topnav">
<a href="profile.php" style="padding-right:0;"><i class="material-icons" style="font-size:24px;">arrow_back</i></a><a><b style="color:grey;font-family:gotham">Daero</b> <b style="font-family:Josefin">Study Share</b></a>
        </div>
    <br><br><center>
    <font face="google sans" size=7 color=grey>Search for a teacher</font></center>

    <br><br><br>
    <form action="" method="get">
     <center><input placeholder="Enter a keyword" style="text-align:left;" type="search" name=q autocomplete="off" value="<?php if(isset($_GET['q'])){echo $_GET['q'];}?>"> <input type=submit name=search value=Search class="search"> </center>
        
    </form>
    </body>
</html>
<center>
<?php
    session_start();

@$emailstudent = $_COOKIE['email'];
@$passwordstudent = $_COOKIE['password'];
    
    
if(isset($_GET['search'])){
    if(!empty($_GET['q'])) {
$search = $_GET['search'];
$q = $_GET['q'];
echo "<id style=\"font-family:Arial\">Search Result for ".$q."</id><BR>";

$text = explode(" ",$q);
$sql = "SELECT * FROM registertable WHERE type = 'teacher' AND  ";
$i = 0;
foreach ($text as $each) {
    $i++;
    if($i==1){
        $sql .= "name LIKE '%$each%' ";
    } else {
        $sql .= "OR name LIKE '%$each%' ";
    }
}
$con = mysqli_connect("sql201.epizy.com", "epiz_23179578", "s5NHbLmxsEpQZ76", "epiz_23179578_letsshare");
$query = mysqli_query($con,$sql);
$result = mysqli_num_rows($query);
if($result>0){
    while($row=mysqli_fetch_assoc($query)){ ?> <br> <br> 
        <div class="card">
                
                <br> <br>
                <img class="profilepic" src="<?php echo $row['profilepic']; ?>"><br><br>
                <b><font style="padding-top: 10px;font-family:gothamb"  size=6 color=grey><?php echo $row['fname']."&nbsp;".$row['lname']; ?></font></b><br><br>
                
                 <font  size=4 face="gothamb"><?php
                        if($row['topic']){
                            echo "Teacher of ".$row['topic'];
                             echo "<br><br>";
                        }
                        ?>
                      <font  size=4 face="gotham"><?php
                        if($row['class']){
                            echo "Student of ".$row['class'];
                             echo "<br><br>";
                        }
                        ?>
                <font style="padding-top: 10px;" face="gotham" size=4 color=grey>Contact Number:&nbsp;
                    <?php $mo = $row['contact'] ;
                                           echo "<a style='text-decoration:none;color:crimson;' href='tel:$mo'>$mo</a>"; ?>
                </font><br><br>
                          <?php 
    if($row['qualification']!=""){
        ?> <font style="padding-top: 10px;" face="gotham" size=4 color=grey>Qualifications:&nbsp;
                <?php
        
    echo $row['qualification']; 
        echo "</font><br><br>";
    }?>
                <font style="padding-top: 10px;" face="gotham" size=4 color=grey>Email:&nbsp;
                    <?php
                                           $em = $row['email'] ;
                                           echo "<a style='text-decoration:none;color:crimson;' href='mailto:$em'>$em</a>";
                    ?>
                </font>
                <br><br>
               <center>
                <br>
                   
                   <form method="post" action="follow.php">
                       <input name="teacher" style="visibility:hidden" value="<?php echo $row['username']; ?>">
                       <input name="student" style="visibility:hidden" value="<?php echo $emailstudent; ?>">
                    <button type="submit" class="button_blue" style=" text-decoration: none;font-family: gothamb;font-size: 18px; " > FOLLOW</button></form><br>
                   
                   
                          <a class="signup" style=" text-decoration: none;font-family: gothamb;font-size: 18px; " href=<?php echo "./user?u=".strtolower($row['username']); ?> > VIEW</a>
                          </center>

                <BR>
            </div>
                   <BR><BR>      <?php
    }
} else {
    echo "No result Found";
}
} else {
        echo "Enter the Search Term";
    }
}
?>
    </center>