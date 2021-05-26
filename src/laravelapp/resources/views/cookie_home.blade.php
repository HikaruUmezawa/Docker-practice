<?php
if (isset($_COOKIE["flag"])) { 
  $flag =$_COOKIE["flag"];
} else {
    $flag = 0; //初期値
    setcookie("flag",0,time()+1800,"/");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie_home</title>
</head>

<body>
    <h1>Cookie_home</h1>
    <p>表示時の取得値： {{ $flag }}</p>
    <form action="/cookie/next" method="post">
        @csrf
        <input type="hidden" name="flag" value="1">
        <input type="submit" value="次へ">
    </form>
</body>

</html>