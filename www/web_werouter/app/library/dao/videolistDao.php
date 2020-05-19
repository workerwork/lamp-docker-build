<?php
/*********************************************************************
 *
 *Description: this file is for videolist DAO
 *
 *Author:      ningjiang@baicells.com
 *
 *Date:        created by 2017-01-18
 *
 *********************************************************************/
class videolistDao extends Dao{
	public $tableName = "videolist";
	
	private $videolist = array();
	
	private $fields = "videoid,name,pic,introduction,playactor,director,videoseq,filesize,duration,file,releasetime,updatetime,watchcnt"; 
	
	public function addVideolist($videolist){
		$videolist = $this->dao->db->build_key($videolist, $this->fields);
		
		return $this->dao->db->insert($videolist, $this->tableName);
	}
	
	public function get_all_byName($name){
		
		$sql = "SELECT * FROM $this->table_name WHERE name = '{$name}'";
		
		return $this->init_db()->get_all_sql($sql);
	}
	
	
}

class videolist {
	private $videoid = 0;
	private $name = "";
	private $pic = "";
	private $introduction = "";
	private $playactor = "";
	private $director = "";
	private $videoseq = 0;
	private $filesize = 0;
	private $duration = 0;
	private $file = "";
	private $releasetime = 0;
	private $updatetime = 0;
	private $watchcnt = 0;
	
	public function getVideoid(){
		return $this->videoid;
	}
	
	public function setVideoid($videoid){
		$this->videoid = $videoid;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function setName($name){
		$this->name = $name;
	}
	
	public function getPic(){
		return $this->pic;	
	}
	
	public function setPic($pic){
		$this->pic = $pic;
	}
	
	public function getIntroduction(){
		return $this->introduction;
	}
	
	public function setIntroduction($introduction){
		$this->introduction = $introduction;
	}
	
	public function getPlayactor(){
		return $this->playactor;
	}
	
	public function setPlayactor($playactor){
		$this->playactor = $playactor;
	}
	
	public function getDirector(){
		return $this->director;
	}
	
	public function setDirector($director){
		$this->director = $director;
	}
	
	public function getVideoseq(){
		return $this->videoseq;
	}
	
	public function setVideoseq($videoseq){
		$this->videoseq = $videoseq;
	}
	
	public function getFilesize(){
		return $this->filesize;
	}
	
	public function setFilesize($filesize){
		$this->filesize = $filesize;
	}
	
	public function getDuration(){
		return $this->duration;
	}
	
	public function setDuration($duration){
		$this->duration = $duration;
	}
	
	public function getFile(){
		return $this->file;
	}
	
	public function setFile($file){
		$this->file = $file;
	}
	
	public function getReleasetime(){
		return $this->releasetime;
	}
	
	public function setReleasetime($time){
		$this->releasetime = $time;
	}
	
	public function getUpdatetime(){
		return $this->updatetime;
	}
	
	public function setUpdatetime($time){
		$this->updatetime = $time;
	}
	
	public function getWatchcnt(){
		return $this->watchcnt;
	}
	
	public function setWatchcnt($count){
		$this->watchcnt = $count;
	}
	
	public function toArray(){
		$obj = array(
				'videoid'		=> $this->videoid,
				'name'			=> $this->name,
				'pic'			=> $this->pic,
				'introduction'  => $this->introduction,
				'playactor'		=> $this->playactor,
				'director'      => $this->director,
				'videoseq'		=> $this->videoseq,
				'filesize'		=> $this->filesize,
				'duration'		=> $this->duration,
				'file'			=> $this->file,
				'releasetime'   => $this->releasetime,
				'updatetime'    => $this->updatetime,
				'watchcnt'		=> $this->watchcnt
		);
		
		return $obj;
	}
	
}