<?php
 
/*
 @ Clean Text Function PHP
 @ Author      : Ahmed Shahen
 @ Author url  : https://github.com/Ahmed-Shahen
 @ License     : GNU GENERAL PUBLIC LICENSE  
 @ Github url  : https://github.com/Ahmed-Shahen/php_myfunciotn	
 @ version     : 1.0.0

*/

# EXAMPLE

/*
 clean_text("hi th*(&%#@is is *^&%#!<>,.;-+{]test","",0);  // return   1

 clean_text("hi th*(&%#@is is *^&%#!<>,.;-+{]test","",1);  // return   hi this is test 
	
 clean_text("hi this is test !? ","!,#,^",2);  		   // return   1   	

 clean_text("hi this is test !? ","!,#,^",3);             // return   hi this is test ?

*/



function clean_text($string,$dirty_string,$mod){
$value =  array('!','@','#','$','%','^','&','*','(',')','-','_','=','+','|','{','}','[',']','؛','‘','ّ','~',',','<','>','.','؟','?','/',':',';',"'",'"','`');
if ($mod == 0) {
foreach ($value as $values) {	
if (stristr($string,$values)) {
	return 1;
	exit;
}
}
}
if ($mod == 1) {
$clean = str_replace($value,'',$string);
return $clean;
exit;
}
if ($mod == 2) {
if (!empty($dirty_string)) {
$value = explode(',',$dirty_string);	
foreach ($value as $values) {	
if (stristr($string,$values)) {
	return 1;
	exit;
}
}	
}
}
if ($mod == 3) {
if (!empty($dirty_string)) {
$value = explode(',',$dirty_string);
$clean = str_replace($value,'',$string);
return $clean;
exit;
}	
}
}



?>
