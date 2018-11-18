<?php
class Uploadfile extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    //index function
    function index()
    {
       
    }

    //file upload function
    function upload()
    {

		$id=$this->input->post('id');
		$product_name= $this->input->post('product_name');
		$product_img= $this->input->post('product_img');
		$product_category= $this->input->post('product_category');
		$product_price= $this->input->post('product_price');
		$product_information= $this->input->post('product_information');
		
		
        //set preferences
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        //$config['max_size']    = '100';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('filename'))
        {
            
            $upload_error = array('error' => $this->upload->display_errors(), 'id'=>$id, 'product_name'=>$product_name,'product_img'=>$product_img,'product_category'=>$product_category,'product_price'=>$product_price,'product_information'=>$product_information);
			
			$this->load->view("adminhome_head.php");
			$this->load->view('upload_view_ee', $upload_error);
			$this->load->view("home_foot.php");
			
        }
        else
        {
            
            $upload_data = $this->upload->data();
			
            $data['success_msg'] = '<div class="alert alert-success text-center">Your file <strong>' . $upload_data['file_name'] . '</strong> was successfully uploaded!</div>';
			
			$image_name=$upload_data['file_name'];
			
			$this->load->model('home_model');
			$this->home_model->upload($image_name,$id);
			$this->upload_pic($this->input->post('id'));
        }
    }
	public function upload_pic($id){

		$this->load->model('home_model');
		$data['view']=$this->home_model->get_product($id);
		$this->load->view("adminhome_head.php");
		$this->load->view("upload_view_ok.php",$data);
		$this->load->view("home_foot.php");

		
	}
	
}
?>