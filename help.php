<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="ONE OF THE LEADING HELPING HAND ORGANISATION">
        <meta name="keywords" content="HELPING GROUP">
        <meta name="author" content="DAERO">
        <title> Help and FAQs</title>
        <link rel="stylesheet" href="css/style_1.css">
        
        <style>
        body,html{
            margin:0;
        }
        .nav{
            font-family: google;
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
 .accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
        </style>
    </head>
    <body>
         <div class="nav">
    <table width=100%>
        <tr>
        <td  align=left style="padding-left: 20px; color:white;font-size: 30px; font-family:comfortaa;">Daero</td>
            <td align=center style="width:120px;color:white;font-size: 20px;font-family:google_sans;"><a href="about.php">About</a></td>
            <td align=center style="width:90px;color:white;font-size: 20px;font-family:google_sans;"><a href="service.php">Services</a></td>
            <td align=center style="width:120px;color:white;font-size: 20px;font-family:google_sans;"><a style="color:red;" href="help.php">Help</a></td>
        </tr>
        </table>
    </div>
        
        
        <section id="main">
            <div class="container">
                <article id="main-col">
                   <h2 class="page-title" style="font-family:google_sans"> Help </h2> 
                   
                    <ul id=help style="font-family:google_sans"></ul>
                         <h2> QUERIES YOU MAY HAVE </h2>
<button class="accordion">HOW TO CREATE A NEW DAERO ACCOUNT?</button>
<div class="panel">
  <ol>
 <li>Open <a href="http://letsshare.rf.gd/" target="_blank"> Daero </a>website.</li>
  <li>Tap Sign Up With Email or Phone Number or Create New Account, then enter your email address and phone number and tap create account. </li>
  <li>If you register with your email or phone number, create a username and password, fill out your profile info and then tap Done. </li>
</ol>
</div>

<button class="accordion">HOW DO I LOG IN?</button>
<div class="panel">
  <ol>
    <li>Go to the website.</li>
    <li>Click  to the account symbol.</li>
    <li>Enter your Username and password.</li>
    <li>Click login.</li>
  </ol>
</div>

<button class="accordion">HOW DO I LOG OUT OF MY ACCOUNT?</button>
<div class="panel">
  <ol>
  <li>Go to your profile and switch to the account.</li>
  <li>Scroll down and tap Log out.</li></ol>
</div>
<h2> ABOUT PRIVACY </h2>
<button class="accordion">HOW SECURE IS DAERO?</button>
<div class="panel">
  <li>The messages are end-to-end encrypted, which means not even Daero Group can access them.</li>
</div>
<button class="accordion">HOW ADVERTISEMENTS WORK?</button>
<div class="panel">
  <li>Most of us encounter Internet-based ads on a daily basis, and some of us have the misfortune of being utterly bombarded. Does anyone actually click on those then individual simply go to he landed page of website.</li>
</div>
 <h2> OUR POLICIES </h2>
 <button class="accordion">WHAT ARE OUR POLICIES?</button>
<div class="panel">
  <li>.Daero is a source to providing needy things like Clothes, educational items and many helpful things for orphans that a person wants to give as per their own choice to help the orphans.</li>
</div>
<button class="accordion">CAN DAERO TAKES FEEDBACK?</button>
<div class="panel">
  <li>Yes,we recording the feedback and work on them.</li>
</div>
<button class="accordion">EFFORTS WE MAKE FOR A HEALTHY RELATIONSHIP WITH YOU </button>
<div class="panel">
  <li>Daero is a non profit organisation that have only one purpose to give smiles to orphans with the help of the caring citizen of India faithfully.</li>
</div>
</section><br>
<button class="accordion"><h2 class="page-title" style="font-family:google_sans"> Terms & Conditions </h2></button> 
                   <div class="panel">
                    <h4><u>T & C</u><sup>*</sup></h4>
                    <ol>
                      <li>Users provided by a login portal only where they can able to login.</li>
                    <li>Necessary to give the actual credentials by the User.</li>
                    <li>An Individual have a right to inpect the services of Daero.</li>
                    <li>This is an official website of DAERO, and we have no alternate website/webpage for our company other than this.</li>
                    <li>Stay Alert from Duplicate Websites.</li>
                    <li>Any duplicates/cheaters shall be reported immediately, if spotted.</li>
                    <li>Some of our rules reflect local legal requirements, while others are based on our experience of how best to protect everyone using Daero services.</li>
                    <li>These lay out the most critical information around our terms of use, the information we collect from you, and how we keep that information safe.</li>
                    <li>While feedback is intended as an open forum, we have guidelines and policies to ensure it's used constructively and fairly.</li>
                    <li>Click the correct credentials and categories while donating.</li>
                    <li>Users are allowed to make their Unique and difficult password such that no one can able to used yoyr account wrongly.</li>
                    <li>Do not shared your password with anyone else.</li>
                    
                    </ol>
        </div>
        <footer>
            <p style="display:inline;font-family:google_sans">DAERO, Copyright &copy; 2018</p>
            <p style="display:inline;font-family:google_sans">All rights reserved.</p>
        </footer>    
        <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
 </div>  
        </section>
   </body>
</html>  