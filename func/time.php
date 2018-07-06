<?php
	echo '<pre>';
	//time 返回当前的unix时间戳
	$time = time();
	echo date('Y-m-d H:i:s',$time).'<br>';


	//mktime 取得一个日期的时间戳
	//返回值 根据给出的参数返回unix时间戳，如果参数非法，返回false
	echo date('Y-m-d H:i:s',mktime(1,2,3,4,5,2018)).'<br>';

	//date 格式化一个本地时间/日期
	//返回值 返回格式化后的日期时间的字符串表达
	$date = date('m,d,y');//5,24,18
	echo $date.'<br>';

	//date_default_timezone_set 设定用于一个脚本所有日期函数的默认时区
	//返回值 true或false
	date_default_timezone_set('PRC');

	//date_default_timezone_get 取得一个脚本中所有日期函数所使用的默认时区
	echo date_default_timezone_get().'<br>';//PRC

	//getdate 取得日期/时间信息
	$today = getdate();
	print_r($today);
	/*
	Array
	(
	    [seconds] => 33
	    [minutes] => 38
	    [hours] => 19
	    [mday] => 24
	    [wday] => 4
	    [mon] => 5
	    [year] => 2018
	    [yday] => 143
	    [weekday] => Thursday
	    [month] => May
	    [0] => 1527161913
	)
	 */
	
	//strtotime 将任何英文文本的日期时间描述解析为unix时间戳
	//返回值 成功时返回时间戳，否则返回false
	$time = date('Y-m-d H:i:s',strtotime('now'));
	echo $time.'<br>';
	$time1 = date('Y-m-d H:i:s',strtotime('1 week'));
	echo $time1.'<hr>';

	//microtime 返回当前unix时间戳和微秒数
	$time = microtime();
	echo $time;
	echo '<hr>';

	//checkdate 验证一个格力高斯日期
	//返回值 如果给出的日期有效，返回true，否者返回false
	var_dump(checkdate(12,31,2000));//bool true
	var_dump(checkdate(2,29,2001));//bool false
	