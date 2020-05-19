<?php

//include_once("/www/web_werouter/app/web/controller/common_function.php");
include_once(dirname(__FILE__) . "/../../../../../initphp/core/util/log.init.php");

$log = new logInit();

/* $arr = storage_get_videocache();
if(empty($arr))
{
	$arr = "/tmp";
} */

$arr = "/mnt/storage/.videocache";

define("VIDEO_DIR","/video");
define("ABS_VIDEO_DIR", $arr . '/video');
define("ABS_VIDEO_VIEW_DIR", $arr . '/videoview');

define("PLAY_LIST","playlist");
define("VIDEO_LIST","videolist");




function getdisk($disk)
{
 	$log = new logInit();
//	$this->getUtil('log')->write("++++++++++enter getdisk()",'DEBUG');
	$log->write("disk: $disk",'INFO');
    $fp=fopen("/etc/storage.state","r");
    if ($fp == FALSE)                                                
    {                                                                                                
	//	$log->write("++++++++++file is empty and return",'DEBUG');
        return FALSE;                                                                               
    }  
    $need = FALSE;
    while (!feof($fp))
    {
        $buffer = fgets($fp);
        if (strstr($buffer,$disk))
        {
            $need=trim(strstr($buffer,"/"));
            break;
        }
    }
    fclose($fp);
    $log->write(__FUNCTION__ . __LINE__ . ": need  $need",'DEBUG');
    return $need;
}

function getvideodir()                        
{
	$log = new logInit();
	$log->write(__FUNCTION__ . ":enter getvideodir",'DEBUG');
    $need=getdisk("videocache");
	$log->write("disk: $need",'INFO');
    if ($need == FALSE)                                                
    {                                                                
        return FALSE;                                   
    }               
    //$need1=substr($need,0,-1);                
    $need2= $need . '/video';                
    if(!file_exists($need2))                                                                                                                                                         
    { 
       mkdir($need2); 
    }

    $str1=readlink("/www/web_werouter/wefi/video");
    if(strcmp($str1,$need2 ))                       
    {
        $len=strlen($str1);               
        if($len)           
        {            
            exec("rm /www/web_werouter/wefi/video");
        } 
        $log->write(__FUNCTION__ . __LINE__ . ":create video softlink",'DEBUG');
        exec("ln -sf '$need2' /www/web_werouter/wefi/video");
    }                                              
    $log->write(__FUNCTION__ . __LINE__ . ": $need2",'DEBUG');
    return $need2; 
}

function getvideoviewdir() 
{ 
	$log = new logInit();
	$log->write(__FUNCTION__ . ":enter getvideoviewdir",'DEBUG');
    $need=getdisk("videocache"); 
//	$log->write("++++++++++videocache: $need",'INFO');
    if ($need == FALSE)                                              
    { 
//		$log->write("++++++++++no videocache",'DEBUG');
        return FALSE; 
    } 
    //$need1=substr($need,0,-1); 
    $need2= $need . '/videoview'; 
    if(!file_exists($need2)) 
    { 
	   $log->write("file not exists",'ERROR');
       mkdir($need2); 
    } 
    $log->write(__FUNCTION__ . __LINE__ .  ": need2 $need2",'DEBUG');
    return $need2; 
}                                                                                                                                                                                    
/* function geteventdir()
{
	$log = new logInit();
	$log->write(__FUNCTION__ . ": enter geteventdir",'DEBUG');
    $need=getdisk("videocache");
    if ($need == FALSE)                                              
    {
        return FALSE;
    }
    //$need1=substr($need,0,-1);
    $need2= $need . '/video/.Program/event';
    if(!file_exists($need2))
    {
		mkdir($need2);
       //exec("mkdir -p '$need2'");
    }
    return $need2;
}    */                                                                                                                                                                                 
/* function getnotifydir()
{
	$log = new logInit();
	$log->write(__FUNCTION__ . ": enter getnotifydir()",'DEBUG');
    $need=getdisk("videocache");
    if ($need == FALSE)
    {
        return FALSE;
    }
    //$need1=substr($need,0,-1);
    $need2= $need . '/video/.Program/notify';
    if(!file_exists($need2))
    {
		mkdir($need2);
       //exec("mkdir -p '$need2'");
    }
    return $need2;
}  */                                                                                                                                                                                   
/* function getmessagedir()
{
	$log = new logInit();
	$log->write(__FUNCTION__ . ": enter getmessagedir()",'DEBUG');
    $need=getdisk("exsystem");
    if ($need == FALSE)
    {
        return FALSE;
    }
    //$need1=substr($need,0,-1);
    $need2= $need . '/.message';
    if(!file_exists($need2))
    {
		mkdir($need2);
       //exec("mkdir -p '$need2'");
    }

    return $need2;
}  */  


?>
