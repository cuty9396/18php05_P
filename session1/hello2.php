<?php

	$hocsinh = array('nam'	=>	array('name' => 'Nam',
							'year' => 1997,
							'email' => 'nam@gmail.com'),
					'nga'	=>	array('name' => 'Nga',
							'year' => 1998,
							'email' => 'nga@gmail.com'),
					'huong'	=>	array('name' => 'Huong',
							'year' => 1997,
							'email' => 'huong@gmail.com')	
			);
foreach ($hocsinh as $hs) {
	foreach ($hs as $key => $value) {
		echo $key." : ".$value . '<br>';
	}
	echo "<br>";
}
$i = 1;
echo "<br>";
foreach($hocsinh as $key) {
	echo $i.'. ',$key['name'].' - '.$key['year'].' - '.$key['email'].'<br>';
	$i++;
}

foreach($hocsinh as $key => $value) {
	if($value['name'] == 'Nam'){
		$hocsinh[$key]['email'] = 'nam97@gmail.com';
	}
}
echo "<br>";
 $i = 1;
foreach($hocsinh as $key) {
	echo $i.'. ',$key['name'].' - '.$key['year'].' - '.$key['email'].'<br>';
	$i++;
}

foreach($hocsinh as $key => $value) {
	if($value['name'] == 'Nga'){
		unset($hocsinh[$key]);
	}
}
echo "<br>";
$i = 1;
foreach($hocsinh as $key) {
	echo $i.'. ',$key['name'].' - '.$key['year'].' - '.$key['email'].'<br>';
	$i++;
}

$hocsinh['tung']['name'] = 'Tung';
$hocsinh['tung']['year'] = 2000;
$hocsinh['tung']['email'] = 'tung@gmail.com';
echo "<br>";
$i = 1;
foreach($hocsinh as $key) {
	echo $i.'. ',$key['name'].' - '.$key['year'].' - '.$key['email'].'<br>';
	$i++;
}


foreach($hocsinh as $key => $value) {
	if($value['year'] == 1997){
		$hocsinh[$key]['email'] = 'test@gmail.com';
	}
}	
echo "<br>";
$i = 1;
foreach($hocsinh as $key) {
	echo $i.'. ',$key['name'].' - '.$key['year'].' - '.$key['email'].'<br>';
	$i++;
}
?>