<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
	}
 
	public function index(){
		if($this->session->userdata('user_id')!=""){
			
			$this-> user_ok_login();
		}
		else{

		$this->load->model('home_model');
		$this->load->view("home_head.php");
		$this->load->view("home.php");
		$this->load->view("home_foot.php");
		}
		
	}
	
	public function login(){
		if($this->session->userdata('user_id')!=""){
			$this-> user_ok_login();
		
		}
		else{
		$this->load->model('home_model');
		$this->load->view("home_head.php");
		$this->load->view("login.php");
		$this->load->view("home_foot.php");
		}
		
	}	
	
	//member
	public function user_login(){


		$this->load->library('form_validation');
		$email=$this->input->post('email');
		$password=md5($this->input->post('password'));
		$this->form_validation->set_rules('email', 'Email','required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password','required|trim|callback_checkCredential|callback_check');
		
		
		$result=$this->home_model->login($email,$password);
		
		if ($this->form_validation->run()) 
		{ 	
			/*
			//member
			if($this->session->userdata('user_id')!=""&&$this->session->userdata('user_class')==0&&$this->session->userdata('user_stat')==1){
			
			}
			//admin
			else if($this->session->userdata('user_id')!=""&&$this->session->userdata('user_class')==1&&$this->session->userdata('user_stat')==1){
			
			}
			else{
				$this->index();
			}
			*/
			//member
			if($this->session->userdata('user_id')!=""&&$this->session->userdata('user_class')==0&&$this->session->userdata('user_stat')==1){
				$data['view']=$this->home_model->get_user($email);
				$this->load->model('home_model');
				$this->load->view("memberhome_head.php",$data);
				$this->load->view("home.php");
				$this->load->view("home_foot.php");
			}
			//admin
			else if($this->session->userdata('user_id')!=""&&$this->session->userdata('user_class')==1&&$this->session->userdata('user_stat')==1){
				$data['view']=$this->home_model->get_user($email);
				$this->load->model('home_model');
				$this->load->view("adminhome_head.php",$data);
				$this->load->view("home.php");
				$this->load->view("home_foot.php");
			}
			else{
				$this->index();
			}
			
			
		}
		else        
			$this->login();

		
	}	
	
	
	
	function checkCredential(){
		$this->load->model('model_login');
		if($this->model_login->can_login()){
			return true;
			
		}
		else{
			$this->form_validation->set_message('checkCredential', 'Invalid account');
			return false;
			
		}
	}	
	
	function check(){
		$this->load->model('model_login');
		if($this->model_login->can_stat()){
			return true;
			
		}
		else{
			$this->form_validation->set_message('check', 'Activate your account');
			return false;
			
		}
	}
	
	function user_ok_login(){
	if($this->session->userdata('user_id')!=""){

		
		$this->load->model('home_model');
		$this->load->view("memberhome_head.php");
		$this->load->view("home.php");
		$this->load->view("home_foot.php");}
		else{
			$this->load->model('home_model');
			$this->load->view("home_head.php");
			$this->load->view("home.php");
			$this->load->view("home_foot.php");
	
	}
	}
	
	public function samples(){
	if($this->session->userdata('user_id')!=""){
			
			$this-> user_ok_login();
		}
		else{

		$this->load->model('home_model');
		$data['view']= $this->home_model->get_product_sample();
		$this->load->view("home_head.php");
		$this->load->view("samples.php",$data);
		$this->load->view("home_foot.php");
	}
		
	}
	
	public function tshirt(){
	if($this->session->userdata('user_id')!=""){
			
			$this-> user_ok_login();
		}
		else{

		$this->load->model('home_model');
		$data['view']= $this->home_model->get_product_tshirt();
		$this->load->view("home_head.php");
		$this->load->view("tshirt.php",$data);
		$this->load->view("home_foot.php");

		}
	}
	
	public function collared(){
	if($this->session->userdata('user_id')!=""){
			
			$this-> user_ok_login();
		}
		else{

		$this->load->model('home_model');
		$data['view']= $this->home_model->get_product_collaredshirt();
		$this->load->view("home_head.php");
		$this->load->view("collared.php",$data);
		$this->load->view("home_foot.php");

		}
	}
	
	public function jacket(){
	if($this->session->userdata('user_id')!=""){
			
			$this-> user_ok_login();
		}
		else{
		$this->load->model('home_model');
		$data['view']= $this->home_model->get_product_jackets();
		$this->load->view("home_head.php");
		$this->load->view("jacket.php",$data);
		$this->load->view("home_foot.php");
		}
		
	}	
	
	public function logo(){
	if($this->session->userdata('user_id')!=""){
			
			$this-> user_ok_login();
		}
		else{

		$this->load->model('home_model');
		$data['view']= $this->home_model->get_product_logos();
		$this->load->view("home_head.php");
		$this->load->view("logo.php",$data);
		$this->load->view("home_foot.php");

		}
	}	

	public function register(){
if($this->session->userdata('user_id')!=""){
			
			$this-> user_ok_login();
		}
		else{
		$this->load->model('home_model');
		$this->load->view("home_head.php");
		$this->load->view("register.php");
		$this->load->view("home_foot.php");
}
		
	}	
	
	public function register_valid(){
	if($this->session->userdata('user_id')!=""){
			
			$this-> user_ok_login();
		}
		else{

		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|max_length[50]|regex_match[/^[A-Za-z0-9 .]+$/]');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|max_length[50]|regex_match[/^[A-Za-z0-9 .]+$/]');
		$this->form_validation->set_rules('middle_name', 'Middle Name', 'trim|max_length[50]|regex_match[/^[A-Za-z0-9 .]+$/]');
		$this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[5]|max_length[15]|is_unique[user_tbl.user_username]|regex_match[/^[A-Za-z0-9_]+$/]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|min_length[12]|max_length[40]|is_unique[user_tbl.user_email]|regex_match[/^[A-Za-z0-9.-_]+$/]');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|min_length[7]|max_length[7]|regex_match[/^[0-9]+$/]');
		$this->form_validation->set_rules('mobile_phone', 'Mobile Phone', 'trim|min_length[11]|max_length[11]|regex_match[/^09[0-9]+$/]');
		$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[15]|regex_match[/^[A-Za-z0-9]+$/]');
		$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required|min_length[8]|max_length[15]|regex_match[/^[A-Za-z0-9]+$/]|matches[password]');
		
		
		if($this->form_validation->run() == FALSE){
			$this->register();
		}
		else
		{
			$this->load->model('home_model');
			$this->home_model->register_add();

			$this->load->view("home_head.php");
			$this->load->view("successregister.php");
			$this->load->view("home_foot.php");
		}
		}
	}
	
	public function for_mem(){
	if($this->session->userdata('user_id')!=""){
			
			$this-> user_ok_login();
		}
		else{
		$this->load->model('home_model');
		$this->load->view("home_head.php");
		$this->load->view("for_members.php");
		$this->load->view("home_foot.php");
		}

		
	}

	public function about(){
		if($this->session->userdata('user_id')!=""){
			
			$this-> user_ok_login();
		}
		else{

		$this->load->model('home_model');
		$this->load->view("home_head.php");
		$data['view']=$this->home_model->about_view();
		$this->load->view("about.php",$data);
		$this->load->view("home_foot.php");
}
		
	}

	public function help(){
		if($this->session->userdata('user_id')!=""){
			
			$this-> user_ok_login();
		}
		else{

		$this->load->model('home_model');
		$this->load->view("home_head.php");
		$data['view']=$this->home_model->get_help();
		$this->load->view("help.php",$data);
		$this->load->view("home_foot.php");
		}

		
	}	
	
	public function contact(){
		if($this->session->userdata('user_id')!=""){
			
			$this-> user_ok_login();
		}
		else{

		$this->load->model('home_model');
		$this->load->view("home_head.php");
		$this->load->view("contact-us.php");
		$this->load->view("home_foot.php");
}
		
	}
	
