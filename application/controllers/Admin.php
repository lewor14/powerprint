<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
	}
 
	public function index(){

		$this->load->model('home_model');
		$this->load->view("adminhome_head.php");
		$this->load->view("home.php");
		$this->load->view("home_foot.php");

		
	}

	public function account(){

		$this->load->model('home_model');
		$id=$this->session->userdata('user_id');
		$data['view']=$this->home_model->get_user_info($id);
		$this->load->view("adminhome_head.php");
		$this->load->view("adminaccount.php",$data);
		$this->load->view("home_foot.php");

		
	}
	
	public function updateform(){

		$this->load->model('home_model');
		$this->load->view("adminhome_head.php");
		$this->load->view("updateforms.php");
		$this->load->view("home_foot.php");

		
	}	
	
	public function addsamples(){

		$this->load->model('home_model');
		$this->load->view("adminhome_head.php");
		$this->load->view("addsamples.php");
		$this->load->view("home_foot.php");

		
	}	
	
	public function addproduct_valid(){

		$this->load->library('form_validation'); 		
		$this->form_validation->set_rules('product_name', 'Product Name', 'trim|required|min_length[5]|max_length[250]|regex_match[/^[A-Za-z0-9 -]+$/]');
		$this->form_validation->set_rules('product_price', 'Product Price', 'trim|required|min_length[2]|max_length[4]|regex_match[/^[0-9]+$/]');
		$this->form_validation->set_rules('product_type', 'Product Type', 'trim|required|min_length[2]|max_length[250]|regex_match[/^[A-Za-z0-9 -]+$/]');
		$this->form_validation->set_rules('product_code', 'Product Code', 'trim|required|is_unique[product_tbl.product_code]|min_length[2]|max_length[250]|regex_match[/^[A-Za-z0-9 -]+$/]');
		
		if($this->form_validation->run() == FALSE){
			$this->load->model('home_model');
			$this->load->view("adminhome_head.php");
			$this->load->view("addsamples.php");
			$this->load->view("home_foot.php");
		}
		else
		{
		
			$this->load->model('home_model');
			$this->home_model->product_add();
			$this->load->view("adminhome_head.php");
			$this->load->view("addsamples_ok.php");
			$this->load->view("home_foot.php");
		}

		
	}
	
	public function viewsamples(){

		$this->load->model('home_model');
		$data['view']=$this->home_model->get_product_samples();
		$this->load->view("adminhome_head.php");
		$this->load->view("viewsamples.php",$data);
		$this->load->view("home_foot.php");

		
	}
	
	public function vieworders(){

		$this->load->model('home_model');
		$data['view']=$this->home_model->get_product_orders();
		$data['product']=$this->home_model->product_info();
		$this->load->view("adminhome_head.php");
		$this->load->view("vieworders.php",$data);
		$this->load->view("home_foot.php");

		
	}
	
	public function product_search(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('product_type', 'Product Type', 'trim|required');
		
		if($this->form_validation->run() == FALSE){
			$this->viewsamples();
		}
		else
		{
			
			$this->load->model('home_model');
			$this->load->view("adminhome_head.php");
			$data['view']=$this->home_model->product_search();
			$this->load->view("viewsamples_search.php",$data);
			$this->load->view("home_foot.php");
		}
	}
	public function upload_pic($id){

		$this->load->model('home_model');
		$data['view']=$this->home_model->get_product($id);
		$this->load->view("adminhome_head.php");
		$this->load->view("upload_view.php",$data);
		$this->load->view("home_foot.php");

		
	}
	public function updatesamples($id){

		$this->load->model('home_model');
		$this->load->view("adminhome_head.php");
		$data['view']=$this->home_model->get_product($id);
		$this->load->view("updatesamples.php",$data);
		$this->load->view("home_foot.php");

		
	}
	public function updateproduct_valid(){
		$this->load->library('form_validation');
		$id=$this->input->post('id');
		$this->form_validation->set_rules('product_name', 'Product Name', 'trim|required|min_length[5]|max_length[250]|regex_match[/^[A-Za-z0-9 -]+$/]');
		$this->form_validation->set_rules('product_price', 'Product Price', 'trim|required|min_length[2]|max_length[4]|regex_match[/^[0-9]+$/]');
		$this->form_validation->set_rules('product_type', 'Product Type', 'trim|required|min_length[2]|max_length[250]|regex_match[/^[A-Za-z0-9 -]+$/]');
		
		if($this->form_validation->run() == FALSE){
			$this->load->model('home_model');
			$this->load->view("adminhome_head.php");
			$data['view']=$this->home_model->get_product($id);
			$this->load->view("updatesamples_f.php",$data);
			$this->load->view("home_foot.php");
		}
		else
		{
			
			$this->load->model('home_model');
			$this->home_model->updatesamples($id);
			$this->load->view("adminhome_head.php");
			$data['view']=$this->home_model->get_product($id);
			$this->load->view("updatesamples_ok.php",$data);
			$this->load->view("home_foot.php");
		}
	}
	
	public function samples(){

		$this->load->model('home_model');
		$data['view']= $this->home_model->get_product_sample();
		$this->load->view("adminhome_head.php");
		$this->load->view("samples.php",$data);
		$this->load->view("home_foot.php");

		
	}
	
	public function tshirt(){

		$this->load->model('home_model');
		$data['view']= $this->home_model->get_product_tshirt();
		$this->load->view("adminhome_head.php");
		$this->load->view("tshirt.php",$data);
		$this->load->view("home_foot.php");

		
	}
	
	public function collared(){

		$this->load->model('home_model');
		$data['view']= $this->home_model->get_product_collaredshirt();
		$this->load->view("adminhome_head.php");
		$this->load->view("collared.php",$data);
		$this->load->view("home_foot.php");

		
	}
	
	public function jacket(){

		$this->load->model('home_model');
		$data['view']= $this->home_model->get_product_jackets();
		$this->load->view("adminhome_head.php");
		$this->load->view("jacket.php",$data);
		$this->load->view("home_foot.php");

		
	}	
	
	public function logo(){

		$this->load->model('home_model');
		$data['view']= $this->home_model->get_product_logos();
		$this->load->view("adminhome_head.php");
		$this->load->view("logo.php",$data);
		$this->load->view("home_foot.php");

		
	}	

	public function register(){

		$this->load->model('home_model');
		$this->load->view("adminhome_head.php");
		$this->load->view("register.php");
		$this->load->view("home_foot.php");

		
	}	

	public function about(){

		$this->load->model('home_model');
		$this->load->view("adminhome_head.php");
		$data['view']=$this->home_model->about_view();
		$this->load->view("adminabout.php",$data);
		$this->load->view("home_foot.php");

		
	}
	
	public function about_valid(){

		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('message', 'Message', 'trim|required|min_length[10]|max_length[1000]|regex_match[/^[A-Za-z0-9 .!?&-:,]+$/]');
		
		if($this->form_validation->run() == FALSE){
			$this->about_valid_error();
		}
		else
		{
			$this->load->model('home_model');
			$this->home_model->admin_desc_update();
			$this->about_ok();
		}

		
	}	
	public function about_valid_error(){

		$this->load->model('home_model');
		$this->load->view("adminhome_head.php");
		$data['view']=$this->home_model->about_view();
		$this->load->view("adminabout2.php",$data);
		$this->load->view("home_foot.php");

		
	}
	
	public function about_ok(){

		$this->load->model('home_model');
		$this->load->view("adminhome_head.php");
		$data['view']=$this->home_model->about_view();
		$this->load->view("adminabout_ok.php",$data);
		$this->load->view("home_foot.php");

		
	}


		
	

	public function help(){

		$this->load->model('home_model');
		$this->load->view("adminhome_head.php");
		$data['view']=$this->home_model->get_help();
		$data['view2']=$this->home_model->get_help();
		$this->load->view("adminhelp.php",$data);
		$this->load->view("home_foot.php");

		
	}	
	
	public function updatehelp($id){

		$this->load->model('home_model');
		$this->load->view("adminhome_head.php");
		$data['view']=$this->home_model->get_help_id($id);
		$data['about']=$this->home_model->get_help_id($id);
		$this->load->view("adminhelp_edit.php",$data);
		$this->load->view("home_foot.php");

		
	}	
	public function help_valid(){
		
		$id=$this->input->post('id');
		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('message', 'Message', 'trim|required|min_length[10]|max_length[1000]|regex_match[/^[A-Za-z0-9 .!?&-:,]+$/]');
		
		if($this->form_validation->run() == FALSE){
			$this->load->model('home_model');
			$this->load->view("adminhome_head.php");
			$data['view']=$this->home_model->get_help_id($id);
			$data['about']=$this->home_model->get_help_id($id);
			$this->load->view("adminhelp_edit_valid.php",$data);
			$this->load->view("home_foot.php");
		}
		else
		{
		
			$this->load->model('home_model');
			$this->home_model->help_update($id);
			$this->load->view("adminhome_head.php");
			$data['view']=$this->home_model->get_help_id($id);
			$data['about']=$this->home_model->get_help_id($id);
			$this->load->view("adminhelp_ok.php",$data);
			$this->load->view("home_foot.php");
		}

		
	}	
	public function contact(){

		$this->load->model('home_model');
		$this->load->view("adminhome_head.php");
		$this->load->view("admincontact.php");
		$this->load->view("home_foot.php");

		
	}
	
	public function cart(){

		$this->load->model('home_model');
		$this->load->view("adminhome_head.php");
		$this->load->view("cart.php");
		$this->load->view("home_foot.php");

		
	}

	public function checkout(){

		$this->load->model('home_model');
		$this->load->view("adminhome_head.php");
		$this->load->view("checkout.php");
		$this->load->view("home_foot.php");

		
	}	
	
	public function contact_valid(){

		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[2]|max_length[50]|regex_match[/^[A-Za-z0-9 .]+$/]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|min_length[12]|max_length[40]|regex_match[/^[A-Za-z0-9.-_]+$/]');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required|min_length[5]|max_length[20]|regex_match[/^[A-Za-z0-9 .]+$/]');
		$this->form_validation->set_rules('message', 'Message', 'trim|required|min_length[5]|regex_match[/^[A-Za-z0-9 .!-?]+$/]');
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
		$this->load->view("adminhome_head.php");
		$this->load->view("contact-us-ok.php");
		$this->load->view("home_foot.php");

		
		
	}	
	
	public function delete_product($id){
		
		$this->load->model('home_model');
		$this->home_model->deleteproduct($id);
	
		$data['view']=$this->home_model->get_product_samples();
		$this->load->view("adminhome_head.php");
		$this->load->view("viewsamples_ok.php",$data);
		$this->load->view("home_foot.php");

		
	}
	public function delete_order($id){
		
		$this->load->model('home_model');
		$this->home_model->deleteorder($id);
		$this->load->view("adminhome_head.php");
		$this->load->view("viewdeleteorder_ok.php");
		$this->load->view("home_foot.php");

		
	}
	
	public function useraccounts(){
		
		$this->load->model('home_model');
		$data['view']=$this->home_model->get_user_accounts();
		$this->load->view("adminhome_head.php");
		$this->load->view("viewaccounts.php",$data);
		$this->load->view("home_foot.php");

		
	}
	
	public function user_account_to_activate($id){
		
		$this->load->model('home_model');
		$this->home_model->user_activate($id);
		$this->load->view("adminhome_head.php");
		$this->load->view("viewaccounts_ok.php");
		$this->load->view("home_foot.php");
	}	
	
	public function user_account_to_deactivate($id){
		
		$this->load->model('home_model');
		$this->home_model->user_deactivate($id);
		$this->load->view("adminhome_head.php");
		$this->load->view("viewaccounts_ok.php");
		$this->load->view("home_foot.php");
	}

	public function user_account_to_admin($id){
		
		$this->load->model('home_model');
		$this->home_model->user_admin($id);
		$this->load->view("adminhome_head.php");
		$this->load->view("viewaccounts_ok.php");
		$this->load->view("home_foot.php");
	}

	public function user_account_to_customer($id){
		
		$this->load->model('home_model');
		$this->home_model->user_customer($id);
		$this->load->view("adminhome_head.php");
		$this->load->view("viewaccounts_ok.php");
		$this->load->view("home_foot.php");
	}

	public function vieworder_info($id){
		
		$this->load->model('home_model');
		
		$data['view']=$this->home_model->cart_info($id);
		$data['user']=$this->home_model->user_info();
		$data['product']=$this->home_model->product_info();
		$this->load->view("adminhome_head.php");
		$this->load->view("vieworder_id.php",$data);
		$this->load->view("home_foot.php");
	}
	function logout(){
		$newdata = array(
			'user_id'  => '',
			'logged_in'  => FALSE,
		);
		
		$this->session->unset_userdata($newdata);
		$this->session->sess_destroy();
		
		
		$this->load->model('home_model');
		$this->load->view("home_head.php");
		$this->load->view("home.php");
		$this->load->view("home_foot.php");
	
	}	
	
	function order_track(){
		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('id', 'Id', 'required');
		$this->form_validation->set_rules('track', 'Track', 'required');
		
		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else
		{
			$this->load->model('home_model');
			$this->home_model->order_track_update();
			
			
			
			$this->load->view("adminhome_head.php");
			$this->load->view('track_ok.php');
			$this->load->view("home_foot.php");
			
		}
	}

	
	public function view_uploaddesign(){
		$this->load->model('home_model');
		$this->load->view("adminhome_head.php");
		$data['view']=$this->home_model->view_customize();
		$this->load->view('adminview_upload2.php',$data);
		$this->load->view("home_foot.php");
	}
	public function delete_upload(){
		$this->load->model('home_model');
		$this->load->view("adminhome_head.php");
		$this->home_model->delete_upload();
		$this->load->view('delete_upload_ok.php');
		$this->load->view("home_foot.php");
	
	}
	public function delete_upload_id($id){
		$this->load->model('home_model');
		$this->load->view("adminhome_head.php");
		$this->home_model->delete_upload_id($id);
		$this->load->view('delete_upload_ok.php');
		$this->load->view("home_foot.php");
	
	}
	public function view_uploaddesign_id($id){
		$this->load->model('home_model');
		$this->load->view("adminhome_head.php");
		$data['view']=$this->home_model->view_customize($id);
		$this->load->view('adminview_uploaddesign_id2.php',$data);
		$this->load->view("home_foot.php");
	}
	public function view_customize(){
		$this->load->model('home_model');
		$this->load->view("adminhome_head.php");
		$data['view']=$this->home_model->view_uploaddesign();
		$this->load->view('adminview_uploaddesign.php',$data);
		$this->load->view("home_foot.php");
	}
	
		public function delete_customize(){
		$this->load->model('home_model');
		$this->load->view("adminhome_head.php");
		$this->home_model->delete_customize();
		$this->load->view('delete_customize_ok.php');
		$this->load->view("home_foot.php");
	
	}
	public function delete_customize_id($id){
		$this->load->model('home_model');
		$this->load->view("adminhome_head.php");
		$this->home_model->delete_customize_id($id);
		$this->load->view('delete_customize_ok.php');
		$this->load->view("home_foot.php");
	
	}
	public function view_customize_id($id){
		$this->load->model('home_model');
		$this->load->view("adminhome_head.php");
		$data['view']=$this->home_model->view_uploaddesign_id($id);
		$data['fabricview']=$this->home_model->customize_getfabric();
		$data['templateview']=$this->home_model->customize_gettemplate();
		$data['colorview']=$this->home_model->customize_getcolor();
		$data['colorview2']=$this->home_model->customize_getcolor2();
		$data['colorview3']=$this->home_model->customize_getcolor3();
		$this->load->view('adminview_uploaddesign_id.php',$data);
		$this->load->view("home_foot.php");
	}
	public function view_appointment_id($id){
		$this->load->model('home_model');
		$this->load->view("adminhome_head.php");
		$data['view']=$this->home_model->view_appointment_id($id);
		$this->load->view('adminview_appointment_id.php',$data);
		$this->load->view("home_foot.php");
	}
	
	public function view_consultation(){
	//
		$this->load->model('home_model');
		$this->load->view("adminhome_head.php");
		$data['view']=$this->home_model->view_consultation_admin();
		$this->load->view('adminview_consultation.php',$data);
		$this->load->view("home_foot.php");
	}
	
	public function appointment_status(){
		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('id', 'Id', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		
		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else
		{
			$this->load->model('home_model');
			$this->home_model->status_update();
			$this->load->view("adminhome_head.php");
			$this->load->view('status_ok.php');
			$this->load->view("home_foot.php");
			
		}
	}
}
?>