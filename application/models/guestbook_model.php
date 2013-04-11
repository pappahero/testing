<?php 
// Klassen skriver till och hämtar från databasen

class Guestbook_model extends CI_Model {
 
  public function __construct() {
    $this->load->database();
  }
 
  // Hämtar tabellen posts och returnerar en array av den tabellens 
  // rader kanske
  public function get_posts() {
    $query = $this->db->get('posts');
    return $query->result_array();
  }
 
  // Lägger till värden i tabellen posts
  public function set_posts() {
    $data = array(
      'text' => $this->input->post('text'),
      'author' => $this->input->post('author')
    );
    // kollar förmodligen att $data är säker innan man lägger insertar i 
    // databasen
    $data = $this->security->xss_clean($data);
 
   return $this->db->insert('posts', $data);
  }
 
}
