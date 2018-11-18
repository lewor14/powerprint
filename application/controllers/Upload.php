<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('upload_form', array('error' => ' ' ));
        }

      function upload()
    {
		
        //set preferences
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
		$returnArr = array(); 
        //$config['max_size']    = '100';

        //load upload class library
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('filename'))
        {
            // case - failure
			
            $upload_error = array('error' => $this->upload->display_errors());
			$this->load->model('home_model');
			$this->load->view("memberhome_head.php");
			$this->load->view('customize5.php', $upload_error);
			$this->load->view("home_foot.php");
	
			
        }
        else
        {
            
            $upload_data = $this->upload->data();
			
            $data['success_msg'] = '<div class="alert alert-success text-center">Your file <strong>' . $upload_data['file_name'] . '</strong> was successfully uploaded!</div>';
			
			$image_name=$upload_data['file_name'];
			
			$data = array('image' => $image_name);
			$this->load->model('home_model');
			$data['fabric']=$this->home_model->customize_getfabric();
			$data['template']=$this->home_model->customize_gettemplate();
			$data['color']=$this->home_model->customize_getcolor();
			$this->load->model('home_model');
			$this->load->view("memberhome_head.php");
			$this->load->view('customize6.php',$data);
			$this->load->view("home_foot.php");
			//$this->emp_model->upload($image_name);
			
        }
    }
	
	      function uploaddesign()
    {
		
        //set preferences
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
		$returnArr = array(); 
        //$config['max_size']    = '100';

        //load upload class library
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('filename'))
        {
            // case - failure
			
            $upload_error = array('error' => $this->upload->display_errors());
			$this->load->model('home_model');
			$this->load->view("memberhome_head.php");
			$this->load->view('upload.php', $upload_error);
			$this->load->view("home_foot.php");
	
			
        }
        else
        {
            
            $upload_data = $this->upload->data();
			
            $data['success_msg'] = '<div class="alert alert-success text-center">Your file <strong>' . $upload_data['file_name'] . '</strong> was successfully uploaded!</div>';
			
			$image_name=$upload_data['file_name'];
			
			$data = array('image' => $image_name);
			$this->load->model('home_model');
			$this->load->view("memberhome_head.php");
			$this->load->view('upload_design_info.php',$data);
			$this->load->view("home_foot.php");
			//$this->emp_model->upload($image_name);
			
        }
    }
	
}
?>