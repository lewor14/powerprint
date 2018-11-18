<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Member extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
	}
 
	public function index(){
		if($this->session->userdata('user_id')!=""){

			$this->load->model('home_model');
			$this->load->view("memberhome_head.php");
			$this->load->view("home.php");
			$this->load->view("home_foot.php");
		
		}
		else{
			
			$this->load->model('home_model');
			$this->load->view("home_head.php");
			$this->load->view("home.php");
			$this->load->view("home_foot.php");
			
		}

		
	}
	public function about(){
	if($this->session->userdata('user_id')!=""){

		$this->load->model('home_model');
		$this->load->view("memberhome_head.php");
		$data['view']=$this->home_model->about_view();
		$this->load->view("about.php",$data);
		$this->load->view("home_foot.php");
		}
		
		else{
			$this->load->model('home_model');
			$this->load->view("home_head.php");
			$this->load->view("home.php");
			$this->load->view("home_foot.php");
		}

		
	}

	public function account(){
	if($this->session->userdata('user_id')!=""){

		$this->load->model('home_model');
		$id=$this->session->userdata('user_id');
		$data['view']=$this->home_model->get_user_info($id);
		$this->load->view("memberhome_head.php");
		$this->load->view("account.php",$data);
		$this->load->view("home_foot.php");
		
		}
		else{
			$this->load->model('home_model');
			$this->load->view("home_head.php");
			$this->load->view("home.php");
			$this->load->view("home_foot.php");		
		}

		
	}

	public function billing(){
	if($this->session->userdata('user_id')!=""){

		$this->load->model('home_model');
		$id=$this->session->userdata('user_id');
		$data['view']=$this->home_model->get_user_info($id);
		$this->load->view("memberhome_head.php");
		$this->load->view("memberbilling.php",$data);
		$this->load->view("home_foot.php");
		
		
		}
		
		else{
			$this->load->model('home_model');
			$this->load->view("home_head.php");
			$this->load->view("home.php");
			$this->load->view("home_foot.php");		
		}

		
	}	
	public function bill_valid($id){
	if($this->session->userdata('user_id')!=""){

		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('house', 'House', 'trim|required|min_length[2]|max_length[250]|regex_match[/^[A-Za-z0-9 -]+$/]');
		$this->form_validation->set_rules('street', 'Street', 'trim|required|min_length[2]|max_length[250]|regex_match[/^[A-Za-z0-9 -.]+$/]');
		$this->form_validation->set_rules('village', 'Village', 'trim|min_length[2]|max_length[250]|regex_match[/^[A-Za-z0-9 -.]+$/]');
		$this->form_validation->set_rules('barangay', 'Barangay', 'trim|required|min_length[2]|max_length[250]|regex_match[/^[A-Za-z0-9 -.]+$/]');
		$this->form_validation->set_rules('city', 'City', 'trim|required|min_length[2]|max_length[250]|regex_match[/^[A-Za-z0-9 -.]+$/]');
		$this->form_validation->set_rules('region', 'Region', 'trim|min_length[2]|max_length[250]|regex_match[/^[A-Za-z0-9 -.]+$/]');
		$this->form_validation->set_rules('message', 'Message', 'trim|min_length[2]|regex_match[/^[A-Za-z0-9 -.]+$/]');
		
		if($this->form_validation->run() == FALSE){
			$this->load->model('home_model');
			$id=$this->session->userdata('user_id');
			$data['view']=$this->home_model->get_user_info($id);
			$this->load->view("memberhome_head.php");
			$this->load->view("memberbilling_valid.php",$data);
			$this->load->view("home_foot.php");
		}
		else
		{
			$this->load->model('home_model');
			$this->home_model->bill_update($id);
			$this->load->model('home_model');
			$id=$this->session->userdata('user_id');
			$data['view']=$this->home_model->get_user_info($id);
			$this->load->view("memberhome_head.php");
			$this->load->view("memberbilling_ok.php",$data);
			$this->load->view("home_foot.php");
		}
		}
		else{
			$this->load->model('home_model');
			$this->load->view("home_head.php");
			$this->load->view("home.php");
			$this->load->view("home_foot.php");
		}
		
	}	
	
	
	
	public function samples(){
	if($this->session->userdata('user_id')!=""){

		$this->load->model('home_model');
		$data['view']= $this->home_model->get_product_sample();
		$this->load->view("memberhome_head.php");
		$this->load->view("samples.php",$data);
		$this->load->view("home_foot.php");
		
		}
		
		else{
			$this->load->model('home_model');
			$this->load->view("home_head.php");
			$this->load->view("home.php");
			$this->load->view("home_foot.php");		
		}

		
	}
	
	public function tshirt(){
		if($this->session->userdata('user_id')!=""){
		$this->load->model('home_model');
		$data['view']= $this->home_model->get_product_tshirt();
		$this->load->view("memberhome_head.php");
		$this->load->view("membertshirt.php",$data);
		$this->load->view("home_foot.php");
		}
		
		else{
			$this->load->model('home_model');
			$this->load->view("home_head.php");
			$this->load->view("home.php");
			$this->load->view("home_foot.php");		
		}
		
	}
	
	public function collared(){
	
	if($this->session->userdata('user_id')!=""){

		$this->load->model('home_model');
		$data['view']= $this->home_model->get_product_collaredshirt();
		$this->load->view("memberhome_head.php");
		$this->load->view("membercollared.php",$data);
		$this->load->view("home_foot.php");
		
		}else{
			$this->load->model('home_model');
			$this->load->view("home_head.php");
			$this->load->view("home.php");
			$this->load->view("home_foot.php");		
		}

		
	}	
	
	public function add_to_cart($id){
	


		$this->load->model('home_model');
		$data['view']= $this->home_model->get_product_id($id);
		$this->load->view("memberhome_head.php");
		$this->load->view("add_cart_specs.php",$data);
		$this->load->view("home_foot.php");

		
	}	
	function add_to_cart_product(){

		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('product_quan', 'Product Quantity', 'required');
		$this->form_validation->set_rules('product_size', 'Product Size', 'required');
		$this->form_validation->set_rules('product_id', 'Product Id', 'required');
		$this->form_validation->set_rules('member_id', 'Member Id', 'required');
		
		
		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else
		{
			$this->load->model('home_model');
			$this->home_model->add_cart();
			$this->load->model('home_model');
			$this->load->view("memberhome_head.php");
			$this->load->view("addcart_ok.php");
			$this->load->view("home_foot.php");	
			$this->index();
		}

		
	}
	
	public function jacket(){
	if($this->session->userdata('user_id')!=""){

		$this->load->model('home_model');
		$data['view']= $this->home_model->get_product_jackets();
		$this->load->view("memberhome_head.php");
		$this->load->view("memberjacket.php",$data);
		$this->load->view("home_foot.php");
		}
		else{
			$this->load->model('home_model');
			$this->load->view("home_head.php");
			$this->load->view("home.php");
			$this->load->view("home_foot.php");		
		}
		
	}	
	
	public function logo(){
		if($this->session->userdata('user_id')!=""){
		$this->load->model('home_model');
		$data['view']= $this->home_model->get_product_logos();
		$this->load->view("memberhome_head.php");
		$this->load->view("memberlogo.php",$data);
		$this->load->view("home_foot.php");
		
		}
		
		else{
			$this->load->model('home_model');
			$this->load->view("home_head.php");
			$this->load->view("home.php");
			$this->load->view("home_foot.php");		
		}

		
	}	
