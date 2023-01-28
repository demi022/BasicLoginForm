<?php

$con = mysqli_connect('localhost','root','','phptutorials');
    if(!$con)
    {
        die(' 接続を確認してください。'.mysqli_error());
    }
?>