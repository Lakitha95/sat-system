<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
        $result = $this->gen_model->getData("tbl_user", "", $whereArr);
        $data["UserData"] = $result;
        $this->load->view('user/index', $data);
    }

    public function add() {
        $this->load->view('user/add');
    }

    public function addUser() {
        $this->load->model("Email");
        $this->load->model("gen_model");


        //=====================================
        $this->db->trans_start();
        $std_serial = $this->gen_model->getNextSerialNumber("user");

        $studentCode = substr(("000000" . (int) $user_serial), strlen("000000" . $std_serial) - 6, 6);

        $dataArr = array(
            "id" => $user_serial,
            "studetn_code" => $studentCode,
            "name" => $this->input->post("txtName"),
            "age" => $this->input->post("txtAge"),
            "delete_status" => 0,
            "email" => $this->input->post("txtEmail")
        );
        $this->gen_model->insertData("tbl_student", $dataArr);
        $this->gen_model->increaseSerialNumber("student");
        //=====================================
        $this->db->trans_complete();
    }

    public function edit($id) {
        
    }

    public function editUser() {
        
    }

    public function view() {
        
    }

    public function deleteUser() {
        
    }

}
