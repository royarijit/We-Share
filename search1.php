      <?php
$con = mysqli_connect("sql201.epizy.com", "epiz_23179578", "s5NHbLmxsEpQZ76", "epiz_23179578_letsshare");
        $sql5 = "SELECT COUNT(id) FROM registertable ";
        $r  = mysqli_query($con,$sql5);
        $n  = mysqli_fetch_array($r);
$sql = "SELECT id FROM registertable";
$arr ;
    $query = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($query)){
      $arr[] = $row['id'];  
    }
$arrlen = count($arr)-1;
$arrid = $arr[$arrlen];
$e ;

$i = 2;
for($i=2;$i<=$arrid;$i++){
$sql = "SELECT * FROM registertable WHERE id = '$i'";
    $query = mysqli_query($con,$sql);
    $no = mysqli_num_rows($query);
    $row = mysqli_fetch_assoc($query);
    
    if($no){
        $e[] = $row['fname']." ".$row['lname'];
    } 
    
}

$j = array_unique($e);

$r = json_encode(@$j);
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reboot Remastered</title>
  <link rel="stylesheet" href="css/jquery-ui.css">
  <script src="js/jquery-3.3.1.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script>

  $(function() {

    var availableTags =<?php echo $r ;?> ;
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
     <style>

         
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
                font-family: gothamb;
                transition : all 0.5s ease;
            }
            .card:hover{
                box-shadow: 0 4px 18px 0 rgba(0,0,0,0.3);
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
<style>
            <?php include "css/style.css"; ?>
        </style><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
</head>
<body>

    <center>
            <div class="topnav">
<div class="topnav">
    <a href="index" style="padding-right:0;"><i class="material-icons" style="font-size:24px;">arrow_back</i></a><a><b style="color:grey;font-family:gotham">Daero</b> <b style="font-family:Josefin">Study Share</b></a>
        </div>
</div><br><br><br>
 <form method="get" action="">
<div class="ui-widget">
  <label for="tags"></label>
  <input type=search id="tags" name="q" value="<?php echo @$_GET['q'];  ?>" style="outline: none;font-family:gotham;font-size: 20px;padding:6px;">
   
   
   
</div><br>
  <input class="search" type=submit name=show value=Search  >
 </form>
</body>
</html>
<?php
if(isset($_GET['show'])){

$tag = $_GET['q'];
$sql = "SELECT * FROM registertable WHERE name = '$tag'";
$query = mysqli_query($con,$sql);
$n = mysqli_num_rows($query);
    echo "Your Query returned ".$n." record(s) ";
while($result = mysqli_fetch_assoc($query)){
        
           
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
                width: 700px;
                height: auto;
                border-radius: 2px 2px 2px 2px;
                border: 1px solid gainsboro;
                padding-top: 60px;
                padding-bottom: 60px;
                padding-left: 30px;
                padding-right: 30px;
                border-radius: 5px;
                font-family: gothamb;
                transition : all 0.5s ease;
            }
            .card:hover{
                box-shadow: 0 4px 18px 0 rgba(0,0,0,0.3);
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
 

        </style>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body><br><br><br><br>
        <center>
            <div class="card">
                
                <br>
                <img class="profilepic" src="<?php echo $result['profilepic']; ?>"><br><br>
                <b><font style="padding-top: 10px;"face="gothamb" size=6 color=grey><?php echo $result['fname']."&nbsp;".$result['lname']; ?></font></b><br><br>
                
                 <font  size=4><?php
                        if($result['topic']){
                            echo "Teacher of ".$result['topic'];
                             echo "<br><br>";
                        }
                        ?>
                      <font  size=4><?php
                        if($result['class']){
                            echo "Student of ".$result['class'];
                             echo "<br><br>";
                        }
                        ?>
                <font style="padding-top: 10px;" face="gotham" size=4 color=grey>Contact Number:&nbsp;
                    <?php echo $result['contact'] ?>
                </font><br><br>
                          <?php 
    if($result['qualification']!=""){
        ?> <font style="padding-top: 10px;" face="gotham" size=4 color=grey>Qualifications:&nbsp;
                <?php
        
    echo $result['qualification']; 
        echo "</font><br><br>";
    }?>
                <font style="padding-top: 10px;" face="gotham" size=4 color=grey>Email:&nbsp;
                    <?php echo $result['email'] ?>
                </font>
                <br><br>
               <center>
                <br>
                    <a class="btn2" style=" text-decoration: none;color: black;font-family: gothamb;font-size: 18px; " href=<?php echo "./user?u=".strtolower($result['username']); ?> > CHECK OUT</a></center>

                
            </div>
          
        </center>
     
    </body>

    </html>


<?php

}
   echo "<BR><BR><BR><BR><BR>"; 
    
} 
?>