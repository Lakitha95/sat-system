<?php

class Auth_model extends CI_Model {

    function check_user($frmData) {

        //var_dump($frmData);die;
        $data = $this->db->get_where('tbl_user', $frmData);
        if (!empty($data->result())) {
            $userData = $data->result();

            $currentUser = array("id" => $userData[0]->id, "UserName" => $userData[0]->username);
            $this->session->set_userdata($currentUser);

            return true;
        } else {
            return false;
        }
    }

    function checkPrevillages($data) {

        $rst = $this->db->get_where("tbl_controller_method", $data);
        if ($rst->result()) {
            $controllerMethodData = $rst->result();
            $userPrevilageId = $controllerMethodData[0]->id;
            $currentUserId = $this->session->userdata["id"];
            $WhereArr = array(
                "user_id" => $currentUserId,
                "controller_method_id" => $userPrevilageId
            );
            $authinticateUser = $this->db->get_where("tbl_authorization", $WhereArr);
            if (!empty($authinticateUser->result())) {
                return true;
            } else {
                return false;
            }
        } else {
            return true;
        }
    }

}

?>