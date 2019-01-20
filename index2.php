    <?php
if (!isset($_COOKIE["email"]) && !isset($_COOKIE["password"])){    
?>
    <html>

    <head>
        <style>
            
            @font-face {
                src: url('fonts/gotham/Gotham-Thin.otf');
                font-family: gotham;
            }

            @font-face {
                src: url('fonts/gotham/Gotham-Bold.otf');
                font-family: gothamb;
            }

            @font-face {
                src: url('fonts/comfortaa/Comfortaa-Bold.ttf');
                font-family: comfortaa;
            }

            #snackbar {
                visibility: hidden;
                min-width: 350px;
                margin-left: -120px;

                background-color: #333;

                color: #fff;

                text-align: center;
                font-family: monospace;

                border-radius: 10px;

                padding: 5px;

                position: fixed;

                z-index: 1;

                left: 65%;

                bottom: 30px;

            }



            #snackbar.show {
                visibility: visible;

                -webkit-animation: fadein 2s, fadeout 2s 10s;
                animation: fadein 2s, fadeout 2s 10s;
            }



            @-webkit-keyframes fadein {
                from {
                    bottom: 0;
                    opacity: 0;
                }
                to {
                    bottom: 30px;
                    opacity: 1;
                }
            }

            @keyframes fadein {
                from {
                    bottom: 0;
                    opacity: 0;
                }
                to {
                    bottom: 30px;
                    opacity: 1;
                }
            }

            @-webkit-keyframes fadeout {
                from {
                    bottom: 30px;
                    opacity: 1;
                }
                to {
                    bottom: 0;
                    opacity: 0;
                }
            }

            @keyframes fadeout {
                from {
                    bottom: 30px;
                    opacity: 1;
                }
                to {
                    bottom: 0;
                    opacity: 0;
                }
            }

        </style>
        <script src="js/jquery-3.3.1.js"></script>
        <style>
            <?php include "css/style.css"; ?>
        </style>
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       
        <meta charset="UTF-8">
        <title>
            Study Share
        </title>



    </head>

    <body onLoad="myFunction()">

        <div id="snackbar">All websites under <b>Daero LLP</b> uses cookies to run itself effortlessly on your computer.<br>if you agree you can continue using this website.</div>
        <center>
            <div class="row">
                                       <div class="topnav">
<a  href="index"><id style="color:grey;font-family:Google">Daero</id> <id style="font-family:GoogleM;color:grey">Study Share</id></a>
  

