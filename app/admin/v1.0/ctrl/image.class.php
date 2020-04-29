<?php
namespace ctrl;

use \middleware\adminrole;
use model\images;
use z\view;

class image
{
	static function init(){
			$check = new \middleware\check();
			$check->check();
		}
		
	public static function index(){
		adminrole::auth();//判断用户权限
        view::display();
	}
	
	public static function jsonlist(){
		adminrole::auth();//判断用户权限
		$d = new images;
		$result = $d->jsonPageSelect();			
		$jsonlist = array();
		$jsonlist['code'] = 0;
		$jsonlist['msg'] = 'ok';
		$jsonlist['count'] = $result['page']['rows'];
		$jsonlist['data'] = $result['data'];
		exit(json_encode($jsonlist));
	}
	
	public static function addview(){
		adminrole::auth();//判断用户权限
        view::display();
	}
	
	public static function add(){
		adminrole::auth();//判断用户权限
		if(!isset($_POST['title'])){
			json(array('status'=> 0,'info'=>'请填写必填数据！'));
		}
		$m = new images;
		$result = $m->insertData();
  		if($result['status']){
			json(array('status'=> $result['status'],'info'=>$result['msg']));
		}else{
			json(array('status'=> $result['status'],'info'=>$result['msg']));
		}
	}
	
	public static function editview(){
		adminrole::auth();//判断用户权限
		if(isset($_GET['id'])){
			$m = new images;
			$image = $m->findData();
			view::assign('image',$image);
			view::display();
		}else{
			return '缺少参数:id';
		}
	}
	
	public static function edit(){
		adminrole::auth();
		if(!isset($_POST['title'])){
			json(array('status'=> 0,'info'=>'请填写必填数据！'));
		}
		$m = new images;
		$result = $m->updateData();
		if($result['status']){
			json(array('status'=> $result['status'],'info'=>$result['msg']));
		}else{
			json(array('status'=> $result['status'],'info'=>$result['msg']));
		}
	}
	
	public static function switchStatus(){
		adminrole::auth();
		if(isset($_POST['id'])){
			$m = new images;			
			$edit = $m->switchStatus();
			if($edit){
				json(array('status'=> 1,'info'=>'设置成功'));
			}
		}else{
			json(array('status'=> 0,'info'=>'ID错误！'));
		}
	}
	
	public static function del(){
		adminrole::auth();
		if(isset($_POST['id'])){
			$m = new images;
			$del = $m->deleteOneData();
			if($del){
				json(array('status'=> 1,'info'=>'删除成功'));
			}else{
				json(array('status'=> 0,'info'=>'该图集内有内容，请先删除图集内容后再删除图集！'));
			}
		}else{
			json(array('status'=> 0,'info'=>'ID错误！'));
		}
	}

}