<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {
	function checkLogin(){

		$user = $this->session->userdata('UserName');
		if ($user == NULL) {
			redirect('login/index');
		}

	}
	
	public function index()
	{
		$this->checkLogin();
		$this->load->view('task/index');
	}
	public function add()
	{
		$this->load->view('task/add');
	}
	public function addStudent(){
		$this->load->model("Email");
		$this->load->model("gen_model");
	
		
		//=====================================
		$this->db->trans_start();
		$std_serial=$this->gen_model->getNextSerialNumber("student");
		
		$studentCode = substr(("000000" . (int) $std_serial), strlen("000000" . $std_serial) - 6, 6);
		
		$dataArr=array(
			"ID"=>$std_serial,
			"studetn_code"=>$studentCode,
			"name"=>$this->input->post("txtName"),
			"age"=>$this->input->post("txtAge"),
			"delete_status"=>0,
			"email"=>$this->input->post("txtEmail")
		);
		$this->gen_model->insertData("tbl_student",$dataArr);
		$this->gen_model->increaseSerialNumber("student");
		//=====================================
		$this->db->trans_complete();
		
		
		// File upload=======================
				
				$path = "uploads/".$std_serial;

				if(!is_dir($path)) //create the folder if it's not already exists
				{
				  mkdir($path);
				} 

				//mkdir("/uploads/".$std_serial);
				$config['upload_path']          = "./uploads/".$std_serial;
                $config['allowed_types']        = 'gif|jpg|png';
                //$config['max_size']             = 100;
                //$config['max_width']            = 1024;
                //$config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('fileUpload'))
                {
                        $error = array('error' => $this->upload->display_errors());
						var_dump($error);
                      //  $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						var_dump($data);
                        //$this->load->view('upload_success', $data);
                }
        
		//File Upload Ends here ==================
		
		$result=$this->gen_model->getData("tbl_student",array("email","name"));
		$recepientArr=$result;
		
		$subject="TESTING EMAIL";
		$content=$this->load->view("task/email",array(),true);
		$filepath="127_0_0_1(1).sql";
		$this->Email->sendNow($recepientArr,$subject,$content,$filepath);
	}
	
	public function edit($id)
	{
		$this->load->model("gen_model");
		$whereArr=array("id"=>$id);
		$rst=$this->gen_model->getData("tbl_student","",$whereArr);
		$data["studentData"]=$rst[0];
		$this->load->view('task/edit',$data);
	}
	public function editStudent(){
		$this->load->model("gen_model");
        $dataArr = array(
            'name' => $this->input->post("txtStdName"),
            'age' => $this->input->post("txtStdAge"),
        );
        
        $whereArr=array('id' => $this->input->post("txtStdID"));
        
        $rst=$this->gen_model->updateData("tbl_student",$dataArr , $whereArr);
        
		if($rst){
            redirect("task/index/");
        }
	}
	
	public function view()
	{
		$this->load->view('task/view');
	}	
	public function deleteStudent()
	{
		//$this->load->view('welcome_message');
	}
}
