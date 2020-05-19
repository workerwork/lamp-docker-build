<?php
/*********************************************************************
 *
 *Description: this file is for playlist DAO
 *
 *Author:      ningjiang@baicells.com
 *
 *Date:        created by 2017-01-18
 *
 *********************************************************************/

class playlistDao extends Dao {
	
	public $tableName = "playlist";
	private $playlist = array();
	private $fields = "playid,name,pic,category,area,classify,totalcount,updatecount";
	
	public function addPlaylist($playlist){
		$playlist = $this->dao->db->build_key($playlist, $this->fields);
		
		return $this->dao->db->insert($playlist, $this->tableName);
	}
	
	public function get_all_byName($name){
		
		$sql = "SELECT * FROM $this->table_name WHERE name = '{$name}'";
		
		return $this->init_db()->get_all_sql($sql);
	}
}


class playlist {
	
	private $playid = 0;
	private $name = "";
	private $pic = "";
	private $category = 0;
	private $area = "";
	private $classify = "";
	private $totalcount = 0;
	private $updatecount = 0;
	
	public function getPlayid(){
		return $this->playid;
	}
	
	public function setPlayid($playid){
		$this->playid = $playid;
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
	
	public function getCategory(){
		return $this->category;
	}
	
	public function setCategory($category){
		$this->category = $category;
	}
	
	public function getArea(){
		return $this->area;
	}
	
	public function setArea($area){
		$this->area = $area;
	}
	
	public function getClassify(){
		return $this->classify;
	}
	
	public function setClassify($classify){
		$this->classify = $classify;
	}
	
	public function getTotalcnt(){
		return $this->totalcount;
	}
	
	public function setTotalcnt($totalcnt){
		$this->totalcount = $totalcnt;
	}
	
	public function getUpdatecnt(){
		return $this->updatecount;
	}
	
	public function setUpdatecnt($updatecnt){
		$this->updatecount = $updatecnt;
	}
	
	public function toArray(){
		$obj = array(
				'playid'  		=> $this->playid,
				'name'    		=> $this->name,
				'pic'     		=> $this->pic,
				'category'		=> $this->category,
				'area'    		=> $this->area,
				'classify'		=> $this->classify,
				'totalcount'	=> $this->totalcount,
				'updatecount'	=> $this->updatecount
		);
		
		return $obj;
	}
}

