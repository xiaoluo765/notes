<?php
	echo '<pre>';
	//trim 删除字符串两端的空格或其他预定义字符
	$str = 'ahello worlda';
	$res = trim($str,'a');
	var_dump($res); //hello world

	//rtrim 删除字符串右边的空格或其他预定义字符
	$str = 'hello worlda';
	$res = rtrim($str,'a');
	var_dump($res); //hello world

	//chop rtrim的别名
	$str = 'hello worlda';
	$res = chop($str,'a');
	var_dump($res); //hello world

	//ltrim 删除字符串左边的空格或其他预定义字符
	$str = 'ahello world';
	$res = ltrim($str,'a');
	var_dump($res); //hello world

	//dirname 返回路径中的目录部分
	$str = dirname('./php/test.php');
	var_dump($str); //./php

	//str_pad 把字符串填充为指定的长度
	//@param1 要被填充的字符串
	//@param2 新字符串的长度
	//@param3 要填充进去的字符串
	$str = 'hello world';
	$res = str_pad($str,20,'ab');
	var_dump($res); //hello worldababababa

	//str_repeat 重复使用指定字符串
	//@param1 要重复使用的字符串
	//@param2 字符串将被重复的次数
	$res = str_repeat('a',5);
	var_dump($res);//aaaaa

	//str_split 把字符串分割到数组中
	//@param1 要分割的字符串
	//@param2 每个数组元素的长度，默认为1
	$str = 'hello world';
	$res = str_split($str,3);
	var_dump($res);
	//array(
	//	[0]=>hel,
	//	[1]=>lo ,
	//	[2]=>wor,
	//	[3]=>ld
	//	)
		
	//strrev 反转字符串
	$str = 'hello param';
	$res = strrev($str);
	var_dump($res);//dlrow olleh

	//wordwrap 按照指定长度对字符串进行拆分处理
	//@param1 目标字符串
	//@param2 最大宽度
	$str = "an example on a long word is supercalifragulistic";
	$res = wordwrap($str,20);
	var_dump($res);
	//an example on a long
	//word is 
	//supercalifragulistic
	
	//str_shuffle 随机打乱字符串中所有的字符
	$str = 'hello world';
	$res = str_shuffle($str);
	var_dump($res);

	//parse_str 将字符串解析成变量
	//@param1 要解析的字符串
	//@param2 储存变量的数组名称
	$str = 'id=23&name=john%20Adams';
	$res = parse_str($str,$arr);
	var_dump($arr);
	//array(['id']=>23,'name'=>'john Adams')
	
	//number_format 通过千位分隔符来格式化数字
	//param1 要格式化的数字
	//param2 [规定要多少个小数]
	//param3 [规定用作小数点的字符串]
	//param4 [规定用作千分分隔符的字符串]
	$num = 1234.56;
	$res = number_format($num);//1,235
	$res = number_format($num,1);//1,234.6
	$res = number_format($num,2,'/','');//1234/56
	var_dump($res);

	//strtolower 字符串转为小写
	$str = 'HELLO';
	$res = strtolower($str);
	var_dump($res);//hello

	//strtoupper 字符串转为大写
	$str = 'hello';
	$res = strtoupper($str);
	var_dump($res);//HELLO

	//ucfirst 字符串首字母大写
	$str = 'hello';
	$res = ucfirst($str);
	var_dump($res);//Hello

	//ucwords字符串每个单词首字母转为大写
	$str = 'hello world';
	$res = ucwords($str);
	var_dump($res);//Hello World

	//htmlentities 把字符转为html实体
	$str = "John & 'Adams'";
	$res = htmlentities($str,ENT_COMPAT);
	var_dump($res);
	echo $res.'<br>';

	//htmlspecialchars 把预定义字符转化为html编码
	$str = 'this is <b>bold</b>';
	echo htmlspecialchars($str).'<br>';

	//nl2br \n转义为<br>标签
	$str = "草\n离离原上草\n一岁一枯荣\n野火烧不尽\n春风吹有生";
	$res = nl2br($str);
	var_dump($res);

	//strip_tags 从字符串中除去html和php标签
	$str = 'hello <b>world</b>';
	$res = strip_tags($str);
	echo $res.'<br/>'; //hello world

	//addcslashes 在指定的字符前添加反斜线转义字符串中字符
	//param1 目标字符串
	//param2 指定的特定字符或字符范围
	$str = 'hello,my name is john Adams.';
	$res = addcslashes($str,'m');
	var_dump($res); //hello,\my na\me is john Ada\ms.

	//stripcslashes 删除由addcslashes添加的转义字符
	$res1 = stripcslashes($res);
	var_dump($res1);//hello,my name is john Adams.

	//addslashes 指定预定义字符前添加反斜线
	$str = "hello,my name's john Adams.";
	$res = addslashes($str);
	echo $res.'<br>';//hello,my name\'s john Adams

	//stripslashes 删除由addslashes添加的转义字符
	$res1 = stripslashes($res);
	echo $res1.'<br>';//hello,my name's john Adams.

	//quotemeta 在字符串某些预定义的字符前添加反斜线
	$str = 'hello world.(can you hear me?)';
	$res = quotemeta($str);
	echo $res.'<br>'; //hello world\.\(can you hear me\?\)

	//chr 从指定的ascii值返回字符
	echo chr(052).'<br>'; //*

	//ord 返回字符串第一个字符的ascii值
	echo ord('hello').'<br>';//104

	//strcasecmp 不区分大小写比较两个字符串(二进制比较)
	//如果 str1 小于 str2 返回 < 0； 如果 str1 大于 str2 返回 > 0；如果两者相等，返回 0。
	$str1 = 'Hello World';
	$str2 = 'hello world';
	echo strcasecmp($str1, $str2).'<br>';//0

	//strcmp 区分大小写比较两个字符串(二进制比较)
	echo strcmp($str1,$str2).'<br>';//-1

	//strncmp 比较前n个字符串，区分大小写
	echo strncmp($str1,$str2,5).'<br>';//-1

	//strncasecmp 比较前n个字符串，不区分大小写
	echo strncasecmp($str1,$str2,5).'<br>';//0

	//strnatcmp 自然顺序比较字符串长度，区分大小写
	$str1 = 'Str20';
	$str2 = 'str20';
	echo strnatcmp($str1,$str2).'<br>';//-1

	//strnatcasecmp 自然顺序比较字符串长度，不区分大小写
	$str1 = 'str100';
	$str2 = 'str20';
	echo strnatcasecmp($str1,$str2).'<br>';//1

	//chunk_split 将字符串分成小块
	//param1 目标字符串
	//param2 [小块长度]
	//param3 [结束符,默认空格]
	//返回值 返回分割后的字符
	$str = 'abcdefghijklmn';
	$res = chunk_split($str,5,',');
	var_dump($res); //abcde,fghij,klmn,

	//strtok 切开字符串
	//param1 目标字符串
	//param2 以什么为标记切割
	//返回值：标记后的字符串
	$str = 'abcdef/ghijklmn';
	$res = strtok($str,'/');
	var_dump($res);//abcdef

	//explode 使用一个字符串为标记分割另一个字符串
	//param1 分隔符
	//param2 目标字符串
	//param3 [返回数组包含最多元素数]
	//返回值 返回由字符串组成的array，每个元素都是string的一个字串
	$str = 'one|two|three|four';
	$res = explode('|',$str,2);
	print_r($res);
	// Array
	// (
	//     [0] => one
	//     [1] => two|three|four
	// )
	
	//implode 将一个一维数组的值转化为字符串
	//param1 默认直接相连
	//param2 目标数组
	$arr = array('one'=>'lastname', 'two'=>'email', 'three'=>'phone');
	$res = implode(',',$arr);
	var_dump($res);//lastname,email,phone

	//substr 截取字符串
	//param1 目标字符串
	//param2 从哪开始截取
	//param3 [正数：从头开始截取几位，负数：从末尾开始截取几位]
	//返回值 返回提取的子字符串，失败时返回false
	$str = 'abcdefg';
	$res = substr($str,2,2);
	var_dump($res);//cd

	//str_replace 字符串替换操作，区分大小写
	//param1 要查找的内容
	//param2 要替换的内容
	//param3 在哪里进行替换操作
	//param4 [引用传参 返回替换的次数]
	//返回值 返回替换后的数组或字符串
	$str = '日完俺软';
	$newStr = str_replace('完','',$str);
	var_dump($newStr);//日俺软

	$str = '日完俺软';
	$newStr = str_replace('完','五晚',$str);
	var_dump($newStr);//日五晚俺软

	//str_ireplace 字符串替换操作，不区分大小写
	//param1 要查找的内容
	//param2 要替换的内容
	//param3 在哪里进行替换操作
	//param4 [引用传参 返回替换的次数]
	//返回值 返回替换后的数组或字符串
	$str = 'hello world';
	$newStr = str_ireplace('e','',$str);
	var_dump($newStr);//hllo world

	$str = 'hello';
	$newStr = str_ireplace('e','al',$str);
	var_dump($newStr);//halllo world

	//substr_count 统计一个字符串，在另一个字符串中出现的次数
	//param1 在此字符串搜索
	//param2 要搜索的字符串
	//param3 [开始计算偏移位置]
	//param4 [指定偏移位置之后的最大搜索长度]
	$str = 'hello world';
	echo strlen($str).'<br>';//11
	echo substr_count($str,'o').'<br>';//2

	//substr_replace 替换字符串中某串为另一个字符串
	//param1 目标字符串
	//param2 要替换进去的字符串
	//param3 正数从头开始，负数从尾部开始
	//param4 [目标字符串被替换的子字符串的长度]
	//返回值 返回结果字符串，如果param1是数组，那么返回一个数组
	$str = 'hello world';
	$res = substr_replace($str,' good',5,0);
	echo $res.'<br>';//hello good world

	//similar_text 返回两个字符串相同字符的数量
	//param1 第一个字符串
	//param2 第二个字符串
	//param3 [通过引用方式传递第三个参数，similar_text() 将计算相似程度百分数]
	//返回值 返回在两个字符串中匹配字符的数目
	$str1 = 'hello world';
	$str2 = 'elo';
	$res = similar_text($str1,$str2);
	echo $res.'<br>';//3

	//strrchr 查找指定字符在字符串中的最后一次出现
	//param1 目标字符串
	//param2 要查找的字符串
	$str = 'hello world';
	$res = strrchr($str,'or');
	echo $res.'<br>';//orld

	//strstr 查找字符串的首次出现
	//param1 目标字符串
	//param2 要查找的字符串
	//返回值 返回字符串的一部分或者 FALSE
	$str = 'hello world';
	$res = strstr($str,'l');
	echo $res.'<br>';//llo world

	//strchr strstr的别名
	
	//stristr strstr() 函数的不区分大小写版本
	$str = 'heLLo world';
	$res = stristr($str,'l');
	echo $res.'<br>';//LLo world

	//strtr 转换指定字符
	//param1 目标字符串
	//param2 要被转换的字符
	//param3 要替换进去的字符
	//返回值 返回转换后的字符串
	$addr = strtr('arewe', "are", "aao");
	echo $addr.'<br>';  //aaowo

	//strpos 查找字符串中某字符首次出现的位置
	//param1 目标字符串
	//param2 要查找的字符
	//param3 如果提供了此参数，搜索会从字符串该字符数的起始位置开始统计
	//返回值 返回字符串起始的位置（数字）
	$str = 'hello world';
	$res = strpos($str,'o');
	echo $res.'<br>';//4

	//stripos 查找字符串中某字符首次出现的位置,不区分大小写
	//param1 目标字符串
	//param2 要查找的字符
	//param3 如果提供了此参数，搜索会从字符串该字符数的起始位置开始统计
	//返回值 返回字符串起始的位置（数字）
	$str = 'hellO world';
	$res = stripos($str,'o');
	echo $res.'<br>';//4

	//strrpos 查找字符串中某字符最后一次出现的位置,不区分大小写
	//param1 目标字符串
	//param2 要查找的字符
	//param3 如果提供了此参数，搜索会从字符串该字符数的起始位置开始统计
	//返回值 返回字符串起始的位置（数字）
	$str = 'hello world';
	$res = strrpos($str,'o');
	echo $res.'<br>';//7

	//strripos 查找字符串中某字符最后一次出现的位置,不区分大小写
	//param1 目标字符串
	//param2 要查找的字符
	//param3 如果提供了此参数，搜索会从字符串该字符数的起始位置开始统计
	//返回值 返回字符串起始的位置（数字）
	$str = 'hello wOrld';
	$res = strripos($str,'o');
	echo $res.'<br>';//7

	//strspn 返回字符串中首次符合param2的子字符串长度
	//param1 待检查字符串
	//param2 检查字符列表
	//param3 [开始检查位置]
	//param4 [目标字符串中检查的长度]
	//返回值 返回目标字符串存在param2的长度
	$str = 'fooooo';
	$res = strspn($str,'o',1,3);
	echo $res.'<br>';//3

	//返回字符串中不符合param2的字符串的长度
	//param1 待检查字符串
	//param2 检查字符列表
	//param3 [开始检查位置]
	//param4 [目标字符串中检查的长度]
	//返回值 以整型数返回子串的长度
	$a = strcspn('abcd',  'apple');
	$b = strcspn('abcd',  'banana');
	$c = strcspn('hello', 'l');
	$d = strcspn('hello', 'world');
	var_dump($a);//int 0
	var_dump($b);//int 0
	var_dump($c);//int 2
	var_dump($d);//int 2

	//str_word_count 返回字符串中单词的使用情况
	//param1 目标字符串
	//param2 [0 - 返回单词数量 
			//1 - 返回一个包含 string 中全部单词的数组 
			//2 - 返回关联数组。数组的键是单词在 string 中出现的数值位置，数组的值是这个单词 ]
	//返回值 返回一个数组或整型数，这取决于 format 参数的选择
	$str = 'hello friend,how are you';
	print_r(str_word_count($str,0));//5
	echo '<br>';

	//strlen 统计字符串长度
	$str = 'hello world';
	echo strlen($str).'<br>';//11

	//md5() 字符串加密
	$str = 'a';
	$md5 = md5($str);
	var_dump($md5);//0cc175b9c0f1b6a831c399e269772661
	$str = 'a';
	$md5 = md5($str);
	var_dump($md5);//0cc175b9c0f1b6a831c399e269772661

	//count_chars 统计字符串中所有字母出现次数（0..255）
	//返回值 根据不同的 mode，count_chars() 返回下列不同的结果： 
		//1 - 以所有的每个字节值作为键名，出现次数作为值的数组。 
		//2 - 与 0 相同，但只列出出现次数大于零的字节值。 
		//3 - 与 0 相同，但只列出出现次数等于零的字节值。 
		//4 - 返回由所有使用了的字节值组成的字符串。 
		//5 - 返回由所有未使用的字节值组成的字符串。

	$data = "Two Ts and one F.";
	foreach (count_chars($data, 1) as $i => $val) {
   		echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
	}
	