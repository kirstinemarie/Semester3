<?php
$fn = basename($_SERVER['PHP_SELF']);
/*
if ($fn == 'P2.php'){
	echo ' selected';
}
// (a>20)? 'wee' : 'noo';
*/
?>
<header class="col-1-1">
	<div class="col-2-12 logo" ><img src="img/gulerod.png"></div>
<nav class="col-10-12">
	<ul>
		<li><a class="menulink<?=($fn=='index.php')?' selected': '' ?>" href="index.php">Forside</a></li>
		
		<li><a class="menulink<?=($fn=='#')?' selected': '' ?>" href="#">Om mig</a></li>
		
		<li><a class="menulink<?=($fn=='#')?' selected': '' ?>" href="#">Udgivelser</a></li>
		
		<li><a class="menulink<?=($fn=='#')?' selected': '' ?>" href="#">Kontakt</a></li>
	</ul>
</nav>
</header>
