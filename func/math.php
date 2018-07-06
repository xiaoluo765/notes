<?php
	echo '<pre>';
	//abs 求绝对值
	$num = -4.2;
	$res = abs($num);
	var_dump($res);//float 4.2

	//ceil 进一取整法
	$num = 9.999;
	$res = ceil($num);
	var_dump($res);//float 10

	//floor 舍去取整法
	$num = 9.999;
	$res = floor($num);
	var_dump($res);//float 9

	//pow 返回数的n次方
	$res = pow(-1,20);
	var_dump($res);//int 1

	//round 浮点数四舍五入
	$res = round(1.95583,2);
	var_dump($res);//float 1.96

	//max 求最大值
	$res = max(1,2,3,63,4,8);
	var_dump($res);//int 63
	$res = max(array(2,74,56));
	var_dump($res); //int 74

	//min 求最小值
	$res = min(9,3,66,5,'as',1);
	var_dump($res); //string as

	//mt_rand 获取更好的随机数
	$res = mt_rand(1,100);
	var_dump($res);

	//rand 获取随机数
	$res = rand(1,100);
	var_dump($res);

	//pi 获取圆周率
	$res = pi();
	var_dump($res);//float 3.1415926535898