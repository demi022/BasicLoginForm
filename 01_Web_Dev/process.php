<?php
require_once('connection.php'); 
session_start();

    if(isset($_POST['Login']))
    {
        if(empty($_POST['UName']) || empty($_POST['PWord']))
        {
            header("location:index.php?Empty=ユーザーIDを入力してください。");
        }
        else
        {
            $query="select * from employee where UName='".$_POST['UName']."' and PWord='".$_POST['PWord']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['UName'];
                header("location:welcome.php");
            }
            else
            {
                header("location:index.php?Invalid=正しいユーザーIDとパスワードを入力してください。");
            }
        }
    }
    else
    {
        echo '動作していません。';
    }
?>