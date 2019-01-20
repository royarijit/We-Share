<?php
    $con = mysqli_connect("sql201.epizy.com", "epiz_23179578", "s5NHbLmxsEpQZ76", "epiz_23179578_letsshare");
    $sql = "SELECT id FROM registertable";
$arr ;
    $query = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($query)){
      $arr[] = $row['id'];  
    }
$arrlen = count($arr)-1;
$arrid = $arr[$arrlen];
        $i=2;
        $j=0;
        $sql5 = "SELECT COUNT(*) FROM registertable ";
        $r  = mysqli_query($con,$sql5);
        $n  = mysqli_fetch_array($r);
    
        for($i=2;$i<=$arrid;$i++){
            $sql6 = "SELECT * FROM registertable WHERE id= $i AND type= 'teacher' ";
            $row  = mysqli_query($con,$sql6);
            $result = mysqli_fetch_assoc($row);
            if($result['fname']!="") {
        
    ?>
    <html>

    <head>

        <style>
            @font-face {
                src: url('fonts/gotham/Gotham-Bold.otf');
                font-family: gothamb;
            }

            @font-face {
                src: url('fonts/gotham/GothamBook.ttf');
                font-family: gotham;
            }

            .card {
                width: 500px;
                padding-top: 10px;
                padding-bottom: 35px;
                border-radius: 6px;
                box-shadow: 0 4px 30px 0 rgba(0, 0, 0, 0.2);
                border-bottom: 5px solid #00cc66;

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
            <?php include "css/style.css";
            ?>

        </style>
    </head>

    <body><br><br><br>
        <center>
            <div class="card">

                <br>
                <img class="profilepic" src="<?php echo $result['profilepic']; ?>"><br><br>
                <b><font style="padding-top: 10px;"face="gothamb" size=6 color=grey><?php echo $result['fname']."&nbsp;".$result['lname']; ?></font></b><br><br>
                <br>
                <a class="signup" style=" text-decoration: none;font-family: gothamb;font-size: 18px; " href=<?php echo "./user.php?u=".strtolower($result[ 'username']) ?> > CHECK OUT</a><br><br><br><br></center>


        </div>
        <br>
        </center>
        <br><br>
    </body>

    </html>



    <?php
            
        }
        }
?>
