<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

    function checkLogin() {

        $user = $this->session->userdata('UserName');
        if ($user == NULL) {
            redirect('login/index');
        }
    }

    public function index() {
        $this->checkLogin();
        $this->load->model("gen_model");
        $whereArr = array("delete_status" => 0);
        $result = $this->gen_model->getData("tbl_item", "", $whereArr);
        $data["ItemData"] = $result;

        $this->load->view('item/index', $data);
    }

    public function itemTypeAjax() {
//        var_dump($this->input->post("drpType"));
//        die;
        $this->load->model("gen_model");
        $whereArr = array("delete_status" => 0);
        $result = $this->gen_model->getData("tbl_item_type",array("name"), $whereArr);
//        $result = $this->db->where("name", "Mouse")->get("tbl_item_type")->result();
//        $data["itemType"] = $result; 
//        var_dump(json_encode($data));die;
        echo json_encode($result);
    }

    public function add() {
        $this->load->model("gen_model");
        $item_serial = $this->gen_model->getNextSerialNumber("item");
        $serialArr = array("item_serial" => $item_serial);
        $this->load->view('item/add', $serialArr);
    }

    public function addItem() {
        $this->load->model("Email");
        $this->load->model("gen_model");
        //check for the item type
        $whereArr = array("item_type" => $this->input->post("txtType"));
        $result = $this->gen_model->getData("tbl_item", "", $whereArr);

        $this->db->trans_start();
        $item_serial = $this->gen_model->getNextSerialNumber("item");
        $itemCode = substr(("000000" . (int) $item_serial), strlen("000000" . $item_serial) - 6, 6);
        $item_serial = $this->gen_model->getNextSerialNumber("item");
        $dataArr = array(
            "id" => $item_serial,
            "item_serial" => $itemCode,
//                "name" => $this->input->post("txtName1"),
            "name" => $this->input->post("txtName1"),
            "description" => $this->input->post("txtDescription"),
            "delete_status" => 0,
//                "item_type" => $this->input->post("txtType"),
            "item_type" => "Ram",
            "quantity" => $this->input->post("txtQuantity")
        );
        $this->gen_model->insertData("tbl_item", $dataArr);
        $this->gen_model->increaseSerialNumber("item");
        $this->db->trans_complete();
        $this->session->set_flashdata('success_msg1', 'Successfully added item ');
        if ($this->db->trans_status() === TRUE) {
            $this->session->set_flashdata('success_msg', 'Successfully added item ' . $itemName);
        } else {
            $this->session->set_flashdata('fail_msg', 'Adding item ' . $itemName . ' Failed');
        }

        redirect('item/index');




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

    public function addItemType() {
        $this->load->model("gen_model");
        //-------------------------------------
        $this->db->trans_start();
        $item_type_serial = $this->gen_model->getNextSerialNumber("itemType");

        $dataArr = array(
            "id" => $item_type_serial,
            "name" => $this->input->post("txtEntityName")
        );
        $this->gen_model->insertData("tbl_item_type", $dataArr);
        //=====================================
        $this->db->trans_complete();
        $this->load->helper('url');
        redirect('item_type/index');

        //-------------------------------------
    }

    public function edit($id) {
        $this->load->model("gen_model");
        $whereArr = array("id" => $id);
        $rst = $this->gen_model->getData("tbl_item", "", $whereArr);
        $data["studentData"] = $rst[0];
        $this->load->view('item/edit', $data);
    }

    public function editItem() {
        $this->load->model("gen_model");
        $dataArr = array(
            'name' => $this->input->post("txtStdName"),
            'age' => $this->input->post("txtStdAge"),
        );

        $whereArr = array('id' => $this->input->post("txtStdID"));

        $rst = $this->gen_model->updateData("tbl_student", $dataArr, $whereArr);

        if ($rst) {
            redirect("item/index/");
        }
    }

    public function view() {
        $this->load->view('supplier/view');
    }

    public function deleteStudent() {
        //$this->load->view('welcome_message');
    }

}
