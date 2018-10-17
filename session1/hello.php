<?php 
	echo "Hello world";
	echo "<p>Hello world</p>";
	echo "<h1>Hello world</h1>";
	$str = 5;
	$str = "vagina";
	echo $str;
	function FunctionName()
	{
		echo "<br>i'm honrny<br>";
	}
	FunctionName();

	function Sum($a, $b){
		$s = $a + $b;
		echo "Tổng của ".$a." và ".$b." là ".$s."<br>";
	}
	function Sub($a, $b){
		$s = $a - $b;
		echo "Hiệu của ".$a." và ".$b." là ".$s."<br>";
	}
	Sum(12,15);
	Sub(16,14);

	for ($i=0; $i<10; $i++) { 
		if ($i>=2 && $i<=7) {
			echo "Thứ ". $i."<br>";
		}
		elseif ($i==8) {
			echo "Chủ nhật<br>";
		}
		else {
			echo $i."không phải là ngày trong tuần<br>";
		}
	}


	
?>