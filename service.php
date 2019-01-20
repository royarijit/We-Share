<!DOCTYPE html>
<html>
   <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="ONE OF THE LEADING HELPING HAND ORGANISATION">
        <meta name="keywords" content="HELPING GROUP">
        <meta name="author" content="DAERO">
        <title> Services and feedbacks</title>
        <link rel="stylesheet" href="css/style_1.css">
        <link rel="stylesheet" href="css/style.css">
        <style>
            body,html{
            margin:0;
        }
        .nav{
            overflow:hidden;
            background: black;
            padding:26px;
            
        }
        .nav a{
            
            color:white;
            text-decoration: none;
            
        }
        a:hover{
            color: red;
            cursor: pointer;
        }
         @font-face{
    src : url('fonts/google/google_sans.ttf');
    font-family: google_sans;
}
 @font-face{
    src : url('fonts/comfortaa/comfortaa.ttf');
    font-family: comfortaa;
 }
        .card{
            width:500px;
            height:auto;
            border-radius:10px;
            padding:15px;
            background-color:silver;
        }
        button{
           font-family: google_sans; 
            background:#2b5ce3;
            border:2px solid #2b5ce3;
            width:40%;
            height:15%;
            color:white;
            font-size:25px;
            border-radius: 100px;
            transition: 0.2s ease;
            outline: NONE;
            
            padding:10px 5px;
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
    <body>
        
        
        
        <div class="nav">
    <table width=100%>
        <tr>
        <td  align=left style="padding-left: 20px; color:white;font-size: 30px;font-family:comfortaa;">Daero</td>
            <td align=center style="width:120px;color:white;font-size: 20px;font-family:google_sans;"><a href="about.php">About</a></td>
            <td align=center style="width:90px;color:white;font-size: 20px;font-family:google_sans;"><a style="color:red;" href="service.php">Services</a></td>
            <td align=center style="width:120px;color:white;font-size: 20px;font-family:google_sans;"><a href="help.php">Help</a></td>
        </tr>
        </table>
    </div>
        
        
        
        <section id="main">
            <div class="container">
                <article id="main-col">
              
                </article> 
                <br>   
                </div><center>
                    <div class="card" >
                        <id style="display:inline;font-size:20px;font-family:google_sans"> Feedback </id>
                        <form class="feedback" method="post" action="">
                            <div>
                                <br> 
                                <input name="name" type="text" placeholder="Name" style="display:inline;font-family:google_sans">
                            </div>
                            <div>
                                <br>
                                <input name="country" type="text" placeholder="Country" style="display:inline;font-family:google_sans">
                            </div>
                            <div>
                                <br>
                                <input name="email" type="email" placeholder="Email" style="display:inline;font-family:google_sans">
                            </div>
                            <div>
                                <br>
                                <textarea style="font-size:15px" name="feedback" placeholder="YOUR FEEDBACK" style="display:inline;font-family:google_sans"></textarea> 
                            </div><br><br>
                            <button class="button" name="submit" type="submit"> SEND </button>
                            <br><br>
                        </form>
                                               <?php
date_default_timezone_set('Asia/Kolkata');
$datetime = date(" d M Y h:ia ");
@$name = $_POST['name'];
@$country = $_POST['country'];
@$email = $_POST['email'];
@$feedback = $_POST['feedback'];

if(isset($_POST['submit'])){
    $con = mysqli_connect("sql201.epizy.com", "epiz_23179578", "s5NHbLmxsEpQZ76", "epiz_23179578_letsshare");
    $sql = "INSERT INTO feedback (name,country,email,feedback,datetime) VALUES('$name','$country','$email','$feedback','$datetime')";
    $result = mysqli_query($con,$sql);
    if($result){
        echo "Thanks for your feedback";
    } else {
        echo "<script>alert('Try again Later');</script>";
    }
    
}
                        ?>
                        <br> 
                    </div>            
                    
            </center>
        </section><br><br>
        <footer>
            <p style="display:inline;font-family:google_sans">DAERO, Copyright &copy; 2018</p>
            <p style="display:inline;font-family:google_sans">All rights reserved.</p>
        </footer>
   </body>
</html>  



