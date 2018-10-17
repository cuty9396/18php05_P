<?php
	$dienthoai = array(
		'iphone' => array( 'name' => 'IphoneX', 'image' => 'iphonex.jpg', 'price' => 1000, 'sale' => 20),
		'samsung' => array('name' => ' J7prime', 'image'=> 'j7prime.jpg',  'price' => 600, 'sale' => 15), 
		'oppo' => array('name' => 'Oppo', 'image'=> 'oppo.jpg',  'price' => 700, 'sale' => 0)
	);

function display($arr) {
	echo "---------------------------------------------------------------------------<br>";
	$i = 1;
	echo "<br>";
	foreach($arr as $key) {
		echo '<div>'.$i.'. ',$key['name'].' - <img src="'.$key['image'].'" style="width: 100px; height: 100px"> 
		- Giá: '.$key['price'].' - Giảm giá: '.$key['sale'].'%</div><br>';
		$i++;
	}
}

function discount($arr){
	foreach($arr as $key => $value) {
		if($value['price'] >= 700){
			$arr[$key]['sale'] = 30;
		}
	}
	return $arr;
}

function remove($arr, $name){
	foreach($arr as $key => $value) {
		if($value['name'] == $name){
			unset($arr[$key]);
		}
	}
	return $arr;
}
function add($arr, $key, $name, $image, $price, $sale){
	$arr[$key]['name'] = $name;
	$arr[$key]['image'] = $image;
	$arr[$key]['price'] = $price;
	$arr[$key]['sale'] = $sale;
	return $arr;
}

function displayLimit($arr, $price) {
	echo "---------------------------------------------------------------------------<br>";
	$i = 1;
	echo "<br>";
	foreach($arr as $key) {
		if ($key['price']>=$price) {
			echo '<div>'.$i.'. ',$key['name'].' - <img src="'.$key['image'].'" style="width: 100px; height: 100px"> 
			- Giá: '.$key['price'].' - Giảm giá: '.$key['sale'].'%</div><br>';
			$i++;
		}
	}
}

function displaySale($arr) {
	echo "---------------------------------------------------------------------------<br>";
	$i = 1;
	echo "<br>";
	foreach($arr as $key) {
		echo '<div>'.$i.'. ',$key['name'].' - <img src="'.$key['image'].'" style="width: 100px; height: 100px"> 
			- Giá: '.$key['price']*(100-$key['sale'])*0.01.'</div><br>';
		$i++;

	}
}

function remove2($arr, $price, $sale){
	foreach($arr as $key => $value) {
		if($value['price'] < $price && $value['sale'] > $sale){
			unset($arr[$key]);
		}
	}
	return $arr;
}

echo "<br>-Câu 1<br>";
display($dienthoai);
echo "<br>-Câu 2<br>";
$dienthoai = discount($dienthoai);
echo "<br>-Câu 3<br>";
display($dienthoai);
echo "<br>-Câu 4<br>";
$dienthoai = remove($dienthoai, 'Oppo');
display($dienthoai);
echo "<br>-Câu 5<br>";
$dienthoai = add($dienthoai,'sony', 'Sony Xperia', 'sony.jpg', 500, 10);
display($dienthoai);
echo "<br>-Câu 6<br>";
displayLimit($dienthoai, 600);
echo "<br>-Câu 7<br>";
displaySale($dienthoai);
echo "<br>-Câu 8<br>";
$dienthoai = remove2($dienthoai, 700, 12);
display($dienthoai);
?>