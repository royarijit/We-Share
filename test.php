<?php

$con = mysqli_connect("sql201.epizy.com", "epiz_23179578", "s5NHbLmxsEpQZ76", "epiz_23179578_letsshare");
if(!$con){
    echo "COnnection Failed";
}else{
    echo "Connecrion Succrus";
}