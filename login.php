<!doctype html>
<html class="signin no-js" lang="">
<head>

    <meta charset="utf-8">
    <title>后台登陆</title>

    <link rel="stylesheet" href="vendor/offline/theme.css">
    <link rel="stylesheet" href="vendor/pace/theme.css">


    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.min.css">


    <link rel="stylesheet" href="css/skins/palette.1.css" id="skin">
    <link rel="stylesheet" href="css/fonts/style.1.css" id="font">
    <link rel="stylesheet" href="css/main.css">

    <script src="vendor/modernizr.js"></script>
</head>

<body class="bg-color center-wrapper">
    <div class="center-content">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <section class="panel panel-default">
                    <header class="panel-heading">用户登陆</header>
                    <div class="bg-white user pd-md">
                        <form role="form" action="login.php" method="post">
                            <input name="username" type="text" class="form-control mg-b-sm" placeholder="admin" autofocus>
                            <input name="password" type="password" class="form-control" placeholder="是4位数字吗?">
                            <div class="text-right mg-b-sm mg-t-sm"></div>
                            <button class="btn btn-info btn-block" type="submit">登陆</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>
</html>
<?php
include "mysql.php";
mysql_select_db("ctf");
session_start();
header("Content-type: text/html; charset=utf-8");
if(isset($_POST['username'])){
$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);
$sql = "select * from user where username='$username' and password='$password'";
$result = mysql_query($sql);
$num = mysql_num_rows($result);
if($num>0){
    $_SESSION['login'] = 'yes';
    header("Location: manage2019.php");
}
else{
    echo '<script>alert("用户名或密码错误")</script>';
}
}
?>