/*
	public function register(){
		
		$this->load->model('home_model');
		$this->load->view("memberhome_head.php");
		$this->load->view("register.php");
		$this->load->view("home_foot.php");

		
	}	
*/
	

	public function help(){
	if($this->session->userdata('user_id')!=""){

		$this->load->model('home_model');
		$this->load->view("memberhome_head.php");
		$data['view']=$this->home_model->get_help();
		$this->load->view("help.php",$data);
		$this->load->view("home_foot.php");
	}
	else{
	
	}
		
	}	
/*	
	public function contact(){

		$this->load->model('home_model');
		$this->load->view("memberhome_head.php");
		$this->load->view("contact-us.php");
		$this->load->view("home_foot.php");

		
	}
*/	
	public function cart(){
	if($this->session->userdata('user_id')!=""){

		$this->load->model('home_model');
		$data['view']=$this->home_model->view_my_cart();
		$data['view_desc']=$this->home_model->view_my_cart();
		$data['view_prod']=$this->home_model->get_product_samples();
		$this->load->view("memberhome_head.php");
		$this->load->view("cart.php",$data);
		$this->load->view("home_foot.php");
	}
	
	else{
			$this->load->model('home_model');
			$this->load->view("home_head.php");
			$this->load->view("home.php");
			$this->load->view("home_foot.php");
	
	}
		
	}
	
	public function cart_chekout(){
	if($this->session->userdata('user_id')!=""){

		$this->load->model('home_model');
		$data['view']=$this->home_model->view_my_cart();
		$data['view_desc']=$this->home_model->view_my_cart();
		$data['view_prod']=$this->home_model->get_product_samples();
		$this->load->view("memberhome_head.php");
		$this->load->view("cart_chekout.php",$data);
		$this->load->view("home_foot.php");
	}
	
	else{
			$this->load->model('home_model');
			$this->load->view("home_head.php");
			$this->load->view("home.php");
			$this->load->view("home_foot.php");
	
	}
		
	}

	public function checkout(){
	if($this->session->userdata('user_id')!=""){
		$this->load->model('home_model');
		$this->load->view("memberhome_head.php");
		$id=$this->session->userdata('user_id');
		$data['view']=$this->home_model->get_user_info($id);
		$data['view2']=$this->home_model->cart_check();
		
		$this->load->view("checkout.php",$data);
		$this->load->view("home_foot.php");
	}
	else{
	
	}
		
	}

	public function cart_out_valid(){
		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('deposit', 'Deposit Option', 'required');
		$this->form_validation->set_rules('delivery', 'Delivery Option', 'required');
		
		
		
		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else
		{
			//get_user_cart_prod($id);
			//checkout_add($id);
			$id=$this->input->post('id');
			$this->load->model('home_model');
			$this->home_model->checkout_add($id);
			$this->load->view("memberhome_head.php");
			$this->load->view("checkout_ok.php");
			$this->load->view("home_foot.php");
			
		}


	}
		
	public function cart_product_delete($id){
		$this->load->model('home_model');
		$this->home_model->delete_cart_product($id);
		$this->load->view("memberhome_head.php");
		$this->load->view("deletecart_ok.php");
		$this->load->view("home_foot.php");
		$this->index();
	}
		public function cart_order_delete($id){
		$this->load->model('home_model');
		$this->home_model->delete_cart_product($id);
		$this->load->view("memberhome_head.php");
		$this->load->view("deleteorder_ok.php");
		$this->load->view("home_foot.php");
		$this->index();
	}
