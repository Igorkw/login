<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login com PHP & MySQL</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title"><a href="https://igorbismark.com" target="_blank"><img src="img/IBcleargrey.png" style="width: 80px; height: 90px"></a></h3>
                    <h3 class="title has-text-grey">Login System</h3>
                    
                    <?php if(isset($_SESSION['not_autenticated'])):?>
                        <div class="notification is-danger">
                            <p>ERROR: Invalid user or password.</p>
                        </div>
                    <?php endif; unset($_SESSION['not_autenticated']);?>

                    <div class="box">
                        <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="User" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Passoword">
                                </div>
                            </div>
                            <div class="buttons colunms is-centered">
                                <button type="submit" class="button colunm is-block is-primary is-large is-fullwidth">Enter</button>
                                <a href="cadastro.php" class="button colunm is-normal is-primary is-outlined">sign in</a>
                            </div>   
                        </form>
                    </div>
                </div> 
            </div>
        </div>
        <h6 class="is-size-6 has-text-centered has-text-primary">In case you don't wanna create a user -> Login: visitor | Passowrd: 123</h6>
    </section>
</body>

</html>