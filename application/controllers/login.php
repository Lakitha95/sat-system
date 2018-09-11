<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('login/index');
	}
	
	public function verifyUser(){
		
		$userData=array(
			"username"=>$this->input->post("txtUserName"),
			"password"=>$this->input->post("txtPassword")
		);
		$this->load->model("auth_model");
		$rst=$this->auth_model->check_user($userData);
		
		if($rst){
			//echo "true";
			redirect("/dashboard/");
		}else{
			//echo "false";
			redirect("/login/index");
		}		
	}
}
?>