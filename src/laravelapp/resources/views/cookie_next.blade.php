<?php 
setcookie('flag',0,time()+1800,"/"); //0に設定し直す
$resetFlag = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie_next</title>
</head>

<body>
    <h1>Cookie next</h1>
    <p>遷移時に所持していた値:{{$_COOKIE['flag']}}</p>
    <p>表示時に設定しなおした値:{{$resetFlag}}</p>
    <form action="/cookie" method="post">
        @csrf
        <input type="hidden" name="flag" value="2">
        <input type="submit" value="戻る">
    </form>
</body>

</html>