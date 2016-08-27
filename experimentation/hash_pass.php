<?php
Hash::make(Input::get('password') 


    $m='football';
	echo $m, '==>', hash1($m);
	// $2y$10$ty.TpWnEjBOk1hoI3M0WIOnyVvrjcyLZ4/7LE9fnBOVRtc4cZekkW
	/ football
	// $2y$10$xF2y/0l263etTVLlvlKvju4IPTcVQVfSUop2hATmTgeyrEY2rFYgu
	// $2y$10$JvEFpKnnpCDtVZh9Y6jcKu7V/NMKYLo9CS.i45Hdr.BEH4m5Pr7rm
	// password
	// $2y$10$HJ42LRue36CyIB0aiOpfAOXhDzkuuLX1Uxs9Io9MZLHvTAKcQOVAC
function hash1($string)
{
        return hash_hmac('sha1', $string, 'SomeRandomString', false);
}
?>	