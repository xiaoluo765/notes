<?php
	echo '<pre>';
	//array 生成一个数组
	$arr = array(1=>'a','b');
	print_r($arr);
	/*
	Array
	(
	    [1] => a
	    [2] => b
	)
	 */
	
	//array_combine 创建一个数组，用一个数组的值作为其键名，另一个数组的值作为其值 
	//param1 keys 非法的值将会被转换为字符串类型(string)
	//param2 values 
	$a = array('red','yellow');
	$b = array('apple','banana');
	$res = array_combine($a,$b);
	print_r($res);
	/*
	Array
	(
	    [red] => apple
	    [yellow] => banana
	)
	 */
	
	//range 建立一个包含指定范围单元的数组。
	//param1 序列的第一个值
	//param2 序列结束的那个值
	//param3 [如果有指定，将被作为单元之间的步进值，默认为1]
	$res = range(0,12,4);
	print_r($res);
	/*
	Array
	(
	    [0] => 0
	    [1] => 4
	    [2] => 8
	    [3] => 12
	)
	 */
	
	//compact 建立一个数组，包括变量名和它们的值 
	$city = 'guangzhou';
	$name = 'bob';
	$res = compact('city',$name);
	print_r($res);
	/*
	Array
	(
	    [city] => guangzhou
	)
	 */
	
	//array_fill 用给定的值填充数组
	//param1 返回的数组的第一个索引值。 如果param1是负数， 	那么返回的数组的第一个索引将会是param1，而后面索引则从0开始。
	//param2 插入元素的数量
	//param3 用来填充的值
	$res = array_fill(3,2,'apple');
	print_r($res);
	/*
	Array
	(
	    [3] => apple
	    [4] => apple
	)
	 */
	
	//array_chunk 将一个数组分割成多个
	//param1 需要操作的数组
	//param2 每个数组的单元数
	//param3 设为 TRUE，可以使 PHP保留输入数组中原来的键名。如果你指定了FALSE，那每个结果数组将用从零开始的新数字索引。默认值是 FALSE
	//得到的数组是一个多维数组中的单元，其索引从零开始，每一维包含了param2个元素
	$arr = array(1,2,'s','k',5);
	$res = array_chunk($arr,3);
	print_r($res);
	/*
	Array
	(
	    [0] => Array
	        (
	            [0] => 1
	            [1] => 2
	            [2] => s
	        )
	    [1] => Array
	        (
	            [0] => k
	            [1] => 4
	        )
	)
	 */
	
	//array_merge 合并一个或多个数组
	$arr1 = array('color' => 'red',4);
	$arr2 = array('a','color' => 'green',4);
	$res = array_merge($arr1, $arr2);
	print_r($result);
	//如果输入的数组中有相同的字符串键名，则该键名后面的值将覆盖前一个值
	/*
	Array
	(
	    [color] => green
	    [0] => 4
	    [1] => a
	    [2] => 4
	)
	 */
	
	//array_slice 从数组中取出一段
	//param1 目标数组
	//param2 如果 param2 为正，则序列将从 array 中的此偏移量开始。如果 param2 为负，从后面开始
	//param3 [如果给出了 param3] 并且为正，则序列中将具有这么多的单元。如果给出了 param3 并且为负，则序列从后面开始。如果省略，则序列将从 param3 开始一直到 array 的末端。
	//param4 [默认会重新排序并重置数组的数字索引。可以通过将 param4 设为 TRUE 来改变此行为。] 
	$arr = array('a','b','c','d');
	$res = array_slice($arr,2);
	print_r($res);
	/*
	Array
	(
	    [0] => c
	    [1] => d
	)
	 */
	
	//array_diff 计算数组的差集(可比较多个)
	//返回值 返回一个数组，该数组包括了所有在 array1 中但是不在任何其它参数数组中的值。注意键名保留不变
	$arr1 = array(1,2,3);
	$arr2 = array(1,2,4);
	$res = array_diff($arr1,$arr2);
	print_r($res);
	/*
	Array
	(
	    [2] => 3
	)
	 */

	//array_intersect 计算数组的交集
	$arr1 = array(1,2,3);
	$arr2 = array(1,2,4);
	$res = array_intersect($arr1,$arr2);
	print_r($res);
	/*
	Array
	(
	    [0] => 1
	    [1] => 2
	)
	 */
	
	//array_search 在数组中搜索给定的值，如果成功则返回相应的键名 
	//返回值 如果找到了值则返回它的键，否则返回 FALSE
	$arr = array(1,2,3);
	$res = array_search(2,$arr);
	print_r($res); //1

	//array_splice 把数组中的一部分去掉并用其它值取代 
	//param1 目标数组
	//param2 如果 param2 为正，则从目标数组中该值指定的偏移量开始移除。如果 param2 为负，则从 input 末尾倒数该值指定的偏移量开始移除。
	//param3 [移除个数]
	//param4 [如果给出了param4数组，则被移除的单元被此数组中的单元替代]
	//返回值 返回移除或替换的字符
	$arr = array(1,'s',3,'g',5);
	$res = array_splice($arr,1,1,'d');
	print_r($res);
	/*
	Array
	(
	    [0] => s
	)
	 */
	
	//array_sum 计算数组中所有值的和 
	$arr = array(1,2,3,'a');
	$res = array_sum($arr);
	print_r($res);//6

	//in_array 检查数组中是否存在某个值
	//返回值 如果找到，则返回 TRUE，否则返回 FALSE。 
	$arr = array('e','d','c');
	$res = in_array('e',$arr);
	print_r($res);//1

	//array_key_exists 检查给定的键名或索引是否存在于数组中
	//返回值 成功时返回TRUE， 或者在失败时返回 FALSE。 
	$arr = array(1,2,3,4);
	$res = array_key_exists('2',$arr);
	print_r($res);//1

	//key 从关联数组中取得键名
	//返回值 返回数组中内部指针指向的当前单元的键名。 但它不会移动指针。如果内部指针超过了元素列表尾部，或者数组是空的，key() 会返回 NULL
	$arr = array('name'=>'aaa','age'=>12);
	$res = key($arr);
	print_r($res);//name

	//current 返回数组中的当前单元,初始指向插入到数组中的第一个单元。 
	//返回值 返回当前被内部指针指向的数组单元的值，并不移动指针。如果内部指针指向超出了单元列表的末端，current() 返回 FALSE
	$arr = array('name'=>'aaa','age'=>12);
	$res = current($arr);
	print_r($res);//aaa

	//next 将数组中的内部指针向前移动一位 
	//返回值 返回数组内部指针指向的下一个单元的值，或当没有更多单元时返回 FALSE。 
	$arr = array('name'=>'aaa','age'=>12);
	$res = next($arr);
	print_r($res);//12

	//prev  将数组的内部指针倒回一位
	//返回值 返回数组内部指针指向的前一个单元的值，或当没有更多单元时返回 FALSE。 
	$arr = array('name'=>'aaa','age'=>12);
	$res = next($arr);
	$res1 = prev($arr);
	print_r($res1);//aaa

	//end 将数组的内部指针指向最后一个单元 
	//返回值 返回最后一个元素的值，或者如果是空数组则返回 FALSE。 
	$arr = array('name'=>'aaa','age'=>12);
	$res = end($arr);
	print_r($res);//12

	//reset 将数组的内部指针指向第一个单元
	//返回值 返回数组第一个单元的值，如果数组为空则返回 FALSE。
	$arr = array('name'=>'aaa','age'=>12);
	$res1 = reset($arr);
	print_r($res1);//aaa

	//list 把数组中的值赋给一些变量 
	//返回值 返回指定的数组。
	$arr = array('red','good');
	list($color,$feel)=$arr;
	echo 'the apple is '.$color.' and '.$feel.'<br>';//the apple is red and good

	//array_shift 将数组开头的单元移出数组 
	//返回值 返回移出的值，如果 array 为 空或不是一个数组则返回 NULL。
	$arr = array(1,2,3);
	$res = array_shift($arr);
	print_r($res); //1

	//array_unshift 在数组开头插入一个或多个单元 
	//返回值 返回 array 数组新的单元数目。
	$arr = array(1,2,3);
	$res = array_unshift($arr,'a');
	print_r($res); //4

	//array_push 将一个或多个单元压入数组的末尾（入栈） 
	//返回值 返回处理之后数组的元素个数。
	$arr = array(1,2,3);
	$res = array_push($arr,'a');
	print_r($res); //4

	//array_pop  将数组最后一个单元弹出（出栈）
	//返回值 返回 array 的最后一个值。如果 array 是空（如果不是一个数组），将会返回 NULL 
	$arr = array(1,2,'a');
	$res = array_pop($arr);
	print_r($res); //a

	//shuffle 将数组打乱
	//返回值 成功时返回 TRUE， 或者在失败时返回 FALSE。
	$arr = array('q','e','r',2,4);
	$res = shuffle($arr);
	print_r($res);//1

	//count 计算数组中的单元数目或对象中的属性个数
	$arr = array('q','e','r',2,4);
	$res = count($arr);
	print_r($res);//5

	//array_flip 交换数组中键和值
	//返回值 成功时返回交换后的数组，如果失败返回 NULL。 
	$arr = array('a'=>3,'b'=>2);
	$res = array_flip($arr);
	print_r($res);
	/*
		Array
	(
	    [3] => a
	    [2] => b
	)
	 */
	
	//array_keys 返回数组中部分的或所有的键名
	//param1 目标数组
	//param2 如果指定了这个参数，只有包含这些值的键才会返回
	//param3 判断在搜索的时候是否该使用严格的比较（===）。
	//返回值 返回所有键。 
	$arr = array('a'=>3,'b'=>2);
	$res = array_keys($arr,3);
	print_r($res);
	/*
	Array
	(
	    [0] => a
	)
	 */
	
	//array_values 返回数组中所有的值
	//返回值 返回含所有值的索引数组。
	$arr = array('a'=>3,'b'=>2);
	$res = array_values($arr);
	print_r($res);
	/*
	Array
	(
	    [0] => a
	    [1] => b
	)
	 */
	
	//array_reverse 返回一个单元顺序相反的数组 
	//param1 目标数组
	//param2 如果设置为 TRUE 会保留数字的键。 非数字的键则不受这个设置的影响，总是会被保留。 
	//返回值 返回反转后的数组。
	$arr = array('a'=>3,'b'=>2);
	$res = array_reverse($arr);
	print_r($res);
	/*
	Array
	(
	    [b] => 2
	    [a] => 3
	)
	 */
 
	//array_count_values 统计数组中所有的值出现的次数
	//返回值 返回一个关联数组，用 input 数组中的值作为键名，该值在数组中出现的次数作为值
	$arr = array('a'=>3,'b'=>2,2);
	$res = array_count_values($arr);
	print_r($res);
	/*
	Array
	(
	    [3] => 1
	    [2] => 2
	)
	 */

	//array_rand 从数组中随机取出一个或多个单元 
	//param1 目标数组
	//param2 [想取出多少个单元。如果指定的数目超过了数组里的数量将会产生一个 E_WARNING 级别的错误。 ]
	//返回值 如果只取出一个，array_rand() 返回一个随机单元的键名，否则就返回一个包含随机键名的数组
	$arr = array('a'=>3,'b'=>2,2);
	$res = array_rand($arr,1);
	print_r($res);

	//each 返回数组中当前的键／值对并将数组指针向前移动一步 
	//返回值 返回 array 数组中当前指针位置的键／值对并向前移动数组指针。键值对被返回为四个单元的数组，键名为0，1，key和 value。单元 0 和 key 包含有数组单元的键名，1 和 value 包含有数据。 如果内部指针越过了数组的末端，则 each() 返回 FALSE
	$arr = array('a'=>3,'b'=>2,2);
	$res = each($arr);
	print_r($res);
	/*
	Array
	(
	    [1] => 3
	    [value] => 3
	    [0] => a
	    [key] => a
	)
	 */
	
	//array_unquie 移除数组中重复的值
	//返回值 返回移除成功后的数组
	$arr = array('a'=>3,'b'=>2,2);
	$res = array_unique($arr);
	print_r($res);
	/*
	Array
	(
	    [a] => 3
	    [b] => 2
	)
	 */
	
	//sort 对数组排序
	//返回值 成功时返回 TRUE， 或者在失败时返回 FALSE。 
	$arr = array('banana','pear','apple');
	$res = sort($arr);
	print_r($res);//1
	print_r($arr);
	/*
	Array
	(
	    [0] => apple
	    [1] => banana
	    [2] => pear
	)
	 */
	
	//rsort 对数组逆向排序
	//返回值 成功时返回 TRUE， 或者在失败时返回 FALSE。 
	$arr = array('banana','pear','apple');
	$res = rsort($arr);
	print_r($res);//1
	print_r($arr);
	/*
	Array
	(
	    [0] => pear
	    [1] => banana
	    [2] => apple
	)
	 */
	
	//asort 对数组进行排序并保持索引关系
 	//返回值 成功时返回 TRUE， 或者在失败时返回 FALSE。
 	$arr = array('banana','pear','apple');
	$res = asort($arr);
	print_r($res);//1
	print_r($arr); 
	/*
	Array
	(
	    [2] => apple
	    [0] => banana
	    [1] => pear
	)
	 */
	
	//arsort  对数组进行逆向排序并保持索引关系 
	//返回值 成功时返回 TRUE， 或者在失败时返回 FALSE。
	$arr = array('banana','pear','apple');
	$res = arsort($arr);
	print_r($res);//1
	print_r($arr); 
	/*
	Array
	(
	    [1] => pear
	    [0] => banana
	    [2] => apple
	)
	 */
	
	//ksort 对数组按照键名排序
	//返回值 成功时返回 TRUE， 或者在失败时返回 FALSE。
	$arr = array('banana','pear','apple');
	$res = ksort($arr);
	print_r($res);//1
	print_r($arr); 
	/*
	Array
	(
	    [0] => banana
	    [1] => pear
	    [2] => apple
	)
	 */
	
	//krsort 对数组按照键名逆向排序
	//返回值 成功时返回 TRUE， 或者在失败时返回 FALSE。
	$arr = array('banana','pear','apple');
	$res = krsort($arr);
	print_r($res);//1
	print_r($arr); 
	/*
	Array
	(
	    [2] => apple
	    [1] => pear
	    [0] => banana
	)
	 */
	
	//natsort 用自然排序算法对数组排序
	//返回值 成功时返回 TRUE， 或者在失败时返回 FALSE。
	$arr = array('2banana','3pear','1apple');
	$res = natsort($arr);
	print_r($res);//1
	print_r($arr);
	/*
	Array
	(
	    [2] => 1apple
	    [0] => 2banana
	    [1] => 3pear
	)
	 */
	
	//natcasesort 用自然排序算法对数组排序，不区分大小写
	//返回值 成功时返回 TRUE， 或者在失败时返回 FALSE。
	$arr = array('banana','Bear','Apple');
	$res = natcasesort($arr);
	print_r($res);//1
	print_r($arr);
	/*
	Array
	(
	    [2] => Apple
	    [0] => banana
	    [1] => Bear
	)
	 */
	
	//array_column 返回数组中指定的一列
	//param1 需要取出数组列的多维数组(或结果集)
	//param2 需要返回值的列,可以是索引数组的列索引，或是关联数组的列的键
	//param3 作为返回数组的索引，它可以是该列的整数索引，或是字符串键值
	//返回值 从多维数组中返回单列数组
	$arr = array(
		array(
			'id'=>234,
			'name'=>'john'
			),
		array(
			'id'=>453,
			'name'=>'sally'
			),
		array(
			'id'=>333,
			'name'=>'jane'
			)
		);
	$name = array_column($arr,'name');
	print_r($name);
	/*
	Array
	(
	    [0] => john
	    [1] => sally
	    [2] => jane
	)
	 */
	$arr1 = array_column($arr,'name','id');
	print_r($arr1);
	/*
	Array
	(
	    [234] => john
	    [453] => sally
	    [333] => jane
	)
	 */
	

