<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>

    <body>
        <?php

            $username = $_POST['username'];
            $password = $_POST['password'];

            if (!empty($_POST)) {
                
                if ($username == 'g211210063@sakarya.edu.tr' && $password =='g211210063') {
                    echo "Hoşgeldiniz “" .$password ."”";
                } else {
                    echo "hatalı kullanıcı adı veya şifre girdiniz!";
                    header("Refresh: 1; url = login.html");
                }
                
            } else {
                echo "Kullanıcı adı veya şifre boş bırakılamaz.";
            }
            
        ?>
    </body>
</html>