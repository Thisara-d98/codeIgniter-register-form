<?php 

class Registration extends CI_Controller{
	public function __construct(){
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('RegModel');
	}

	public function savedata(){
		$this->load->view('registration_form');

		if($this->input->post('submit')){
			$name=$this->input->post('name');
			$phonenumber=$this->input->post('phonenumber');
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$this->RegModel->SaveRecords($name,$phonenumber,$email,$password);
			echo "Records saved successfully";
			redirect("Registration/savedata");
		}
	}
}

?>
