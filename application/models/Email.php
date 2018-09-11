<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Model{
	
	public function sendNow($recepientArr,$subject,$content,$filepath=""){
		$this->load->library('My_PHPMailer');
        $maildata["subject"] = $subject;
		$emailList=array();
		foreach($recepientArr as $email){
			$emailList[]=array(
				"name"=>$email->name,
				"email"=>$email->email
			);
		}
		//var_dump($emailList);
		//die;
        $maildata["recepients"] = $emailList;
        $maildata["mailbody"] =  $content;
        $maildata["path"] = $filepath; //this is basicly what i am
        $maildata["altmailbody"] = "Confirm Registration<br/><br/>";

        $mail = new My_PHPMailer();
        $mailstatus = $mail->sendmailnow($maildata);
        var_dump($mailstatus);
		//var_dump($_POST["txtEmail"]);
	}
	
	
}
