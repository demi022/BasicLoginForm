<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>デミ・ホタホット</title>
</head>
<body style = "background:#212529;">
    
    <div class="container">
        <div class="row-lg-8">
            <div class="col-lg-6 m-auto">
                <div class="card bg-dark mt-5">
                    <div class="card-title bg-info text-dark mt-5">
                        <h3 class="text-center py-2"><b>ログインしてください。</b></h3>
                    </div>

                    <?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>


                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>

                    <div class="card-body">
                        
                        <form action="process.php" method = "post">
                        </form>

                        <label for="UName" text="bg-white"><b>ユーザーID:</b></label>
                        <input type="text" name="UName" placeholder="ユーザーIDを入力" class="form-control mb-3">
                        <label for="PWord"><b>パスワード:</b></label>
                        <input type="password" name="PWord" placeholder="パスワードを入力" class="form-control mb-3">
                        
                        <button class="btn btn-success mt-3" name="Login" style="float:right">Login</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>