<?php
/*********************************************************************
 *
 *Description: this file is for userinfo Controller
 *
 *Author:      ningjiang@baicells.com
 *
 *Date:        created by 2017-01-06
 *
 *********************************************************************/

require_once(dirname(__FILE__) . "/User.php");

class userController extends Controller {
	
	/*
	 * white list 
	 */
	public $initphp_list = array('run'); 
	
	
	public function run() {
		$this->getUtil('log')->write(__FUNCTION__ . "  userController");
		echo "hello userDB";
	
		$user = new User();
		$user->setUsername('ninja');
		$user->setPassword('22222');
		$user->setVideoname('闪灵');
		$user->setWatchcnt(20);
		$this->getUtil('log')->write('============');
		
		$user_a = $user->toArray();
		$this->getUtil('log')->write($user_a);
	//	print_r($user_a);
		
		$userService = $this->getUserService();
		$this->getUtil('log')->write('inster db');
		$userService->createUser($user_a);
	}
	
 	public function getUserService(){
		return InitPHP::getService('user');
	} 
	
}