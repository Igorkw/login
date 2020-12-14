<?php
include('verify_login.php');
?>
<link rel="stylesheet" href="css/bulma.min.css">
<link rel="stylesheet" href="css.login.css">
<style>  
    img{
        height: 400px;
    } 
    body{
        overflow: hidden; 
        background: #f2f7fa;
    }
    body div .box{
        color: white;
    }
</style>
<body>
   <section class="has-text-centered hero-body">
        <div class="box container">
            <img src="img/authentication.svg">
            <h2 class="is-size-3">Welcome, <?php echo $_SESSION['nome'];?>!</h2> 
        </div>
        <a href="logout.php"><button class="button is-primary is-outline is-medium">Logout</button></a>
    </section> 
</body>