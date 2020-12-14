<?php session_start();?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro - PHP + MySQL</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title"><a href="https://igorbismark.com" target="_blank"><img src="img/IBcleargrey.png" style="width: 80px; height: 90px"></a></h3>
                    <h3 class="title has-text-grey">Sign in system</h3>
                   
                    <?php if (isset($_SESSION['status_cadastro'])): ?>
                    <div class="notification is-success">
                      <p>Registration successfully Complete!</p>
                      <p>Log in using your user and password <a href="login.php">here</a></p>
                    </div>
                    <?php endif; unset($_SESSION['status_cadastro']); ?>
                    
                    <?php if (isset($_SESSION['usuario_existe'])): ?>
                    <div class="notification is-danger">
                        <p>The chosen user already exists. Enter another and try again.</p>
                    </div>
                    <?php endif; unset($_SESSION['usuario_existe']); ?>

                    <div class="box">
                        <form action="cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Your name" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" type="text" class="input is-large" placeholder="User">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Passoword">
                                </div> 
                            </div>
                            <button type="submit" class="button is-block is-primary is-large is-fullwidth">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>