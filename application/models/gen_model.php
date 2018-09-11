<?php

class Gen_model extends CI_Model {
    public static $row_count;
    //makes this to work with columns and without where,limit and offset
    function getData($tablename = '', $columns_arr = array(), $where_arr = array(), $limit = 0, $offset = 0, $orderby = array()) {
        $limit = ($limit == 0) ? Null : $limit;

        if (!empty($columns_arr)) {
            $this->db->select(implode(',', $columns_arr), FALSE);
        }

        if ($tablename == '') {
            return array();
        } else {
            $this->db->from($tablename);

            if (!empty($where_arr)) {
                $this->db->where($where_arr);
            }

            if ($limit > 0 AND $offset > 0) {
                $this->db->limit($limit, $offset);
            } elseif ($limit > 0 AND $offset == 0) {
                $this->db->limit($limit);
            }

            if (count($orderby) > 0) {
                $orderbyString = '';

                foreach ($orderby as $orderclause) {

                    $orderbyString .= $orderclause["field"] . ' ' . $orderclause["order"] . ', ';
                }
                if (strlen($orderbyString) > 2) {
                    $orderbyString = substr($orderbyString, 0, strlen($orderbyString) - 2);
                }
                $this->db->order_by($orderbyString);
            }

            $query = $this->db->get();

            return $query->result();
        }
    }

    function getDataOr($tablename = '', $columns_arr = array(), $where_arr = array(), $limit = 0, $offset = 0) {
        $limit = ($limit == 0) ? Null : $limit;

        if (!empty($columns_arr)) {
            $this->db->select(implode(',', $columns_arr), FALSE);
        }

        if ($tablename == '') {
            return array();
        } else {
            $this->db->from($tablename);

            if (!empty($where_arr)) {
                $this->db->or_where($where_arr); //Or operator added here
            }

            if ($limit > 0 AND $offset > 0) {
                $this->db->limit($limit, $offset);
            } elseif ($limit > 0 AND $offset == 0) {
                $this->db->limit($limit);
            } elseif ($limit == 0 AND $offset > 0) {
                $this->db->limit(0, $offset);
            }

            $query = $this->db->get();

            return $query->result();
        }
    }

    function insertData($tablename, $data_arr) {
        try {
            $this->db->insert($tablename, $data_arr);

            $ret = $this->db->insert_id() + 0;
            return $ret;
        } catch (Exception $err) {
            return $err->getMessage();
        }
    }

    function updateData($tablename, $data_arr, $where_arr) {
        //$a=$this->db->update($tablename, $data_arr, $where_arr);
        //return $a;
        try {
            $rst=$this->db->update($tablename, $data_arr, $where_arr);
           // $report = array();
           // $report['error'] = $this->db->_error_number();
           // $report['message'] = $this->db->_error_message();
           // return $report;
            return $rst;
        } catch (Exception $err) {

            return $err->getMessage();
        }
    }

    function updateMultipleData($tablename, $data_arr, $keyColumn, $trno = Null) {
        $action = "M Update";
        try {
            // write($tablename, $data_arr, $action) {
            if (isset($trnno)) {
                $this->Log_model->write($tablename, $data_arr, $action, $trno);
            }
            return $this->db->update_batch($tablename, $data_arr, $keyColumn);
        } catch (Exception $err) {
            if (isset($trnno)) {
                $this->Log_model->write($tablename, $data_arr, $action, $trno);
            }
            return $err->getMessage();
        }
    }

    function deleteData($tablename, $where_arr) {

        try {
            $this->db->where($where_arr, NULL, FALSE);
            $result = $this->db->delete($tablename);
        } catch (Exception $err) {

            $result = $err->getMessage();
        }
        return $result;
    }

    function deleteMultipleData($tablename, $value_arr, $keyColumn, $trno = Null) {
        $action = "M Delete";
        try {
            // write($tablename, $data_arr, $action) {
            if (isset($trnno)) {
                $this->Log_model->write($tablename, $value_arr, $action, $trno);
            }
            $this->db->where_in($keyColumn, $value_arr);
            $result = $this->db->delete($tablename);
        } catch (Exception $err) {

            // write($tablename, $data_arr, $action) {
            if (isset($trnno)) {
                $this->Log_model->write($tablename, $value_arr, $action, $trno);
            }
            $result = $err->getMessage();
        }
        return $result;
    }

    /*
     * *************Table row count.getrowcount()*****************
     */

    function getrowcount($tableName, $where_arr = '') {
        /*
         *  echo $this->db->count_all_results('my_table');
          // Produces an integer, like 25

          $this->db->like('title', 'match');
          $this->db->from('my_table');
          echo $this->db->count_all_results();
          // Produces an integer, like 17
         */

        if (!empty($where_arr)) {
            $this->db->where($where_arr);
        }
        $count = $this->db->count_all_results($tableName);

        return $count;
    }

    /*
     *  
     */

    /*     * ****** Grid Functions ********* */

    function getcount($tablename, $where_arr = '') {
        $count = 0;

        if (count($where_arr) > 0) {

            $this->db->where($where_arr, NULL, FALSE);
        }
        if (isset($tablename)) {
            $count = $this->db->count_all($tablename);
        }
        return $count;
    }

    function getgriddata($tablename, $columns_arr, $where_arr, $like_arr, $sidx, $sord, $limit, $start) {
        if (!empty($where_arr)) {
            $this->db->where($where_arr, NULL, FALSE);
        }
        if (!empty($columns_arr)) {
            $this->db->select(implode(',', $columns_arr));
        }

        if (!empty($like_arr)) {
            foreach ($like_arr as $fld => $searchString) {
                $this->db->like($fld, $searchString, 'both');
            }
        }

        $this->db->order_by($sidx, $sord);
        $query = $this->db->get($tablename, $limit, $start);
        return $query->result();
    }

