<?php

function auth($userName, $userPassword)
{
    $db = pg_connect("host= dbname= user= password=");
    $select = "SELECT * FROM almoxa_users WHERE username='".pg_escape_string($userName)
    ."' AND password ='".pg_escape_string($userPassword)."'";
    @$result = pg_query($db,$select);
    @$login_check = pg_num_rows($result);
    if($login_check > 0)
    {
        echo "Login Success";
        session_start();
        ?>
            <script src="../Scripts/jquery 3.6.0.js"></script>
            <div class="main">
            </div>

            <script>
                 $('.main').load('../view/layout/index.html');
            </script>
        <?php
        
    }
    else
    {
        echo 'Login Failed';
    }
}


if(isset($_POST["userName"]) && isset($_POST["password"]))
{
    auth($_POST['userName'], $_POST['password']);
}




