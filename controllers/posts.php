<?php
class Posts extends CI_Controller{

	function _construct(){
		parent::_construct();
		// load the database
		$this->load->model('post');
	}
 	function index(){
 		// $this->db->select('');
 		$data['posts']=$this->post->get_posts();
 		echo"<pre>";print_r($data['posts']);echo"</pre>";
 	}
 	function post($postID){
 		$data['post']=$this->post->get_post($postID);
 		$this->load->view('post',$data);
 	}
 	function new_post(){
 		if($_POST){
 			$data=array(
 				'title'=>$_POST['title'],
 				'post'=>$_POST['post'],
 				'active'=>1
 				);
 			$this->post->insert_post($data);
 			redirect(base_url().'post/');
 		}
 		else{
 			$this->load->view('new_post');
 		}
 	}
 	function editpost($PostID){
 		$data['success']=0;
 		if($_POST){
 			$data_post=array(
 				'title'=>$_POST['title'],
 				'post'=>$_POST['post'],
 				'active'=>1
 				);
 			$this->post->update_post($postID,$data);
 			$data['success']=1;
 		}
 		$data['post']=$this->post->get_post($postID);
 		$this->load->view('edit_post',$data);
 	}
 	function deletepost($postID){
 		$this->post->delete_post($postID);
 		redirect(base_url().'post');
 	}

}
?>