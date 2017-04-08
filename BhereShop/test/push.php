<?php

  $rs = new Redis();
  $rs->connect('localhost');
$t = 'goods-78';
$b = 'goods-78';
	$key7 = 'salenum-'.date('Y/m/d');
	$key6 = 'salenum-'.date("Y/m/d",time()-86400*1);
	$key5 = 'salenum-'.date("Y/m/d",time()-86400*2);
	$key4 = 'salenum-'.date("Y/m/d",time()-86400*3);
	$key3 = 'salenum-'.date("Y/m/d",time()-86400*4);
	$key2 = 'salenum-'.date("Y/m/d",time()-86400*5);
	$key1 = 'salenum-'.date("Y/m/d",time()-86400*6);


	$bey7 = 'spotnum-'.date('Y/m/d');
	$bey6 = 'spotnum-'.date("Y/m/d",time()-86400*1);
	$bey5 = 'spotnum-'.date("Y/m/d",time()-86400*2);
	$bey4 = 'spotnum-'.date("Y/m/d",time()-86400*3);
	$bey3 = 'spotnum-'.date("Y/m/d",time()-86400*4);
	$bey2 = 'spotnum-'.date("Y/m/d",time()-86400*5);
	$bey1 = 'spotnum-'.date("Y/m/d",time()-86400*6);

  			$rs->hmset($t,array($key1=>mt_rand(1260,3400));
  			$rs->hmset($t,array($key2=>mt_rand(1360,3400));
  			$rs->hmset($t,array($key3=>mt_rand(1160,3400));
  			$rs->hmset($t,array($key4=>mt_rand(1231,3400));
  			$rs->hmset($t,array($key5=>mt_rand(1160,3400));
  			$rs->hmset($t,array($key6=>mt_rand(1546,3400));
  			$rs->hmset($t,array($key7=>mt_rand(2333,3400));
  		
	
  			$rs->hmset($b,array($bey1=>mt_rand(3450,6400));
  			$rs->hmset($b,array($bey2=>mt_rand(3450,6400));
  			$rs->hmset($b,array($bey3=>mt_rand(3450,6400));
  			$rs->hmset($b,array($bey4=>mt_rand(3450,6400));
  			$rs->hmset($b,array($bey5=>mt_rand(3450,6400));
  			$rs->hmset($b,array($bey6=>mt_rand(3450,6400));
  			$rs->hmset($b,array($bey7=>mt_rand(3450,6400));
		

		?>