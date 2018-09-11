<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ItemBrand extends CI_Controller {

    function checkLogin() {

        $user = $this->session->userdata('UserName');
        if ($user == NULL) {
            redirect('login/index');
        }
    }

    public function index() {
        $this->checkLogin();
        $this->load->model("gen_model");
        $item_brand_serial = $this->gen_model->getNextSerialNumber("itemBrand");
        $result = $this->gen_model->getData("tbl_item_brand", "", "");
        $data["ItemBrandData"] = $result;
        $data["Item_brand_serial"] = $item_brand_serial;

        $this->load->view('itemBrand/index', $data);
    }

    public function add() {
        $this->load->model("gen_model");
        //-------------------------------------
        $this->db->trans_start();
        $item_type_serial = $this->gen_model->getNextSerialNumber("itemBrand");

        $dataArr = array(
            "id" => $item_brand_serial,
            "brandname" => $this->input->post("txtName"),
            "comment" => $this->input->post("txtComment")
        );
        $this->gen_model->insertData("tbl_item_brand", $dataArr);
        $this->gen_model->increaseSerialNumber("itemBrand");
        $this->db->trans_complete();
        $this->load->helper('url');
        redirect('itemBrand/index');
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
