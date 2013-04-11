<?php 
 
class HelloWorld2 extends CI_Controller {
 
  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    // laddar detta för att kunna achors(interna länkar) i vår view
    
    $this->load->model('helloworld_model', 'model');
    // ladda modellen här så vi inte behöver ladda den i varje individuell 
    // function
  }
 
  // laddar data för att visa i view
  public function index() {
    $data['var1'] = $this->model->load();
    $this->load->view('view_hello_world2', $data);
  }
 
  // Metod som sparar data i modellen och anropar index-functionen
  public function save($var1) {
    $this->model->save($var1);
    $this->index();
  }
 
}
