<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $this->load->view('home_view', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }
 
 
 
  public function addcar()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
		//load the form helper.
		$this->load->helper(array('form','url'));
		//load the vFormInsertPhoto view.
		$this->load->view('vFormInsertPhoto.php', array('error' => ' ' ));
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }
 
   public function viewcars()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
		//load the form helper.
		$this->load->helper(array('form','url'));
		//load the vFormInsertPhoto view.
		$this->load->view('vFormUpdatePhoto.php', array('error' => ' ' ));
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }

	
	function doupload()
	{
		//configure the upload location, acceptable files and sizes.
		$config['upload_path'] = './assests/images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '2000';
		$config['max_width'] = '2024';
		$config['max_height'] = '2768';
		//load upload libary
		$this->load->library('upload', $config);
		//load mPhoto model
		$this->load->model("mPhoto");
		//check to see if upload was activated if/then/else statement
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('vFormInsertPhoto', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$data2 = $this->input->post(NULL, TRUE) ; //returns POST items with XSS filter
			$filename = $data['upload_data']['file_name']; //obtain the upload filename
			$data2['PhotoFilenameSmall']=$filename; //get and set the filename
			$data2['PhotoFilenameLarge']=$filename; //get and set the filename
			$this->mPhoto->insertPhoto($data2); //add to the database
			$this->load->view('upload_success', $data); //display success view
		}
	}

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 }

}

?>