</div>
            </div>
            <br>
            <p style="font-family: GoogleM;font-size: 60px;color:grey;">
                The Best place for students and teachers
            </p>
            <br><br>
            <a class="signup" style=" text-decoration: none;font-family: GoogleM;font-size: 24px;" href="signup">Sign Up</a> &nbsp;&nbsp;&nbsp;<a class="login" style=" text-decoration: none;font-family: GoogleM;font-size: 24px; " href="login">Login</a> &nbsp;&nbsp;&nbsp;<a class="search" style=" text-decoration: none;font-family: GoogleM;font-size: 24px; " href="search">Search</a>
            <br><br><br><br><br><br>
            <a class="teachers" target="_blank" style=" text-decoration: none;font-family: GoogleM;font-size: 24px; " href="listview">Check out Teachers from all around the world</a>
        </center>

    </body>

    </html>
    <?php
} else {
    session_start();
    
    ?>
        <head>
                    <script>
            function myFunction() {

                var x = document.getElementById("snackbar");


                x.className = "show";


                setTimeout(function() {
                    x.className = x.className.replace("show", "");
                }, 12000);
            }
            
            
           

        </script>
            
            <script>
function postpic() {
    window.location.assign("postpic")
}
function filepost() {
    window.location.assign("filepost")
}
</script>
            
            <style>
                
                 
                @font-face {
                    src: url('fonts/gotham/GothamBook.ttf');
                    font-family: gotham;
                }

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
                    border-bottom-left-radius: 15px;
                    border-bottom-right-radius: 15px;
                    border : 1px solid gainsboro;
                }


                .postbtn {
                    border: 1px solid gainsboro;
                    background: #ffffff;
                    padding-left: 25px;
                    padding-right: 25px;
                    padding-top: 13px;
                    padding-bottom: 13px;
                    border-radius: 4px;
                    width:300px;
                    height:50px;
                    cursor: pointer;
                    outline: none;
                    transition: all 0.2s ease;
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

                .lnk {
                    color: crimson;
                    font-family: arial;
                    font-size: 15px;
                    border: 0.1px solid white;
                    background: white;
                    outline: none;
                    cursor: pointer;
                }

                .lnk:hover {
                    text-decoration: underline;

                }
.group {
                width:450px;
                padding-top: 10px;
                padding-bottom: 35px;
                border-radius: 6px;
                box-shadow: 0 4px 30px 0 rgba(0,0,0,0.2);
                 border-bottom: 5px solid #0073e6;
                 border-right: 5px solid #0073e6;
            }
            .cont {
                float:left;
                padding-left:20px;
                padding-top: 4px;
                font-family:gothamb;
                font-size:25px;
                color:#0073e6;
            }
                @font-face {
                    src: url('fonts/gotham/Gotham-Bold.otf');
                    font-family: gothamb;
                }

                @font-face {
                    src: url('fonts/comfortaa/Comfortaa-Bold.otf');
                    font-family: comfortaa;
                }

                <?php $con=mysqli_connect("sql201.epizy.com", "epiz_23179578", "s5NHbLmxsEpQZ76", "epiz_23179578_letsshare");
                $user=$_COOKIE['email'];
                $sql2="SELECT * FROM registertable WHERE email = '$user'";
                $result=mysqli_query($con,
                $sql2);
                $row=mysqli_fetch_assoc($result);
                ?>
                .a-link {
                    color:crimson;
                    text-decoration:none;
                    
                }
                .pdffile{
                     border: 1px solid gainsboro;
                    background: #ffffff;
                    padding-left: 25px;
                    padding-right: 25px;
                    padding-top: 10px;
                    padding-bottom: 10px;
                    border-radius: 4px;
                    width:300px;
                    height:90px;
                    cursor: pointer;
                    outline: none;
                    transition: all 0.3s ease;
                    text-decoration: none;
                    font-family: gothamb;
                    font-size: 18px;
                    
                }
                .a-link:hover {
                    text-decoration:underline;
                }
            </style>
            <style>
            <?php include "css/style.css"; ?>
        </style>

          
            <meta charset="UTF-8">
            <title>
                Reboot Remastered
            </title>

            
            
        </head>

        <body>
            <center>
                <div class="row">
                    <center>
                        <div class="topnav">
  <a  href="index"><b style="color:grey;font-family:gotham">Daero</b> <b style="font-family:Josefin">Study Share</b></a>
  <a class=nav2 onclick="javascript:window.location='signout'" style="cursor:pointer;float:right;">Logout</a>
   
 <a class=nav1 href="profile" style="float:right;">Profile</a>
</div>


                        <div><br><br>
                            <div class=group>
                            <font face="gotham" class="cont" size=6>New Post</font>
                            <br><br><br>
                            <p style="font-family: gothamb;font-size: 25px;">
                                <form id="myForm" action="userInfo" method="get">
                                    <textarea style="resize:none;font-size:20px;outline:none;font-family:gothamb;" name="name" cols="22" rows="6"></textarea><br><br>
                                    <div class="blue" style="width:300px;border-radius:4px 4px 0 0;" id="sub" name="postSubmit">POST</div>
                                    <div style="width:150px;" class=tucks onclick="postpic()"><br><img src="images/photo.png" width=30px height=30px><br></div><div style="width:150px;" class=tucks onclick="filepost()"><br><img src="images/pdf.png" width=30px height=30px>
                                    
                                    <br></div><br><br><br><br>

                                    
                                </form>
</div>
                                <span id="result"></span>

                                <script src="js/jquery.min.js" type="text/javascript"></script>
                                <script src="js/script.js" type="text/javascript"></script>
                            
                                
                                <BR>

                                <?php
        $i=1;
        $j=0;
        $table  = strtolower($row['data']);
        $sql5 = "SELECT COUNT(*) FROM $table ";
        $r  = mysqli_query($con,$sql5);
        $n  = mysqli_fetch_array($r);
        @$email = $_SESSION['email'];
        $sqlx = "select username from registertable where email = '$email'";
        $row2  = mysqli_query($con,$sqlx);
            $result2 = mysqli_fetch_assoc($row2);
            $sql = "SELECT id FROM $table";
$arr ;
    $query = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($query)){
      $arr[] = $row['id'];  
    }
