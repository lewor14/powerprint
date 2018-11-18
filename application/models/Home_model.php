<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function contact_message(){
		$data=array(
			'contact_name'=>$this->input->post('name'),
			'contact_email'=>$this->input->post('email'),
			'contact_subject'=>$this->input->post('subject'),
			'contact_message'=>$this->input->post('message'),
			
    
		);
  
		$this->db->insert('contact_tbl',$data);
	
	}
	
	public function register_add(){
		$data=array(
			'user_fname'=>$this->input->post('first_name'),
			'user_lname'=>$this->input->post('last_name'),
			'user_mname'=>$this->input->post('middle_name'),
			'user_username'=>$this->input->post('user_name'),
			'user_email'=>$this->input->post('email'),
			'user_phone'=>$this->input->post('phone'),
			'user_mobile_phone'=>$this->input->post('mobile_phone'),
			'user_gender'=>$this->input->post('gender'),
			'user_password'=>md5($this->input->post('password')),
			
			
    
		);
  
		$this->db->insert('user_tbl',$data);
	
	}
	
	public function about_view(){
		$this->db->select('*');
		$this->db->from('about_tbl');
		$query = $this->db->get();
		return $query->result_array();
	
	}
	public function admin_desc_update(){
		$id='1';
		$data=array(
			'about_description'=>$this->input->post('message'),

		);
		$this->db->where('about_id',$id);
		$this->db->update('about_tbl',$data);
		
	
	}
	
	function login($email,$password){
		$this->db->where("user_email",$email);
		$this->db->where("user_password",$password);
		$this->db->where("user_stat",1);
		$query=$this->db->get("user_tbl");
		
		if($query->num_rows()>0){
			foreach($query->result() as $rows){
			//add all data to session
				$newdata = array(
					'user_id'  => $rows->user_id,
					'user_class'  => $rows->user_class,
					'user_stat'  => $rows->user_stat,
					'logged_in'  => TRUE,
				);
			}
			
			$this->session->set_userdata($newdata);
			return true;
		}
		
		return false;
	}
	function get_user($email){
		$this->db->select('*');
		$this->db->from('user_tbl');
		$this->db->where("user_email",$email);
		$query = $this->db->get();
		return $query->result_array();
		
	}
	
	function get_user_info($id){
		$this->db->select('*');
		$this->db->from('user_tbl');
		$this->db->where("user_id",$id);
		$query = $this->db->get();
		return $query->result_array();
		
	}
	
	function get_user_product($id){
		$this->db->select('*');
		$this->db->from('product_tbl');
		$this->db->where("product_id",$id);
		$query = $this->db->get();
		return $query->result_array();
		
	}
	
	function get_user_cart_prod(){
		$id=$this->input->post('id');
		$this->db->select('*');
		$this->db->from('cart_tbl');
		$this->db->where("cart_user_id",$id);
		$query = $this->db->get();
		return $query->result_array();
		
	}
	
	function bill_update($id){
		$data=array(
			'user_house'=>$this->input->post('house'),
			'user_street'=>$this->input->post('street'),
			'user_village'=>$this->input->post('village'),
			'user_barangay'=>$this->input->post('barangay'),
			'user_city'=>$this->input->post('city'),
			'user_region'=>$this->input->post('region'),
			'user_ship_notes'=>$this->input->post('message'),

		);
		$this->db->where('user_id',$id);
		$this->db->update('user_tbl',$data);
		
	}
	
	public function product_add(){
		$data=array(
			'product_name'=>$this->input->post('product_name'),
			'product_price'=>$this->input->post('product_price'),
			'product_category'=>$this->input->post('product_type'),
			'product_code'=>$this->input->post('product_code'),

		);
  
		$this->db->insert('product_tbl',$data);
	
	}
	
	function get_product_samples(){
		$this->db->select('*');
		$this->db->from('product_tbl');

		$query = $this->db->get();
		return $query->result_array();
		
	}
	
	public function upload($image_name,$id){
	
		$data=array(
			'product_img'=>$image_name,
			
		);
		
		$this->db->where("product_id",$id);
		$this->db->update('product_tbl',$data);
	}
	
	function get_product($id){
		$this->db->select('*');
		$this->db->from('product_tbl');
		$this->db->where('product_id',$id);

		$query = $this->db->get();
		return $query->result_array();
		
	}
	
	function updatesamples($id){
		$data=array(
			'product_name'=>$this->input->post('product_name'),
			'product_price'=>$this->input->post('product_price'),
			'product_category'=>$this->input->post('product_type'),

		);
		$this->db->where('product_id',$id);
		$this->db->update('product_tbl',$data);
	}
	
	function deleteproduct($id){
		$this->db->where('product_id',$id);
		$this->db->delete('product_tbl');
		$this->db->where('cart_product_id',$id);
		$this->db->delete('cart_tbl');
	
	}

	function deleteorder($id){

		$this->db->where('cart_id',$id);
		$this->db->delete('cart_tbl');
	
	}
	
	function get_product_sample(){
		$this->db->select('*');
		$this->db->from('product_tbl');
		$this->db->where('product_category','General');

		$query = $this->db->get();
		return $query->result_array();
		
	}		
	function get_product_tshirt(){
		$this->db->select('*');
		$this->db->from('product_tbl');
		$this->db->where('product_category','T-Shirt');

		$query = $this->db->get();
		return $query->result_array();
		
	}		
	function get_product_collaredshirt(){
		$this->db->select('*');
		$this->db->from('product_tbl');
		$this->db->where('product_category','Collared Shirt');

		$query = $this->db->get();
		return $query->result_array();
		
	}	
	function get_product_jackets(){
		$this->db->select('*');
		$this->db->from('product_tbl');
		$this->db->where('product_category','Jackets');

		$query = $this->db->get();
		return $query->result_array();
		
	}		
	function get_product_logos(){
		$this->db->select('*');
		$this->db->from('product_tbl');
		$this->db->where('product_category','Logos');

		$query = $this->db->get();
		return $query->result_array();
		
	}

	function product_search(){
		$product_category=$this->input->post('product_type');
		$this->db->select('*');
		$this->db->from('product_tbl');
		if($product_category!='*'){
			$this->db->where('product_category',$product_category);
			
		}
		$query = $this->db->get();
		return $query->result_array();
	
	}
	function get_help(){
		$this->db->select('*');
		$this->db->from('help_tbl');
		

		$query = $this->db->get();
		return $query->result_array();
		
	}	
	function get_help_id($id){
		$this->db->select('*');
		$this->db->from('help_tbl');
		$this->db->where('help_id',$id);
		

		$query = $this->db->get();
		return $query->result_array();
		
	}
		function help_update($id){
		$data=array(
			'help_message'=>$this->input->post('message'),
			

		);
		$this->db->where('help_id',$id);
		$this->db->update('help_tbl',$data);
		
	}
	
	function get_product_id($id){
		$this->db->select('*');
		$this->db->from('product_tbl');
		$this->db->where('product_id',$id);

		$query = $this->db->get();
		return $query->result_array();
		
	}
	
	function add_cart(){
		$data=array(
			'cart_user_id'=>$this->input->post('member_id'),
			'cart_product_id'=>$this->input->post('product_id'),
			'cart_product_size'=>$this->input->post('product_size'),
			'cart_product_quantity'=>$this->input->post('product_quan'),

		);
  
		$this->db->insert('cart_tbl',$data);
	
	}	
	
	function view_my_cart(){
		$id=$this->session->userdata('user_id');
		$this->db->select('*');
		$this->db->from('cart_tbl');
		$this->db->where('cart_user_id',$id);

		$query = $this->db->get();
		return $query->result_array();
	
	}
	
	function get_user_accounts(){
		$this->db->select('*');
		$this->db->from('user_tbl');

		$query = $this->db->get();
		return $query->result_array();
	
	}
	
	function user_activate($id){
		$data=array(
			'user_stat'=>1,

		);
		$this->db->where('user_id',$id);
		$this->db->update('user_tbl',$data);
	
	}
	
	function user_deactivate($id){
		$data=array(
			'user_stat'=>0,

		);
		$this->db->where('user_id',$id);
		$this->db->update('user_tbl',$data);
	
	}
	function user_admin($id){
		$data=array(
			'user_class'=>1,

		);
		$this->db->where('user_id',$id);
		$this->db->update('user_tbl',$data);
	
	}
	function user_customer($id){
		$data=array(
			'user_class'=>0,

		);
		$this->db->where('user_id',$id);
		$this->db->update('user_tbl',$data);
	
	}	
	
	function delete_cart_product($id){
		$this->db->where('cart_id',$id);
		$this->db->delete('cart_tbl');
		
	
	}
		
	function checkout_add(){
		/*
		
		$this->db->select('*');
		$this->db->from('cart_tbl');
		$this->db->where("cart_user_id",$id);
		$query = $this->db->get()->result_array();
		
		*/
		$id=$this->input->post('id');
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$house=$this->input->post('house');
		$street=$this->input->post('street');
		$barangay=$this->input->post('barangay');
		$city=$this->input->post('city');
		$region=$this->input->post('region');
				
		$village=$this->input->post('village');
		$deposit=$this->input->post('deposit');
		$delivery=$this->input->post('delivery');
		
		
		
		$data=array(
			'cart_status_checkout'=>1,
			'cart_checkout_payment_mode'=>$deposit,
			'cart_checkout_delivery'=>$delivery,
			'cart_checkout_fname'=>$fname,
			'cart_checkout_lname'=>$lname,
			'cart_checkout_house'=>$house,
			'cart_checkout_street'=>$street,
			'cart_checkout_barangay'=>$barangay,
			'cart_checkout_city'=>$city,
			'cart_checkout_region'=>$region,
			'cart_checkout_village'=>$village,

			

		);
		/*
		foreach ($query as $query)
		{
			$id=$query['cart_product_id'];
			
		}*/
		$this->db->where('cart_user_id',$id);
		$this->db->where('cart_status_checkout !=',1);
		$this->db->update('cart_tbl',$data);
		
		//add ko na laht
	}	
	
	public function get_product_orders(){
		$this->db->select('*');
		$this->db->from('cart_tbl');
		$this->db->where('cart_status_checkout',1);
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function cart_info($id){
		$this->db->select('*');
		$this->db->from('cart_tbl');
		$this->db->where('cart_id',$id);
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function user_info(){
		$this->db->select('*');
		$this->db->from('user_tbl');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function product_info(){
		$this->db->select('*');
		$this->db->from('product_tbl');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	//customize
	
	public function customize_getgeneral(){
		$this->db->select('*');
		$this->db->from('product_tbl');
		$this->db->where('product_category','General');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function customize_getfabric(){
		$this->db->select('*');
		$this->db->from('fabric_tbl');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function customize_gettemplate(){
		$this->db->select('*');
		$this->db->from('template_tbl');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function customize_getcolor(){
		$this->db->select('*');
		$this->db->from('color_tbl');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function customize_getcolor2(){
		$this->db->select('*');
		$this->db->from('color_tbl');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function customize_getcolor3(){
		$this->db->select('*');
		$this->db->from('color_tbl');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function customize(){
		$data=array(
			'customize_garment'=>$this->input->post('step1'),
			'customize_fabric'=>$this->input->post('step2'),
			'customize_template'=>$this->input->post('step3'),
			'customize_color1'=>$this->input->post('step4-1'),
			'customize_color2'=>$this->input->post('step4-2'),
			'customize_color3'=>$this->input->post('step4-3'),
			'customize_image'=>$this->input->post('step5'),
			'customize_first_name'=>$this->input->post('first_name'),
			'customize_last_name'=>$this->input->post('last_name'),
			'customize_email_address'=>$this->input->post('email_address'),
			'customize_dead_line'=>$this->input->post('dead_line'),
			'customize_notes'=>$this->input->post('notes'),

		);
  
		$this->db->insert('customize_tbl',$data);
	
	}
	
	
	public function cart_check(){
		$this->db->select('*');
		$this->db->from('cart_tbl');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function order_track_update(){
		$id=$this->input->post('id');
		$track=$this->input->post('track');
		$data=array(

			'cart_status_tracking'=>$track,

		);

		$this->db->where('cart_id',$id);
		$this->db->update('cart_tbl',$data);
	}
	public function design_upload(){
		$data=array(
			'upload_image'=>$this->input->post('image'),
			'upload_first_name'=>$this->input->post('first_name'),
			'upload_last_name'=>$this->input->post('last_name'),
			'upload_email'=>$this->input->post('email'),
			'upload_notes'=>$this->input->post('notes'),


		);
  
		$this->db->insert('upload_tbl',$data);
			
	}
	public function view_uploaddesign(){
		$this->db->select('*');
		$this->db->from('customize_tbl');
		$query = $this->db->get();
		return $query->result_array();
	}	
	public function view_uploaddesign_id($id){
		$this->db->select('*');
		$this->db->from('customize_tbl');
		$this->db->where('cutomize_id',$id);
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function view_customize(){
		$this->db->select('*');
		$this->db->from('upload_tbl');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function view_consultation(){
		$this->db->select('*');
		$this->db->from('cart_tbl');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function consult_add(){
		$data=array(
			'appointment_fname'=>$this->input->post('first_name'),
			'appointment_lname'=>$this->input->post('last_name'),
			'appointment_email'=>$this->input->post('email'),
			'appointment_notes'=>$this->input->post('notes'),
			'appointment_date'=>$this->input->post('date'),
			'appointment_time'=>$this->input->post('time'),
			'appointment_account_id'=>$this->input->post('id'),


		);
  
		$this->db->insert('appointment_tbl',$data);
			
	}
	
	public function my_appointment($id){
		$this->db->select('*');
		$this->db->from('appointment_tbl');
		$this->db->where('appointment_account_id',$id);
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function view_consultation_admin(){
		$this->db->select('*');
		$this->db->from('appointment_tbl');
	
		$query = $this->db->get();
		return $query->result_array();
	}	
	public function view_appointment_id($id){
		$this->db->select('*');
		$this->db->from('appointment_tbl');
		$this->db->where('appointment_id',$id);
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function status_update(){
		$id=$this->input->post('id');
		$status=$this->input->post('status');
		$data=array(
			'appointment_stat'=>$status,

			

		);
	
		$this->db->where('appointment_id',$id);
		$this->db->update('appointment_tbl',$data);
	}
	
	function delete_app_id($id){
		$this->db->where('appointment_id',$id);
		$this->db->delete('appointment_tbl');
		
	}
	function delete_upload(){
		$this->db->empty_table('upload_tbl'); 

	}
	function delete_upload_id($id){
		$this->db->where('upload_id',$id);
		$this->db->delete('upload_tbl');
		
	}
	function delete_customize(){
		$this->db->empty_table('customize_tbl'); 

	}
	function delete_customize_id($id){
		$this->db->where('cutomize_id',$id);
		$this->db->delete('customize_tbl');
		
	}
}
 ?>
 