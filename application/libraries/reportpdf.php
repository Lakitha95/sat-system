<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Reportpdf {

    public function __construct() {
        require_once('mpdf/mpdf.php');
    }
	public function createpdf($html){
		$this->load->library('mpdf/mpdf.php');
		$this->load->library('mpdf/mpdf.php');
	}
}
