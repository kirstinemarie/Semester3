<?php
$fn = basename($_SERVER['PHP_SELF']);

?>


	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index2.php"><img class="logo" alt="Logo" src="img/logo.svg">Gitte Heidi</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
			  
            <li class="nav-item">
				<a class="nav-link js-scroll-trigger menu<?=($fn=='index2.php')?' selected':''?>"  href="index2.php">Forside</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger menu<?=($fn=='Ommig.php')?' selected': '' ?>" href="Ommig.php">Om mig</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger menu<?=($fn=='udgivelser.php')?' selected': '' ?>" href="udgivelser.php">Udgivelse</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger menu<?=($fn=='kontakt.php')?' selected': '' ?>" href="kontakt.php">Kontakt</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

	<header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
           
			  <img class="overskrift " alt="Madskribent" src="img/overskrift.svg">
            
          </div>
          <div class="col-lg-8 mx-auto">
            <a class="konknap btn btn-light btn-xl sr-button" href="kontakt.php">Kontakt</a>
            
          </div>
        </div>
      </div>
    </header>
