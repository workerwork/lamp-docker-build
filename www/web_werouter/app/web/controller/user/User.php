<?php

/*********************************************************************
 *
 *Description: this file is for user object
 *
 *Author:      ningjiang@baicells.com
 *
 *Date:        created by 2017-01-06
 *
 *********************************************************************/

class User {
	
	private $name;
	private $password;
	private $level;
	private $email;
	private $videoname;
	private $watchcnt;

	
	public function getUsername(){
		return $this->name;
	}
	
	public function setUsername($username){
		$this->name = $username;
	}
	
	public function getPassword(){
		return $this->password;
	}
	
	public function setPassword($password){
		$this->password = $password;
	}
	
	public function getLevel(){
		return $this->level;
	}
	
	public function setLevel($level){
		$this->level = $level;
	}
	
	public function getEmail(){
		return $this->email;
	}
	
	public function setEmail($email) {
		$this->email = $email;
	}
	
	public function getVideoname(){
		return $this->videoname;
	}
	
	public function setVideoname($videoname){
		$this->videoname = $videoname;
	}
	
	public function getWatchcnt(){
		return $this->watchcnt;
	}
	
	public function setWatchcnt($watchcnt){
		$this->watchcnt = $watchcnt;
	}
	
	public function toArray(){
		$obj = array(
				'name' => $this->name,
				'password' => $this->password,
				'videoname' => $this->videoname,
				'watchcnt' => $this->watchcnt
		);
		
		
		return $obj;
	}
}