/*
	public function contact_valid(){

		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[2]|max_length[50]|regex_match[/^[A-Za-z0-9 .]+$/]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|min_length[12]|max_length[40]|regex_match[/^[A-Za-z0-9.-_]+$/]');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required|min_length[5]|max_length[20]|regex_match[/^[A-Za-z0-9 .]+$/]');
		$this->form_validation->set_rules('message', 'Message', 'trim|required|min_length[5]|max_length[140]|regex_match[/^[A-Za-z0-9 .!?]+$/]');
		if($this->form_validation->run() == FALSE){
			$this->contact();
		}
		else
		{
			$this->load->model('home_model');
			$this->home_model->contact_message();
			$this->load->model('home_model');
			$this->contact_ok();
		}
		
	}
	
	public function contact_ok(){

		$this->load->model('home_model');
		$this->load->view("memberhome_head.php");
		$this->load->view("contact-us-ok.php");
		$this->load->view("home_foot.php");

		
	}
*/	
	function logout(){
		$newdata = array(
			'user_id'  => '',
			/*
			'user_fname'  => '',
			'user_mname'  => '',
			'user_lname'  => '',
			'user_username'  => '',
			'user_email'  => '',
			'user_phone'  => '',
			'user_mobile_phone'  => '',
			'user_gender'  => '',
			'user_password'  => '',
			'user_date_joined'  => '',
			'user_stat'  => '',
			*/
			
			'logged_in'  => FALSE,
		);
		
		$this->session->unset_userdata($newdata);
		$this->session->sess_destroy();
		
		
		$this->load->model('home_model');
		$this->load->view("home_head.php");
		$this->load->view("home.php");
		$this->load->view("home_foot.php");
	
	}
	
	
	public function customize(){
		$this->load->model('home_model');
		$this->load->view("memberhome_head.php");
		$data['una']=$this->home_model->customize_getgeneral();
		$this->load->view("customize.php",$data);
		$this->load->view("home_foot.php");
		
	}
	function customize2(){

		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('step1', 'Garment', 'required');
		
		
		
		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else
		{
			$this->load->model('home_model');
			$this->load->view("memberhome_head.php");
			$data['view']=$this->home_model->customize_getfabric();
			$this->load->view("customize2.php",$data);
			$this->load->view("home_foot.php");
		}

		
	}
	
	function customize3(){

		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('step1', 'Garment', 'required');
		$this->form_validation->set_rules('step2', 'Fabric', 'required');
		
		
		
		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else
		{
			$this->load->model('home_model');
			$this->load->view("memberhome_head.php");
			$data['view']=$this->home_model->customize_gettemplate();
			$this->load->view("customize3.php",$data);
			$this->load->view("home_foot.php");
		}

		
	}

	function customize4(){

		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('step1', 'Garment', 'required');
		$this->form_validation->set_rules('step2', 'Fabric', 'required');
		$this->form_validation->set_rules('step3', 'Template', 'required');
		
		
		
		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else
		{	
			
			$this->load->model('home_model');
			$this->load->view("memberhome_head.php");
			$data['view']=$this->home_model->customize_getcolor();
			$data['view2']=$this->home_model->customize_getcolor2();
			$data['view3']=$this->home_model->customize_getcolor3();
			$this->load->view("customize4.php",$data);
			$this->load->view("home_foot.php");
			
		}

		
	}
	function customize5(){

		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('step1', 'Garment', 'required');
		$this->form_validation->set_rules('step2', 'Fabric', 'required');
		$this->form_validation->set_rules('step3', 'Template', 'required');
		
		
		
		
		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else
		{
			if($this->input->post('step1')=='Collared'){
			$this->load->model('home_model');
			$this->load->view("memberhome_head.php");
			$this->load->view("customize5.php");
			$this->load->view("home_foot.php");
			
			}else{
			$this->customize6();
			}
		}

		
	}
	public function customize6(){
		$this->load->model('home_model');
			$data['fabric']=$this->home_model->customize_getfabric();
			$data['template']=$this->home_model->customize_gettemplate();
			$data['color']=$this->home_model->customize_getcolor();
			$this->load->model('home_model');
			$this->load->view("memberhome_head.php");
			$this->load->view('customize6.php',$data);
			$this->load->view("home_foot.php");
	}
	function customize_final(){

		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('step1', 'Garment', 'required');
		$this->form_validation->set_rules('step2', 'Fabric', 'required');
		$this->form_validation->set_rules('step3', 'Template', 'required');
		$this->form_validation->set_rules('step4-1', 'Color', 'required');
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[2]|max_length[50]|regex_match[/^[A-Za-z0-9 .-]+$/]');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[2]|max_length[50]|regex_match[/^[A-Za-z0-9 .-]+$/]');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email|min_length[2]|max_length[50]|regex_match[/^[A-Za-z0-9.-_]+$/]');
		$this->form_validation->set_rules('dead_line', 'Dead Line', 'required|callback_check_date');
		
		

		if($this->form_validation->run() == FALSE){
			$this->load->model('home_model');
			$this->load->view("memberhome_head.php");
			$data['fabric']=$this->home_model->customize_getfabric();
			$data['template']=$this->home_model->customize_gettemplate();
			$data['color']=$this->home_model->customize_getcolor();
			$this->load->view("customize6_f.php",$data);
			$this->load->view("home_foot.php");
			
		}
		else
		{
			$this->load->model('home_model');
			$this->home_model->customize();
			$this->customize_ok();
		
		}

		
	}
	public function check_date($dead_line){
		$date_today=date('Y-m-d');
		if($date_today<$dead_line)
			$response = true;
		else {
			$this->form_validation->set_message('check_date', 'Please Enter a Valid Date');
			$response = false;
		}
		return $response;
		
	}
	
	public function customize_ok(){
		$this->load->view("memberhome_head.php");
		$this->load->view("customize_ok.php");
		$this->load->view("home_foot.php");
	}
	
	public function upload_design(){
		$this->load->view("memberhome_head.php");
		$this->load->view("upload.php");
		$this->load->view("home_foot.php");
	}
	
	public function design_valid(){
		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('image', 'Image', 'required');
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[2]|max_length[50]|regex_match[/^[A-Za-z0-9 .-]+$/]');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[2]|max_length[50]|regex_match[/^[A-Za-z0-9 .-]+$/]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|min_length[2]|max_length[50]|regex_match[/^[A-Za-z0-9.-_]+$/]');
		$this->form_validation->set_rules('notes', 'Notes', 'trim|regex_match[/^[A-Za-z0-9 .-_]+$/]');
		if($this->form_validation->run() == FALSE){
			$this->load->model('home_model');
			$this->load->view("memberhome_head.php");
			$this->load->view('upload_design_info_f.php');
			$this->load->view("home_foot.php");
		}else{
			$this->load->model('home_model');
			$this->home_model->design_upload();
			$this->load->view("memberhome_head.php");
			$this->load->view("design_ok.php");
			$this->load->view("home_foot.php");
		}
	}
	
	
	public function consult(){
		$this->load->model('home_model');
		$this->load->view("memberhome_head.php");
		$this->load->view("consult.php");
		$this->load->view("home_foot.php");
	}
	public function consult_valid(){
		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[2]|max_length[50]|regex_match[/^[A-Za-z0-9 .-]+$/]');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[2]|max_length[50]|regex_match[/^[A-Za-z0-9 .-]+$/]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|min_length[2]|max_length[50]|regex_match[/^[A-Za-z0-9.-_]+$/]');
		$this->form_validation->set_rules('notes', 'Notes', 'trim|regex_match[/^[A-Za-z0-9 .-_]+$/]');
		$this->form_validation->set_rules('date', 'Date', 'trim|required|callback_check_date');
		$this->form_validation->set_rules('time', 'Time', 'trim|required');
		if($this->form_validation->run() == FALSE){
			$this->consult();
		}else{
			$this->load->model('home_model');
			$this->home_model->consult_add();
			$this->consult_ok();
		}
	
	}
	
	public function consult_ok(){
		$this->load->model('home_model');

			$this->load->view("memberhome_head.php");
			$this->load->view("consult_ok.php");
			$this->load->view("home_foot.php");
	}
	public function check_date2($date){
		$date_today=date('Y-m-d');
		if($date_today<$date)
			$response = true;
		else {
			$this->form_validation->set_message('check_date2', 'Please Enter a Valid Date');
			$response = false;
		}
		return $response;
		
	}
	
	public function appointment(){
	$id=$this->session->userdata('user_id');
		$this->load->model('home_model');

			$this->load->view("memberhome_head.php");
			$data['view']=$this->home_model->my_appointment($id);
			$this->load->view("appointment.php",$data);
			$this->load->view("home_foot.php");
	}
	
	public function delete_app_id($id){
		$this->load->model('home_model');
		$this->load->view("memberhome_head.php");
		$this->home_model->delete_app_id($id);
		$this->load->view("delete_ok_appointment_ok.php");
		$this->load->view("home_foot.php");
		
		
	}
}
?>