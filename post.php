<?php
if(isset($_GET['u'])!="" && isset($_GET['u'])!=null){
    $id = $_GET['u'];
    $con = mysqli_connect("sql201.epizy.com", "epiz_23179578", "s5NHbLmxsEpQZ76", "epiz_23179578_letsshare");
    $sql = "SELECT * FROM post WHERE postid = '$id'";
    $row=mysqli_query($con,$sql);
    $result=mysqli_fetch_assoc($row);
    ?>
<html>
<head>
    <title></title>
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
               width:450px;
                padding-top: 10px;
                padding-bottom: 35px;
                border-radius: 6px;
                box-shadow: 0 4px 30px 0 rgba(0,0,0,0.2);
                 border-bottom: 5px solid #00b359;
                 border-right: 5px solid #00b359;
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
       <style>
            <?php include "css/style.css"; ?>
        </style>
    </head>

    <body>
        <center><div class="row">
                                        <div class="topnav">
  <a href="index"><b style="color:grey;font-family:gotham">Daero</b> <b style="font-family:Josefin">Study Share</b></a>


</div>
            </div><br><br>
            <div class="card">
                
                <br> <br>
                
                <b><font style="width:auto;padding-top: 10px;font-family:gothamb"  size=5 color=grey><?php
    
                        $pcontent = $result['content'];       
                        if($pcontent=="" || $pcontent==NULL) {
                            echo "<font color=red>Post Doesn't Exist</font>";
                        } else {
                            echo $pcontent;
                        }
    
                    ?></font></b><br><br>
                
                 
            </div>
            <br>
        </center>
        <br><br>
    </body>
</html>

<?php
} else {
    header("location:index.php");
}

?>