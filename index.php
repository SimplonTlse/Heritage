<?php
function d($var){
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
}

function say($thing){
	echo '<h2>' .$thing. '</h2>';
}

require 'classes/Faune.php';
require 'classes/Homo.php';
require 'classes/Sapiens.php';

$faune = new Faune();
$h = new Homo();
$sapiens = new Sapiens();

say('faune est multicellulaire');
d($faune->getMulti());

say('homo est multicellulaire');
d($h->getMulti());

say('sapiens est multicellulaire');
d($sapiens->getMulti());

say('homo can burn things');
d($h->getFeu());

say('Sapiens can burn things');
d($sapiens->getFeu());

say('Sapiens HAS ADN');
d($sapiens->getAdn());