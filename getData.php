<?php 
/**
* version 0.1
* 获取数据
* 
* 类中方法调用
* $gt=new getData;
* $gt->test();
*
*/

//入口方法
if(!empty($_POST['hu']))
{
	//echo "success";
	$dataJson=$_POST['hu'];
	//echo $dateJson;
	$gt=new getData;
	//直接写出json数据 以给 angular 抓取
	echo $gt->text($dataJson);

}
else
{
	echo "error";
}


/*
调入 处理类 ask.php  
主方法开始

代码不重要
重要的是如何去实现 功能


*/
require_once 'ask.php';

class getData 
{
	public $data="";

	public function test($value='')
	{
		echo "OK..";
	}
	

	public function sound($value='')
	{
		# code...
	}

	public function text($value)
	{
		//json 处理
		/*$obj=json_decode($value);
		$param=$obj->hu;*/

		$un=new stdClass;
		
		if( !empty($value) )
		{
			$un-> mes = $value;	
		}
		else
		{
			$un-> err = "Error!!!";
		}

		$data=json_encode($un);
	

		return $data;
	}

	public function img($value='')
	{
		# code...
	}



}


 ?>