public function contact_valid(){
		if($this->session->userdata('user_id')!=""){
			
			$this-> user_ok_login();
		}
		else{

		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[2]|max_length[50]|regex_match[/^[A-Za-z0-9 .]+$/]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|min_length[12]|max_length[40]|regex_match[/^[A-Za-z0-9.-_]+$/]');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required|min_length[5]|regex_match[/^[A-Za-z0-9 .]+$/]');
		$this->form_validation->set_rules('message', 'Message', 'trim|required|min_length[5]|regex_match[/^[A-Za-z0-9 .!-?]+$/]');
		if($this->form_validation->run() == FALSE){
			$this->contact();
		}
		else
		{
			$this->load->model('home_model');
			$this->home_model->contact_message();
			$this->load->model('home_model');
			
			$name =$this->input->post('name');
			$email = $this->input->post('email');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');
			
			$to = 'maaaaaryelaine@gmail.com'; 
			$email_subject = "Website Contact Form:  $subject";
			$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nSubject: $subject\n\nMessage:\n$message";
			$headers = "From: noreply@printitandgocom\n"; 
			$headers .= "Reply-To: $email";	
			mail($to,$email_subject,$email_body,$headers);
			
			$this->contact_ok();
		}
		}
}
	
	public function contact_ok(){
		if($this->session->userdata('user_id')!=""){
			
			$this-> user_ok_login();
		}
		else{

		$this->load->model('home_model');
		$this->load->view("home_head.php");
		$this->load->view("contact-us-ok.php");
		$this->load->view("home_foot.php");
		}
		
	}

}
?>