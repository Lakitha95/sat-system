<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ItemType extends CI_Controller {

    function checkLogin() {

        $user = $this->session->userdata('UserName');
        if ($user == NULL) {
            redirect('login/index');
        }
    }

    public function index() {
        $this->checkLogin();
        $this->load->model("gen_model");
        $item_type_serial = $this->gen_model->getNextSerialNumber("itemType");
        $result = $this->gen_model->getData("tbl_item_type", "", "");
        $data["ItemTypeData"] = $result;
        $data["Item_type_serial"] = $item_type_serial;

        $this->load->view('itemType/index', $data);
    }

    public function add() {
//            $val = json_encode($_GET['type']);
        $val = $_POST['type'];

        $this->load->model("gen_model");
        //-------------------------------------
            $this->db->trans_start();
        $item_type_serial = $this->gen_model->getNextSerialNumber("itemType");

        $dataArr = array(
            "id" => $item_type_serial,
            "name" => $val
        );
//                echo $dataArr ;
        $this->gen_model->insertData("tbl_item_type", $dataArr);
        $this->gen_model->increaseSerialNumber("itemType");
        $this->db->trans_complete();
        $this->load->helper('url');  
            redirect('itemType/index');
    }
    public function addModal() {
//            $val = json_encode($_GET['type']);
        $this->load->model("gen_model");
        $item_type_serial = $this->gen_model->getNextSerialNumber("itemType");

        $dataArr = array(
            "id" => $item_type_serial,
            "name" => $this->input->post("type")
        );
//                echo $dataArr ;
        $this->gen_model->insertData("tbl_item_type", $dataArr);
        $this->gen_model->increaseSerialNumber("itemType");
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
