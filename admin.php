<?php
   session_start();
   if(!isset($_SESSION['Username']) and !isset($_SESSION['password'])){
      header("location:Page_connexion/connexion.php");
      exit();
   }
   else{
?> 
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Espace Administrateur</title>

   <link rel="shortcut icon" href="images/favicon.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/LineIcons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
	
<body>
    
    <!--====== NAVBAR PART START ======-->

    <section class="header-area">
        <div class="navbar-area">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="admin.php">
                                    <img src="images/logo2.png" alt="Logo">
                                </a>
                               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse visible-xs" id="navbarSupportedContent" >
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-right">
                                        <li class="nav-item">
                                        <a class="nav-link active" href="filiére/filiere.php"> FELIEREs </a>
                                    
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#" >  FAQ  </a>
                                        </li>
                                         <li class="nav-item">
                                          <a class="nav-link active" aria-current="page" href="#"> PLANING </a>
                                        </li> 
                                         <li class="nav-item">
                                          <a class="nav-link active" aria-current="page" href="etudiant/comptes.php">ESPACE ETUDIANT </a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link active" aria-current="page" href="coordonnateur/comptes_coordonnateur.php">ESPACE COORDONNATEUR </a>
                                        </li> 
                                     </ul>      
                                 </div>
                            </div>
                        </nav>
                               
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
        
        <div id="home" class="slider-area">
            <div class="bd-example">
                <div id="carouselOne" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselOne" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselOne" data-slide-to="1"></li>
                        <li data-target="#carouselOne" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="carousel-item bg_cover active" style="background-image: url(images/slider-1.jpg)">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-6 col-lg-7 col-sm-10">
                                            <h2 class="carousel-title">Welcome Students</h2>
                                            <ul class="carousel-btn rounded-buttons">
                                                <li><a class="main-btn rounded-three" href="#">FILIERE GI</a></li>

                                            </ul>
                                        </div>
                                    </div> <!-- row -->
                                </div> <!-- container -->
                            </div> <!-- carousel caption -->
                        </div> <!-- carousel-item -->

                        <div class="carousel-item bg_cover" style="background-image: url(images/slider-2.jpg)">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-6 col-lg-7 col-sm-10">
                                            <h2 class="carousel-title">Welcome Students</h2>
                                            <ul class="carousel-btn rounded-buttons">
                                                <li><a class="main-btn rounded-three" href="#">FILIERE GE</a></li>
                                                <!--<li><a class="main-btn rounded-one" href="#">DOWNLOAD</a></li>-->
                                            </ul>
                                        </div>
                                    </div> <!-- row -->
                                </div> <!-- container -->
                            </div> <!-- carousel caption -->
                        </div> <!-- carousel-item -->

                        <div class="carousel-item bg_cover" style="background-image: url(images/slider-3.jpg)">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-6 col-lg-7 col-sm-10">
                                            <h2 class="carousel-title">Welcome Students</h2>
                                            <ul class="carousel-btn rounded-buttons">
                                                <li><a class="main-btn rounded-three" href="#">FILIERE IID</a></li>
                                               <!-- <li><a class="main-btn rounded-one" href="#">DOWNLOAD</a></li>-->
                                            </ul>
                                        </div>
                                    </div> <!-- row -->
                                </div> <!-- container -->
                            </div> <!-- carousel caption -->
                        </div> <!-- carousel-item -->
                    </div> <!-- carousel-inner -->

                    <a class="carousel-control-prev" href="#carouselOne" role="button" data-slide="prev">
                        <i class="lni-arrow-left-circle"></i>
                    </a>

                    <a class="carousel-control-next" href="#carouselOne" role="button" data-slide="next">
                        <i class="lni-arrow-right-circle"></i>
                    </a>
                </div> <!-- carousel -->
            </div> <!-- bd-example -->
        </div>
        <div style="text-align: center;color: black"><a href="Page_connexion/logout.php">Déconnexion</a></div>
    </section>
    <footer id="footer" class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-10 footer"> <img src="images/logo2.png" style="width: 20%;height:auto;">
                </div>
            </div>
        </div>
        
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6" >
                        <div class="footer-link">
                    L’ENSA dispense en formation initiale un enseignement  supérieur destiné à former, principalement, des ingénieurs d’état hautement 
                    qualifiés d’un point de vue scientifique et technique et ce dans différentes spécialités.
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-link">
                            <p> <i class="fas fa-map-marker-alt"></i>
                                 <a href="https://goo.gl/maps/N36Pw5EHjAj2oehj6" target="_blank">
                                   Ecole Nationale des Sciences Appliquées,Bd Béni Amir, BP 77,Khouribga - Maroc.
                                 </a>
                            </p>
                            <p class="mobile">
                                <i class="fa fa-phone"></i>
                                <span>+212523492335 / +212618534372</span>
                            </p>
                            <p class="mobile">
                                <i class="fa fa-fax"></i>
                                <span>0523492339</span>
                            </p>
                            <p class="email">
                                 <i class="fas fa-envelope-square"></i> 
                                <a href="mailto:contact.ensak@usms.ma">contact.ensak@usms.ma</a>
                            </p>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-link">
                             <ul>
                                <li id="menu-item-994" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-994"><a href="http://ensak.usms.ac.ma/ensak/contact/" target="_blank">Contact</a></li>
                                <li id="menu-item-1000" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1000"><a href="http://ensak.usms.ac.ma/ensak/our-instructors/" target="_blank">Nos Professeurs</a></li>
                                <li id="menu-item-2495" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2495"><a href="http://ensak.usms.ac.ma/ensak/organisation/" target="_blank">Organisation</a></li>
                                <li id="menu-item-1752" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1752"><a href="http://ensak.usms.ac.ma/ensak/departements/" target="_blank">Départements</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-link">
                             <ul>
                                <li id="menu-item-1004" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1004"><a href="http://ensak.usms.ac.ma/ensak/courses/" target="_blank">Cours</a></li>
                                <li id="menu-item-1754" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1754"><a href="http://ensak.usms.ac.ma/ensak/laboratoires/" target="_blank">Laboratoires</a></li>
                                <li id="menu-item-999" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-999"><a href="http://ensak.usms.ac.ma/ensak/gallery/" target="_blank">Galerie</a></li>
                                <li id="menu-item-2496" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2496"><a href="http://ensak.usms.ac.ma/ensak/campus" target="_blank">Clubs des étudiants</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            
        
        <div class="footer-copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="copyright text-center text-lg-left mt-10">
                           
                            © 2021 ENSA KOURIBGA-By<a href="https://www.linkedin.com/in/mohcine-zbida-b388a3206/" target="_blank">ZBIDA</a>
                        </div> <!--  copyright -->
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-logo text-center mt-10" style="width: 30%;height: auto;">
                            <a href="admin.php"><img src="images/favicon.png" alt="Logo"></a>
                        </div> <!-- footer logo -->
                    </div>
                    <div class="col-lg-5">
                        <ul class="social text-center text-lg-right mt-10">
                            <li><a href="https://facebook.com/uideckHQ"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="https://twitter.com/uideckHQ"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="https://instagram.com/uideckHQ"><i class="lni-instagram-original"></i></a></li>
                            <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                        </ul> <!-- social -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>
    
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min-min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
<?php } ?>