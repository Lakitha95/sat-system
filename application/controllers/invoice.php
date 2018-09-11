<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller
{
	function checkLogin()
	{

		$user = $this->session->userdata('UserName');
		if ($user == NULL) {
			redirect('login/index');
		}

	}

	public function index()
	{
		$this->checkLogin();
		$this->load->model("gen_model");
		$whereArr = array("delete_status" => 0);
		$result = $this->gen_model->getData("tbl_item", "", $whereArr);
		$data["ItemData"] = $result;

		$this->load->view('invoice/index', $data);
	}

	public function add()
	{
		$this->load->model("gen_model");
		$invoice_serial = $this->gen_model->getNextSerialNumber("invoice");
		$serialArr = array("invoice_serial" => $invoice_serial);
		$this->load->view('invoice/add', $serialArr);
	}

	/**
	 *
	 */
	public function addNewInvoice()
	{
		$this->load->model("gen_model");

		$this->db->trans_start();
		$invoice_serial = $this->gen_model->getNextSerialNumber("invoice");
		$itemCode = substr(("000000" . (int)$invoice_serial), strlen("000000" . $invoice_serial) - 6, 6);
		$invoice_serial = $this->gen_model->getNextSerialNumber("invoice");
		$dataArr = array(
			"id" => $invoice_serial,
			//	"$invoice_serial" => $itemCode,
			"date" => $this->input->post("txtDate"),
			"total" => $this->input->post("txtInvoiceTotal"),
			"customer" => 0,
			"type" => $this->input->post("txtCondition"),
			"notes" =>"Sample note"
		);
		//TODO complete this step
		//start of add multiple items
		$itmArr = $this->input->post("txtItemName");
		$qtyArr = $this->input->post("txtQuantity");
		$unitPrice = $this->input->post("txtUnitPrice");
		$totPrice = $this->input->post("txtTotalPrice");
		if (!empty($itmArr)) {
			for ($i = 0; $i < sizeof($itmArr); $i++) {
				if (!empty($itmArr[$i])) {
					$item = $itmArr[$i];
					$quantity = $qtyArr[$i];
					$unitPrice = $unitPrice[$i];
					$totalPrice = $totPrice[$i];
					$dataArr1 = array(
						"invoice_id" => $invoice_serial,
						//	"$invoice_serial" => $itemCode,
						"item_id" => $item,
						"warranty" => 0,
						"quantity" => $quantity,
						"unit_price" => $unitPrice,
						"total_price" => $totalPrice
					);
					$this->gen_model->insertData("tbl_invoice_item", $dataArr1);
				}
			}
		}
		//end of add multiple items
		$this->gen_model->insertData("tbl_invoice", $dataArr);

		$this->gen_model->increaseSerialNumber("invoice");
		$this->db->trans_complete();
		$this->session->set_flashdata('success_msg1', 'Successfully added item ');
		if ($this->db->trans_status() === TRUE) {
			$this->session->set_flashdata('success_msg', 'Successfully added item ');
		} else {
			$this->session->set_flashdata('fail_msg', 'Adding invoice Failed');
		}

		redirect('invoice/index');


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

	public function addItemType()
	{
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

	public function edit($id)
	{
		$this->load->model("gen_model");
		$whereArr = array("id" => $id);
		$rst = $this->gen_model->getData("tbl_item", "", $whereArr);
		$data["studentData"] = $rst[0];
		$this->load->view('item/edit', $data);
	}

	public function editItem()
	{
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

	public function view()
	{
		$this->load->view('supplier/view');
	}

	public function deleteStudent()
	{
		//$this->load->view('welcome_message');
	}

}
