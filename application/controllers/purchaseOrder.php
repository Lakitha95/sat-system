<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PurchaseOrder extends CI_Controller {
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
        $result = $this->gen_model->getData("tbl_item", "", $whereArr);
        $data["ItemData"] = $result;

        $this->load->view('purchaseOrder/index', $data);
    }

    public function add() {
        $this->load->model("gen_model");
        $item_serial = $this->gen_model->getNextSerialNumber("item");
        $serialArr = array("item_serial" => $item_serial);
        $this->load->view('purchaseOrder/add', $serialArr);
    }

    public function addItem() {
        $this->load->model("Email");
        $this->load->model("gen_model");
        //check for the item type
        $whereArr = array("item_type" => $this->input->post("txtType"));
        $result = $this->gen_model->getData("tbl_item", "", $whereArr);
        if ($result <> NULL) {
            $this->db->trans_start();
            $item_serial = $this->gen_model->getNextSerialNumber("item");
            $itemCode = substr(("000000" . (int) $item_serial), strlen("000000" . $item_serial) - 6, 6);
            $item_serial = $this->gen_model->getNextSerialNumber("item");
            $dataArr = array(
                "id" => $item_serial,
                "item_serial" => $itemCode,
                "name" => $this->input->post("txtName"),
                "description" => $this->input->post("txtDescription"),
                "delete_status" => 0,
                "item_type" => $this->input->post("txtType"),
                "quantity" => $this->input->post("txtQuantity"),
                "brand" => $this->input->post("txtBrand")
            );
            $this->gen_model->insertData("tbl_item", $dataArr);
            $this->gen_model->increaseSerialNumber("item");
            $this->db->trans_complete();
            $this->session->set_flashdata('success_msg1', 'Successfully added item ' );
            if ($this->db->trans_status() === TRUE) {
                $this->session->set_flashdata('success_msg', 'Successfully added item ' . $itemName);
            } else {
                $this->session->set_flashdata('fail_msg', 'Adding item ' . $itemName.' Failed');
            }
            
            redirect('purchaseOrder/index');    
        } else {
            $this->db->trans_start();
            // add item type
            $item_type_serial = $this->gen_model->getNextSerialNumber("itemType");
            $dataArr = array(
                "id" => $item_type_serial,
                "name" => $this->input->post("txtType")
            );
            $this->gen_model->insertData("tbl_item_type", $dataArr);
            $this->gen_model->increaseSerialNumber("itemType");
            // End of add item type
            // add Item with new Item Type
            $item_serial = $this->gen_model->getNextSerialNumber("item");
            $itemCode = substr(("000000" . (int) $item_serial), strlen("000000" . $item_serial) - 6, 6);
            $item_serial = $this->gen_model->getNextSerialNumber("item");
            $itemName = $this->input->post("txtName");
            $dataArr1 = array(
                "id" => $item_serial,
                "item_serial" => $itemCode,
                "name" => $this->input->post("txtName"),
                "description" => $this->input->post("txtDescription"),
                "delete_status" => 0,
                "item_type" => $this->input->post("txtType"),
                "quantity" => $this->input->post("txtQuantity"),
                "brand" => $this->input->post("txtBrand")
            );
            $this->gen_model->insertData("tbl_item", $dataArr1);
            $this->gen_model->increaseSerialNumber("item");
            // End of add Item with new Item Type

            $this->db->trans_complete();

            //End of check for the item type
            $this->gen_model->insertData("tbl_item", $dataArr);
            $this->gen_model->increaseSerialNumber("item");
            //=====================================
            $this->db->trans_complete();
            $this->load->helper('url');
            if ($this->db->trans_complete()) {
                $this->session->set_flashdata('success_msg', 'Successfully added item ' . $itemName);
                
            } else {
                $this->session->set_flashdata('fail_msg', 'Adding item ' . $itemName.' Failed');

            }
            redirect('item/index');     
        }



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
