<?php
namespace Admin\Controller;
use Think\Controller;

class NoticesController extends Controller{
	//��Ϣ�б�ҳ
	public function index(){
		$notices = M('notices');
		$count = $notices -> count();
		$Page = new \Think\Page($count,3);
		$show = $Page -> show();
		$list = $notices -> order('addtime') -> limit($Page->firstRow.','.$Page->listRows) -> select();
		$this -> assign('list',$list);
		$this -> assign('page',$show);
		$this -> display();
	}
	
	//��ȡ��Ϣ���ҳ��
	public function add(){
		$this -> display();
	}
	//������ݵ����ݿ�
	public function insert(){
		$_POST['addtime'] = time();
		$_POST['user_id'] = 0;
		//dump($_POST);
		//exit;
		$notices = M('notices');
		if($notices -> create()){
			if($notices -> add()){
				$this -> redirect('notices/index');
			}else{
				$this -> redirect('notices/add');
			}
		}
	}
	
	//��ȡ��Ϣ�޸�ҳ��
	public function edit(){
		$id = I('id');
		$notices = M('notices');
		$data = $notices -> find($id);
		$this -> assign('notice',$data);
		$this -> display();
	}
	//���޸ĵ���Ϣ��ӵ����ݿ�
	public function update(){
		unset($_POST['addtime']);
		$_POST['addtime'] = time();
		$_POST['admin_id'] = 0;
		$notices = M('notices');
		if($notices -> create()){
			if($notices -> save()){
				$this -> redirect("notices/index");
			}else{
				$this -> redirect("notices/edit");
			}
		}
	}
	
	//��Ϣɾ��
	public function del(){
		$id = I('id');
		$notices = M('notices');
		if($notices -> delete($id)){
			$this -> redirect('notices/index');
		}else{
			$this -> redirect('notices/index');
		}
	}
}