<?php
session_start();
 
class HelloWorld_Model extends CI_Model {
	 
    function Helloworld_model()  
    {  
        // Call the Model constructor  
        parent::Model();  
    }  
      
    function getData()  
        {  
            //Query the data table for every record and row  
            $query = $this->db->get('data');  
              
            if ($query->num_rows() > 0)  
            {  
                //show_error('Database is empty!');  
            }else{  
                return $query->result();  
            }  
        }  
	
	
 /* // spara variabelvärde i en sessions-variabel som den metoden får från 
  // controllern
  function save($arg1) {
    $_SESSION['var1'] = $arg1;
  }
 
  // Returnerar information om vad som finns i sessionsvariabeln som tidigare
  // sparats
  function load() {
    return empty($_SESSION['var1']) ? 'default value' : $_SESSION['var1'];
  } */
 
}
