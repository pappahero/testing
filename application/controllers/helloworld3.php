<?php  
    class Helloworld3 extends CI_Controller{  
        function index()  
        {  
            $this->load->model('helloworld_model');  
  
            $data['result'] = $this->helloworld_model->getData();  
            $data['page_title'] = "CI Hello World App!";  
  
            $this->load->view('helloworld_view',$data);  
        }  
    }  
?> 
