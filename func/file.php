<?php

	echo '<pre>';
	//fopen 打开文件或url
	//r  只读方式打开，将文件指针指向文件头
	//r+ 读写方式打开，将文件指针指向文件头
	//w  写入方式打开，将文件指针指向文件头并将尝试文件大小截为0，如果文件不存在则创建
	//w+ 读写方式打开，将文件指针指向文件头并将尝试文件大小截为0，如果文件不存在则创建
	//a  写入方式打开，将文件指针指向末尾，如果文件不存在则创建
	//a+ 读写方式打开，将文件指针指向末尾，如果文件不存在则创建
	//x  创建并写入方式打开，将文件指针指向文件头
	//x+ 创建以读写方式打开，将文件指针指向文件头
	$one = './test.txt';
	$res = fopen($one,'r+');
	echo fgets($res).'<br>';

	$file = './file.txt';
	echo fopen($file,'x');

	//fclose 关闭一个已打开的文件指针
	$one = './test.txt';
	$res = fopen($one,'r');
	fclose($res);

	//fread 读取文件
	//返回值 返回所读取的字符串，失败返回false
	$one = './test.txt';
	$res = fopen($one,'r');
	$contents = fread($res,filesize($one));
	echo $contents.'<br>';
	fclose($res);	

	//fwrite 写入文件
	//fputs --fwrite的别名
	//返回值 返回写入的字符数，错误时返回false
	$one = './test.txt';
	$res = fopen($one,'w');
	$content = fwrite($res,'123');
	echo $content.'<br>';//3
	fclose($res);

	//copy 拷贝文件
	//返回值 成功true，失败false
	$one = './test.txt';
	$newfile = './test.txt.bak';
	echo copy($one,$newfile).'<br>';

	//rename 重命名一个文件或目录
	//返回值 成功true，失败false
	echo rename('./test.txt.bak','./test1.txt').'<br>';
	// echo rename('./test1.txt','../test1.txt');移动文件
	
	//unlink 删除文件
	//返回值 true false
	echo unlink('./test1.txt').'<br>';

	$one = './file.txt';
	$newfile = '../file.txt';
	echo copy($one,$newfile);

	//file_exists 检查文件或目录是否存在
	//返回值 true false
	$file = './file.txt';
	var_dump(file_exists($file));

	//filesize 取得文件大小
	//返回值 返回文件大小的字节数
 	$file = './math.php';
 	echo filesize($file).'<br>';

	//is_readable 判断给定的文件名是否可读
	//如果指定的文件或目录存在并且可读返回true，否则false
	$file = './file1.txt';
	var_dump(is_readable($file));
	
	//is_writable 判断给定的文件是否可写
	//参数可以是一个允许进行是否可写检查的目录名
	//文件存在并且可写返回true
	$file = './1file.txt'; //false
	var_dump(is_writable($file));
	$file = '../hanshu';
	var_dump(is_writable($file));//true

	//is_executable 判断给定文件名是否可执行
	//文件存在且可执行返回true，否则false
	
	$file = './array.php';
	var_dump(is_executable($file));//false

	//filectime 取得文件inode被修改的时间
	//返回值 返回文件上次inode被修改时间，失败返回false，以时间戳方式返回
	$file = './file.txt';
	$res = filectime($file);
	echo date('Y-m-d H:i:s',$res).'<br>';//2018-05-21 20:46:54

	//filemtime 取得文件内容修改时间
	//返回值 返回文件上次被修改的时间,返回时间戳
	$file = './file.txt';
	$res = filemtime($file);
	echo date('Y-m-d H:i:s',$res).'<br>';//2018-05-21 20:55:54

	//fileatime 取得文件的上次访问时间
	//返回值 返回文件上次被访问的时间，返回时间戳
	$file = './file.txt';
	$open = fopen($file,'r');
	$content = fread($open,filesize($file));
	echo $content;
	$res = fileatime($file);
	echo date('Y-m-d H:i:s',$res).'<br>';

	//stat 给出文件的信息
	//返回值 见手册
	$stat = stat('./test.txt');
	print_r($stat);
	// $mtime = $stat['mtime'];
	// $mtimes = date('Y-m-d H:i:s',$mtime);
	// echo $mtimes;//2018-05-24 16:25:33
	
	//feof 检测文件指针是否到了文件结束的位置
	//文件指针必须有效，必须指向由fopen成功打开的文件(并还未由fclose关闭)
	//返回值 如果指针到了eof或者出错时返回true，否则返回一个错误，其他情况返回false
	$file = fopen('./test.txt','r');
	$content='';
	while(!feof($file)){
		$content .= fread($file,1);
	}
	echo $content;//123
	fclose($file);
	echo '<hr>';

	//fgets 从文件中读取一行
	//param2 读取一行并返回长度最多为length-1的字符串
	//返回值 返回第一行数据
	$file = fopen('./test.txt','r');
	echo fgets($file,2).'<br>';//1
	fclose($file);

	//fgetc 从文件指针中读取字符(根据指针所在位置读取字符)
	//返回值 返回一个包含有一个字符的字符串
	$file = fopen('./test.txt','r');
	$read = fread($file,2);
	echo $read.'<br>';//12
	echo fgetc($file).'<br>';//3
	fclose($file);

	//file 把整个文件读入一个数组中
	//返回值 返回一个数组
	print_r(file('./test20.txt'));
	echo '<hr>';

	//readfile 输出文件
	//返回从文件中读取的字节数，出错返回false
	echo readfile('./test20.txt').'<hr>';

	//file_put_contents 将一个字符串写入文件
	//param3 FILE_APPEND:如果文件已经存在，追加数据而不是覆盖
	//返回值 返回写入到文件内数据的字节数
	$file = '这是用file_put_contents写入的内容';
	$newFile = file_put_contents('./test20.txt',$file);
	echo $newFile.'<hr>';

	//file_get_contents 将整个文件读入一个字符串
	//15：偏移量
	//6：长度
	//返回值 返回文件数据
	$file = file_get_contents('./test20.txt',NULL,NULL,15,6);
	echo $file.'<br>';//ut_con

	//ftell 返回文件指针读/写的位置
	//返回值 返回文件指针读/写的位置
	$file = fopen('./test20.txt','r');
	$data = fgets($file,11);
	echo $data.'<br>';//这是用f
	echo ftell($file).'<hr>';//10
	fclose($file);

	//fseek 在文件指针中定位
	//param2 偏移量，即要偏移到的位置
	//param3 [1.SEEK_SET；设定位置等于offset字节
	//		  2.SEEK_CUR：设定位置为当前位置加上offset
	//		  3.SEEK_END：设定位置为文件尾加上offset]
	//返回值 成功返回0，否则返回-1，注：移动到eof后不算错误
	$file = fopen('./test20.txt','r');
	fgets($file,12);
	echo ftell($file).'<br>';//11
	fseek($file,1,SEEK_END);
	echo ftell(($file)).'<br>';//42

	//rewind 倒回文件指针的位置
	//返回值 成功返回true，失败返回false
	touch('./touch.txt');
	$file = fopen('./touch.txt','r+');
	fwrite($file,'fwrite写入的内容');
	rewind($file);
	fwrite($file,'替换');
	rewind($file);
	$res = file_get_contents('./touch.txt');
	echo $res.'<br>';

	//basename 返回路径中的文件名部分
	//返回值 返回路径中的文件名部分
	echo basename('/etc/php/test.php').'<br>';//test.php
	echo basename('/etc/php').'<br>';//php
	echo basename('/').'<br>';//
	echo basename('.').'<br>';//.

	//dirname 返回路径中的目录部分
	//返回值 返回路径中的目录部分
	echo dirname('/etc/php/test.php').'<br>';// /etc/php
	echo dirname('/').'<br>';// \
	echo dirname('.').'<br>';// .

	//pathinfo 返回文件路径的信息
	$file = pathinfo('/www/abc/def.php');
	echo $file['dirname'].'<br>';//www.abc
	echo $file['basename'].'<br>';//def.php

	//opendir 打开目录句柄
	//返回值 成功返回目录句柄resource,失败返回false
	$dir = '../hanshu';
	$opendir = opendir($dir);
	if($opendir){
		echo '打开了';
	}else{
		echo '没打开';
	}
	echo '<hr>';
	
	//readdir 从目录句柄中读取条目
	//返回值 成功返回文件名，失败返回false
	$dir = '../hanshu';
	if($dh = opendir($dir)){
		while(($file = readdir($dh))!==false){
			echo 'filename:'.$file.'<br>';
		}
		closedir($dh);
	}
	echo '<hr>';

	//closedir 关闭目录句柄 

	//rewinddir 倒回目录句柄
	
	//mkdir 新建目录
	//param2 默认是0777，最大可能的访问权
	//返回值 成功返回true，失败返回false
	$res = mkdir('./mydir1',0);
	if($res){
		echo '创建目录成功';
	}else{
		echo '创建目录失败';
	}
	echo '<br>';
	
	//rmdir 删除目录
	//删除dirname所指定的目录，该目录必须为空，而且要有相应的权限
	//返回值，成功为true，失败为false
	$res = rmdir('./mydir1');
	if($res){
		echo '删除目录成功';
	}else{
		echo '删除目录失败';
	}
	echo '<br>';
	
	//is_uploaded_file 判断文件是否通过http post上传的
	
	
	//move_uploaded_file 将上传的文件移动到新位置
	

	





	


	