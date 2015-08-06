<?php
class staff extends Controller{
	
	function staff(){

	parent::Controller();

	}

	function get_All(){

	
	$this->load->model('staff_model');

	$data['query']=
	$this->staff_model->staff_getall();
	

	$this->load->view('vStaff',$data);	
	}



}
?>