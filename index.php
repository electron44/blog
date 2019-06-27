<?php

if (PHP_VERSION <= "5.4"){
    echo "dede";
}else{
    echo "<p class='alert alert'>Veuillez MAJ votre version php vers une version plus récente </p><br>";
}
require 'Autoloader.class.php'; 
Autoloader::register();
$pdo = new BD('blog');
$pdo =  $pdo->connexion();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="vendor/main.css"/>
     <link href="vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <title>Document</title>
</head>

<body>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle Navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.html">Blog - TMD-CGW-OD</a>
</div>
<div class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Home</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">A Propos</a></li>
        <li><a href="#">Contact</a></li>

    </ul>
</div>
</div>
</div>
<!-- <button type="submit" id="scroll">scroll</button> -->
    <!-- <script>
        $(function(){
            $('#scroll').on('click',function(e){
                e.preventDefault();
                var hash="";
                if(this.hash!==""){
                    hashi = this.hash;
                    $('html , body').animate({
                        scrollTop : $(hashi).offset().top
                    },800,function(){
                            window.location.hashi = hashi;
                    });
                    }  
                });
            });
    </script> -->
</body>
</html>
