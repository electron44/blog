<?php
require 'Autoloader.class.php'; 
Autoloader::register(); 



$eleve  = new Utilisateur("ousmane","diene");

//var_dump($eleve);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
    <title>Acceuil</title>
</head>
<body>
    <div class="container" style="height:800px;">
            <h1 id="first">1 section</h1>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic consectetur obcaecati deserunt, quos sed est incidunt nisi dolores rem fugiat laudantium molestias inventore tempore iste quis ad distinctio sit ut.   
    
            <h2 id="second"> 2 section</h2>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa asperiores illo doloremque ab nihil, suscipit autem omnis, soluta possimus rerum non beatae! Assumenda totam quidem autem atque esse sit expedita.
        </div>

    <button type="submit" id="scroll">scroll</button>
    <script>
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
    </script>
</body>
</html>