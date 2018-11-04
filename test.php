<?php

// First test case : Access to student historical data
include_once('service/mysqlcon.php');
$sql="SELECT usertype FROM users WHERE userid='st-123-1'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
$type=mysql_fetch_array($result);
$control=$type['usertype'];
if($count==1 && $control=="student"){
    echo("First test case is Pass");echo "<br>";
}

else
{echo("First test case is Fail");echo "<br>";}


// second test case : Parents Account

$get="SELECT id FROM students where parentid='pa-124-1'";
$res=mysql_query($get);
$type=mysql_fetch_array($res);
$stu=$type['id'];
if($stu=="st-125-1"){
    echo("Second test case is Pass");echo "<br>";
}
else
{echo("Second test case is Fail");echo "<br>";}

// Third test case : Complete online access with multiple views for Admin

$admin="SELECT usertype FROM users WHERE userid='ad-123-1'";
$rlt=mysql_query($admin);
$tp=mysql_fetch_array($rlt);
$adm=$tp['usertype'];
if($adm=="admin"){
    echo("Third test case is Pass");echo "<br>";
}

else
{echo("Third test case is Fail");echo "<br>";}

?>