    //Return the field names of the selected table
    function getColumnNames($tableName) {
        $fields = $this->db->list_fields($tableName);

        return $fields;
    }

    function dbprefix($tableName) {
        $prefix = $this->db->dbprefix($tableName);

        return $prefix;
    }

    function genericQuery($strSQL) {
        if (!empty($strSQL)) {
            try {
                $query = $this->db->query($strSQL);
                if (!$query) {
                    throw new Exception($this->db->_error_message(), $this->db->_error_number());
                    return FALSE;
                } else {
                    return $query->result();
                }
            } catch (Exception $e) {
                return;
            }
        } else {
            return FALSE;
        }
    }

    function actionQuery($strSQL) {
        if (!empty($strSQL)) {
            try {
                $query = $this->db->query($strSQL);

                if (!$query) {
                    throw new Exception($this->db->_error_message(), $this->db->_error_number());
                    return FALSE;
                } else {
                    return TRUE;
                }
            } catch (Exception $e) {
                return;
            }
        } else {
            return FALSE;
        }
    }

    function getNextSerialNumber($name) {
        try {
            $strSQL = "SELECT serial from tbl_serial where entity_name = '" . $name . "'";
            $query = $this->db->query($strSQL);
            $currentSN = $query->result();
            if ($currentSN) {
                $serailno = ((int) $currentSN[0]->serial) + 1;
            } else {
                $serailno = 99999;
            }
        } catch (Exception $ex) {

            $serailno = 900000;
        }
        return $serailno;
    }


    function increaseSerialNumber($name) {
        try {

            $strSQL = "UPDATE tbl_serial SET serial = serial + 1 WHERE entity_name = '" . $name . "'";
            $query = $this->db->query($strSQL);
            $rtn = TRUE;
        } catch (Exception $ex) {

            $rtn = FALSE;
        }
        return $rtn;
    }

    
    function getAutoFillData($tablename, $fieldName, $value, $keyfield, $limit, $offset) {
        $this->db->select($keyfield . ', ' . $fieldName);
        $this->db->from($tablename);
        $this->db->like($fieldName, $value, 'after');
        $this->db->limit($limit);
        $query = $this->db->get();
        //$query = $this->db->get_where($tablename, $where_arr, $limit, $offset);
        return $query->result();
    }

    function getFilteredAutoFillData($tablename, $fieldName, $value, $keyfield, $whereArr, $limit, $offset) {
        $this->db->select($keyfield . ', ' . $fieldName);
        $this->db->from($tablename);
        $this->db->like($fieldName, $value, 'after');
        $this->db->where($whereArr);
        $this->db->limit($limit);
        $query = $this->db->get();
        //$query = $this->db->get_where($tablename, $where_arr, $limit, $offset);
        return $query->result();
    }

    function getMultiAutoFillData($tablename, $fieldName, $value, $keyfield, $fieldNext, $limit, $offset) {
        $this->db->select($keyfield . ', ' . $fieldName . ', ' . $fieldNext);
        $this->db->from($tablename);
        $this->db->like($fieldName, $value, 'after');
        $this->db->limit($limit);
        $query = $this->db->get();
        //$query = $this->db->get_where($tablename, $where_arr, $limit, $offset);
        return $query->result();
    }

    function getAccountData($tablename, $fieldName, $value, $keyfield, $field1, $field2, $field3, $limit, $offset) {
        $this->db->select($keyfield . ', ' . $fieldName . ', ' . $field1 . ', ' . $field2 . ', ' . $field3);
        $this->db->from($tablename);
        $this->db->like($fieldName, $value, 'after');
        $this->db->limit($limit);
        $query = $this->db->get();
        //$query = $this->db->get_where($tablename, $where_arr, $limit, $offset);
        return $query->result();
    }

    function getConfigValue($configname) {

        return $this->config->item($configname);


    }


    function convert_number($number) {
        if (($number < 0) || ($number > 999999999)) {
            throw new Exception("Number is out of range");
        }

        $Gn = floor($number / 1000000);
        /* Millions (giga) */
        $number -= $Gn * 1000000;
        $kn = floor($number / 1000);
        /* Thousands (kilo) */
        $number -= $kn * 1000;
        $Hn = floor($number / 100);
        /* Hundreds (hecto) */
        $number -= $Hn * 100;
        $Dn = floor($number / 10);
        /* Tens (deca) */
        $n = $number % 10;
        /* Ones */

        $res = "";

        if ($Gn) {
            $res .= $this->convert_number($Gn) .  "Million";
        }

        if ($kn) {
            $res .= (empty($res) ? "" : " ") .$this->convert_number($kn) . " Thousand";
        }

        if ($Hn) {
            $res .= (empty($res) ? "" : " ") .$this->convert_number($Hn) . " Hundred";
        }

        $ones = array("", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine", "Ten", "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eightteen", "Nineteen");
        $tens = array("", "", "Twenty", "Thirty", "Fourty", "Fifty", "Sixty", "Seventy", "Eigthy", "Ninety");

        if ($Dn || $n) {

            if (!empty($res)) {
                $res .= " and ";
            }

            if ($Dn < 2) {
                $res .= $ones[$Dn * 10 + $n];
            } else {
                $res .= $tens[$Dn];

                if ($n) {
                    $res .= " " . $ones[$n];
                }
            }
        }

        if (empty($res)) {
            $res = "zero";
        }

        return $res;
    }



}

?>
