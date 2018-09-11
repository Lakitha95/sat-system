<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {
    function checkLogin(){
       
       $user = $this->session->userdata('UserName');
        if ($user == NULL) {
            redirect('login/index');
        }  
         
    }

    public function index() {
        $this->checkLogin();
      
            $this->load->model("gen_model");
            $whereArr = array("delete_status" => 0);
            $result = $this->gen_model->getData("tbl_supplier", "", $whereArr);
            $data["SupplierData"] = $result;

            $this->load->view('supplier/index', $data);
           }

    public function add() {
        $this->checkLogin();
            $this->load->model("gen_model");
            $supplier_serial = $this->gen_model->getNextSerialNumber("supplier");
            $serialArr = array("supplier_serial" => $supplier_serial);
            $this->load->view('supplier/add', $serialArr);
        
    }

    public function addSupplier() {
        $this->checkLogin();
            $this->load->model("Email");
            $this->load->model("gen_model");


            //=====================================
            $this->db->trans_start();
            $supplier_serial = $this->gen_model->getNextSerialNumber("supplier");

            $supplierCode = substr(("000000" . (int) $supplier_serial), strlen("000000" . $supplier_serial) - 6, 6);

            $dataArr = array(
                "id" => $supplier_serial,
                "supplier_serial" => $supplierCode,
                "name" => $this->input->post("txtName"),
                "address" => $this->input->post("txtAddress"),
                "delete_status" => 0,
                "fax" => $this->input->post("txtFax"),
                "telephone" => $this->input->post("txtTelephone"),
                "date_added" => $this->input->post("txtDate"),
                "email" => $this->input->post("txtEmail"),
                "credit_period_days" => $this->input->post("txtcreditDays"),
                "credit_amount" => $this->input->post("txtCreditAmount")
            );
            $dataArr1 = array(
                "id" =>'',
                "supplierid" => $supplierCode,
                "contact_person_name" => $this->input->post("txtContactName"),
                "email" => $this->input->post("txtContactEmail"),
                "mobile" => $this->input->post("txtContactMobile"),
                "telephone" => $this->input->post("txtContactTelephone"),
                "extension" => $this->input->post("txtContactExtension")
            );
            $this->gen_model->insertData("tbl_supplier", $dataArr);
            $this->gen_model->insertData("tbl_supplier_contact", $dataArr1);
            $this->gen_model->increaseSerialNumber("supplier");
            //=====================================
            $this->db->trans_complete();
            $this->load->helper('url');
            redirect('supplier/index');




            // File upload=======================
//				$path = "uploads/".$supplier_serial;
//
//				if(!is_dir($path)) //create the folder if it's not already exists
//				{
//				  mkdir($path);
//				} 
//
//				//mkdir("/uploads/".$std_serial);
//				$config['upload_path']          = "./uploads/".$std_serial;
//                $config['allowed_types']        = 'gif|jpg|png';
//                //$config['max_size']             = 100;
//                //$config['max_width']            = 1024;
//                //$config['max_height']           = 768;
//
//                $this->load->library('upload', $config);
//
//                if ( ! $this->upload->do_upload('fileUpload'))
//                {
//                        $error = array('error' => $this->upload->display_errors());
//						var_dump($error);
//                      //  $this->load->view('upload_form', $error);
//                }
//                else
//                {
//                        $data = array('upload_data' => $this->upload->data());
//						var_dump($data);
//                        //$this->load->view('upload_success', $data);
//                }
            //File Upload Ends here ==================
//		$result=$this->gen_model->getData("tbl_student",array("email","name"));
//		$recepientArr=$result;
//		
//		$subject="TESTING EMAIL";
//		$content=$this->load->view("supplier/email",array(),true);
//		$filepath="127_0_0_1(1).sql";
//		$this->Email->sendNow($recepientArr,$subject,$content,$filepath);
        
    }

    public function edit($id) {
        $this->checkLogin();
        $this->load->model("gen_model");
        $whereArr = array("id" => $id);
        $rst = $this->gen_model->getData("tbl_supplier", "", $whereArr);
        $data["studentData"] = $rst[0];
        $this->load->view('supplier/edit', $data);
                
    }

    public function editStudent() {
        $this->checkLogin();
        $this->load->model("gen_model");
        $dataArr = array(
            'name' => $this->input->post("txtStdName"),
            'age' => $this->input->post("txtStdAge"),
        );

        $whereArr = array('id' => $this->input->post("txtStdID"));

        $rst = $this->gen_model->updateData("tbl_student", $dataArr, $whereArr);

        if ($rst) {
            redirect("supplier/index/");
                }
    }

    public function view() {
        $this->$this->checkLogin();
        $this->load->view('supplier/view');
    }

    public function deleteStudent() {
        $this->$this->checkLogin();
        //$this->load->view('welcome_message');
    }

}
