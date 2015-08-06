<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class site extends CI_Controller {
	
	
	public function index()
	{
		$this->home();
	}
	
	public function home()
	{
		//load the view
		$this->load->view("vSite.php");
	}
    
    public function contact()
	{
		//load the view
		$this->load->view("vContact.php");
	}
    
    public function rightbar()
	{
		//load the view
		$this->load->view("vRightbar.php");

	}
	
      public function viewstaff()
{

         $this->load->model('staff_model');
         $data ['query'] = $this->staff_model->viewstaff(); 
         $this->load->view('vStaff', $data);
    }
	
	      public function sunderland()
{

         $this->load->model('sunderland_model');
         $data ['query'] = $this->sunderland_model->viewsunderland(); 
         $this->load->view('vSunderland', $data);
    }
	
		  public function roker()
{

         $this->load->model('roker_model');
         $data ['query'] = $this->roker_model->viewroker(); 
         $this->load->view('vRoker', $data);
    }

	public function addstaff(){
		//load the form helper.
		$this->load->helper(array('form','url'));
		//load the vFormInsertPhoto view.
		$this->load->view('vFormInsertStaff.php', array('error' => ' ' ));
	}
	function douploadstaff()
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
		$this->load->model("mStaff");
		//check to see if upload was activated if/then/else statement
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('vFormInsertStaff', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$data2 = $this->input->post(NULL, TRUE) ; //returns POST items with XSS filter
			$filename = $data['upload_data']['file_name']; //obtain the upload filename
			$data2['PhotoFilenameSmall']=$filename; //get and set the filename
			$data2['PhotoFilenameLarge']=$filename; //get and set the filename
			$this->mStaff->insertStaff($data2); //add to the database
			$this->load->view('upload_success', $data); //display success view
		}
	}
	
	
	
	public function gallery()
	{
		
		$data['browsetitle'] = "Gallery";
		$data['pagetitle'] = "Lightbox Gallery";
		$data['bodytext'] = "This little gallery is being served up with CodeIgnitor MVC framework.";
		//load in a model called mPhoto
		$this->load->model("mPhoto");
		//call the function getAllPhotos() from the model.
		$data['results'] = $this->mPhoto->getAllPhotos();
		$this->load->view("vGallery.php", $data);
	}
	
	public function addstock(){
		//load the form helper.
		$this->load->helper(array('form','url'));
		//load the vFormInsertPhoto view.
		$this->load->view('vFormInsertPhoto.php', array('error' => ' ' ));
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
	
	public function viewstock($id = null){
		
		if ( is_numeric($id) ){
			//echo "this is edit"; //
			$this->load->helper(array('form', 'url')); //without this form will not display
			$query = $this->db->query("select * from lvmc_stock where PhotoID=" . $id);
			$data['results'] = $query->result();
			$this->load->view('vFormUpdatePhoto.php', $data);
			//load up the appropiate view
		} else {
			//echo "No ID provided for record in the URL.";
			$this->load->model("mPhoto");
			$data['results'] = $this->mPhoto->getAllPhotos();
			$this->load->view('vPhotosListToEdit.php', $data);
		}
	}	
	
		public function viewsoldstock($id = null){
			//echo "No ID provided for record in the URL.";
			$this->load->model("mPhotoo");
			$data['results'] = $this->mPhotoo->getAllPhotos();
			$this->load->view('vSoldStock.php', $data);
	}
	
	public function doupdate(){
		
		$this->load->model("mPhoto");
		$data2 = $this->input->post(NULL, TRUE) ; // returns POST items with XSS filter
		$id = $data2['PhotoID'];
		$this->mPhoto->updatePhoto($data2, $id); //add to the database
		$this->load->view('update_success'); //display success view
	}

	
		public function doupdatemisc(){
		
		$this->load->model("mMisc");
		$data2 = $this->input->post(NULL, TRUE) ; // returns POST items with XSS filter
		$id = $data2['id'];
		$this->mMisc->updateMisc($data2, $id); //add to the database
		$this->load->view('update_success'); //display success view
	}
	
	function search(){
		$this->load->helper(array('form', 'url')); //without this form will not display
		
		if ($this->input->post())
		{
			$searchString = $this->input->post('search');
			$this->load->model("mPhoto");
			$data['results'] = $this->mPhoto->searchPhotos($searchString);
			$this->load->view('searchresults.php', $data);
		} else {
			$this->load->view('search.php'); //display success view
		}
	}
			public function misc($id = null){
		
		if ( is_numeric($id) ){
			//echo "this is edit"; //
			$this->load->helper(array('form', 'url')); //without this form will not display
			$query = $this->db->query("select * from lvmc_misc where id=" . $id);
			$data['results'] = $query->result();
			$this->load->view('vFormUpdateMisc.php', $data);
			//load up the appropiate view
		}
	}
			public function viewcar($id = null){
		
		if ( is_numeric($id) ){
			//echo "this is edit"; //
			$this->load->helper(array('form', 'url')); //without this form will not display
			$query = $this->db->query("select * from lvmc_stock where PhotoID=" . $id);
			$data['results'] = $query->result();
			$this->load->view('vCar.php', $data);
			//load up the appropiate view
		}
	}
	
	
}

