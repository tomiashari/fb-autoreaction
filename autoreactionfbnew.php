<?php

require_once('lib/fb.php');

//////////////////////////////////////////////[edit authentication here]///////////////////////////////////////////
$user		= 'bokep.indo'; // username fb / email
$pass 		= 'ngeweenak'; // pass fb
$r_male		= '3'; // reaction if user male , like = 2, love = 4, wow = 6, haha = 5, sad = 9, angry = 8
$r_female	= '2'; // reaction if user female , like = 2, love = 4, wow = 6, haha = 5, sad = 9, angry = 8
$max_status	= '50'; // maximum reacted status
$token 		= 'EaEaEa696969';
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$config['cookie_file'] = 'cookie.txt';
if (!file_exists($config['cookie_file'])) {
    $fp = @fopen($config['cookie_file'], 'w');
    @fclose($fp);
}

$reaction = new Reaction();
$reaction->send_reaction($user, $pass, $token, $r_male, $r_female, $max_status);

this is it 
