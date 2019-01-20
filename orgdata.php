<?php
session_start();
@$password = $_SESSION['password'];
@$email = $_SESSION['email'];
@$head = $_SESSION['head'];
@$contact = $_SESSION['contact'];
$name = str_replace(" ",'', $head) ;
$con = mysqli_connect("sql201.epizy.com", "epiz_23179578", "s5NHbLmxsEpQZ76", "epiz_23179578_letsshare");
if($con){
                    $sql = "INSERT INTO organisation (head,email,password,contact) VALUES ('$head','$email','$password','$contact')";
                    $query = mysqli_query($con, $sql);
                    if($query){
                        $str = strtolower($name) ;
                        if(file_exists("organisation/$str")){
                            for($i=1;$i<=10000;$i++){
                                if(file_exists("organisation/$str$i")){
                                    continue;
                                } else {
                                    
                                     $str = strtolower($str.$i);
                                     $user = $str;
                                     $str = "organisation/$str";
                                    mkdir($str);
                                    break;
                                }
                            }
                        } else {
                            $str = strtolower($str);
                            $user=$str;
                            $str = "organisation/$str";
                            mkdir($str);
                        }
                        copy("error_and_necessities/error_handle.php","$str/index.php");
                        mkdir("$str/css");
                        copy("profilepics/av1.png","$str/av1.png");
                        $sql2 = "SELECT * FROM organisation WHERE email = '$email' AND password = '$password' ";
                        $data = strtolower($name.date("YsHm")."share");
                        $sql3 = "CREATE TABLE $data (id int(20) AUTO_INCREMENT , email varchar(40) ,description LONGTEXT ,date varchar(20),name varchar(200),status LONGTEXT,PRIMARY KEY (id) )";
                        mysqli_query($con,$sql3);
                        $sql4 = "UPDATE organisation SET data ='$data' , username='$user' WHERE email ='$email'";
                        mysqli_query($con,$sql4);
                        $query = mysqli_query($con,$sql2);
                        $row = mysqli_fetch_assoc($query);
                        if($row['email']==$email && $row['password']==$password){
                           
                            $_SESSION['email']=$email;
                            $_SESSION['head']=$row['head'];
                            $_SESSION['contact']=$row['contact'];
                            $_SESSION['password']=$row['password'];
                            setcookie("email",$email);
                            setcookie("password",$password);
                            header("location:orgprofile.php");
                        } else {
                             echo "Wrong Email or Password. ";
                        }
                        
                    } else {
                        echo "Email Exists";
                    }
                } else {
                     echo "Error Establishing Connection ";
                }