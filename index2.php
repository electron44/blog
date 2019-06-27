<?php
require 'Autoloader.class.php'; 
Autoloader::register();
$recuperateur = new Recuperateur();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Articles</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="topbar">
				<div class="content-topbar container h-100">
					<div class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span>
								Tapa Medina DIA - Ousmane DIENE - CHEIKH GUEYE WANE
							</span>
						</span>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Content -->

	<section class="bg0 p-b-140 p-t-10">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-30">
					<div class="p-r-10 p-r-0-sr991">
						<!-- les  Articles seront affichés ici -->
						<div class="p-b-70">
							<a href="" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">
                             <h3>Categorie >
                             <?php
                             $articles=array();
                             if(isset($_GET['categorie'])){
                              if($_GET['categorie']==1){
                                          echo "Sport"; 
                                          $articles= $recuperateur->getArticleByCategorie(1);

                              }else if($_GET['categorie']==2){
                                     echo "Politique";
                                                $articles= $recuperateur->getArticleByCategorie(2);
                             }
                             else if($_GET['categorie']==3){
                                echo "Science";
                                    $articles= $recuperateur->getArticleByCategorie(3);
                                }else if($_GET['categorie']==4){
                                    echo "Droit";
                                        $articles= $recuperateur->getArticleByCategorie(4);
                                }else{
                                    echo "";
                                }
                               
                            } else{
                                echo "Technology";
                            }?>
                            </h3>
							</a>
                        <?php if ($articles != null) 
                            foreach($articles as $article){?>

                            <h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
                                <?php echo  $article->title ."~".$article->description;?> 
                            </h3>
                            <p><em><?php echo $article->date; ?></em></p><br>

							<p class="f1-s-11 cl6 p-b-25">
                                    <?php echo $article->contenu; ?>
                            </p>
                        <?php }?>
						</div>

			
					</div>
				</div>
				
				<!-- Sidebar -->
				<div class="col-md-10 col-lg-4 p-b-30">
					<div class="p-l-10 p-rl-0-sr991 p-t-70">						
						<!-- Category -->
						<div class="p-b-60">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Category
								</h3>
							</div>

							<ul class="p-t-35">
								

								<?php //partie pour listing des catégories d'articles
                                  
                                  $categories = $recuperateur->getCategorie();
								  $i=1;
								  foreach($categories as $categorieI){
									 
									echo  "<li class='how-bor3 p-rl-4'>
										<a href='index2.php?categorie=$i' class='dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13'>
										    $categorieI->intitule
										</a>
                                      </li>";
                                      $i=$i+1;
                                  }
				
								?>


							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer>
	

		<div class="bg11">
			<div class="container size-h-4 flex-c-c p-tb-15">
				<span class="f1-s-1 cl0 txt-center">
					Copyright © 2019
				</span>
			</div>
		</div>
	</footer>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>