@$arrlen = count($arr)-1;
@$arrid = $arr[$arrlen];
        for($i=$arrid;$i>=1;$i--){
            $sql6 = "SELECT * from $table WHERE id= $i ";
            $row  = mysqli_query($con,$sql6);
            $result = mysqli_fetch_assoc($row);
            if($result['content']==""){
                            continue;
                        }
            if($result['postpic']==null){
                
            ?><br><br><br><?php 
                                                    
                                                     $pid = $result['postid'];
                                                   
                                                     ?><script>
        $(document).ready(function(){
    $(".lk").click( function() {
        
        var id = this.id;   // Getting Button id
        var split_id = id.split("_");

        var  id= split_id[0];
        var pid = split_id[1];  // postid
        var table = split_id[2];
        
                $.ajax({
            url: 'like.php',
            type: 'post',
            data : {pid:pid,table:table},
            dataType: 'json',
            success: function(data){
                var likes = data['likes'];
                $("#likesno<?php echo $i ?>").text(likes);        
        

                

            }
        });

});
        });
         
$("#post-action").submit( function() {
  return false;	
});


    </script>
                                    <div style="padding:20px;width:40%;font-family: arial;font-size: 20px; border: 1px solid gainsboro ; border-radius: 4px;">
                                        
                                                                                    
                                            
                                        
                                        <form method="post" action="">

                                            

                                            <font style="font-family: arial;font-size: 15px;float:left;"><a style="text-decoration:none;" href="user?u=<?php echo $result2['username']; ?>">
                                             
                                  <b><font color=crimson><?php echo $_SESSION['name'];?></font></b></a> posted on
                                                <?php echo $result['date'];?> </font>
                                            <br>
                                            <p align=left>
                                                <?php echo $result['content']." "; ?>
                                                <?php
                                                if($result['filepost']) {
                                                ?>
                                                 <div class="pdffile">   
                                                     <a target="_blank" href = "<?php echo $result['filepost']; ?>"><img src="images/pdf.png" width="50px" height="50px"><br><font face="gotham" color="grey" size=3 style="text-decoration:none;">
                                                        DOWNLOAD PDF (<?php echo number_format($result['size']/1048576, 3, '.', '')." MB"; ?>)</font></a></div>
                                                        <?php } ?>
                                        </form>
                                        
                                        <form method="post" action="deletepost.php">
                                            <input type="submit" value="Delete" style="float:left;" class="lnk">
                                            <input name="table" style="display:none;" value="<?php echo $table;?>">
                                            <input name="id" style="display:none;" value="<?php echo $i;?>">

                                        </form>
                                        <?php 
                
                $like_query = "SELECT * FROM $table WHERE postid = '$pid'";
                    $like_result = mysqli_query($con,$like_query);
                    $like_row = mysqli_fetch_array($like_result);
                    $total_likes = $like_row['likes'];
                ?>
                                        
                                        
                                        <div id="post-action">
                                            
                                           <button style="padding-left:10px;padding-right:10px;border-radius:4px;border:2px solid black;" id="lk_<?php echo $pid;?>_<?php echo $table;?>" class="lk">Like</button>
                                            <span id="likesno<?php echo $i ?>"><?php echo $like_row['likes'] ?></span> 
                                            </div>
                                               

                                        </p><br>
                                    </div>

                                    <br><br>
                            <?php
            }
            elseif($result['postpic']==!null){
                
             ?>
                      <div style="padding:20px;width:40%;font-family: arial;font-size: 20px; border: 1px solid gainsboro ; border-radius: 4px;">
                                        <form method="post" action="">

                                            <font style="font-family: arial;font-size: 15px;float:left;"><a style="text-decoration:none;" href="user?u=<?php echo $result2['username']; ?>">
                                  <b><font color=crimson><?php echo $_SESSION['name'];?></font></b></a> posted on
                                                <?php echo $result['date'];?> </font>
                                            <br>
                                            <p align=center>
                                                <img src="<?php echo $result['postpic']; ?>" width="450px" ><br><br>
                                                <?php echo $result['content']."<BR>"; ?>


                                        </form>
                                        <form method="post" action="deletepost.php">
                                            <input type="submit" value="Delete" style="float:left;" class="lnk">
                                            <input name="table" style="visibility:hidden;" value="<?php echo $table;?>">
                                            <input name="id" style="visibility:hidden;" value="<?php echo $i;?>">

                                        </form>
                           <?php 
                                                    
                                                     $pid = $result['postid'];
                                                     
                                                     ?>
                                       
                                            <a target="_blank" href="<?php echo "post.php?u=".$pid; ?>"><input type="submit" value="View" style="float:left;" class="lnk"></a>
                                        </p>
                                    </div>

                                    <br><br>
                    <?php
                    } 
            
            elseif($result['filepost']==!null && $result['postpic']==null){
                ?>
                    
                    <div style="padding:20px;width:40%;font-family: arial;font-size: 20px; border: 1px solid gainsboro ; border-radius: 4px;">
                                        <form method="post" action="">

                                            <font style="font-family: arial;font-size: 15px;float:left;"><a style="text-decoration:none;" href="user?u=<?php echo $result2['username']; ?>">
                                  <b><font color=crimson><?php echo $_SESSION['name'];?></font></b></a> posted on
                                                <?php echo $result['date'];?> </font>
                                            <br>
                                            <p align=center>
                                                <a href="<?php echo $result['filepost']; ?>"> <img src="images/pdf.png" width="50px" height="50px"></a><br><br>
                                                <?php echo $result['content']."<BR>"; ?>


                                        </form>
                                        <form method="post" action="deletepost.php">
                                            <input type="submit" value="Delete" style="float:left;" class="lnk">
                                            <input name="table" style="visibility:hidden;" value="<?php echo $table;?>">
                                            <input name="id" style="visibility:hidden;" value="<?php echo $i;?>">

                                        </form>
                        
                        $pid = $result['postid'];
                                                     
                                                     ?>
                                       
                                            <a target="_blank" href="<?php echo "post.php?u=".$pid; ?>"><input type="submit" value="View" style="float:left;" class="lnk"></a>
                                        </p>
                                    </div>

                                    <br><br>
                    
                    
                    <?php
            }
            ?>
                            
            
                                    <?php
                        
                        
        }
    
       
           
        
        ?>

                            </p>
                            <br><br>


                    </center>
        </body>

        </html>
        <?php
}
?>
           