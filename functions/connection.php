
<?php 
// Wed 30 Dec 2015 11:24:51 AM EST 

class DB {
    
    private static $instance = NULL;
    private function __construct(){}
    private function __clone(){}
    public function getInstance(){
    	  if(!isset(self::$instance)){
             self::$instance = new mysqli('localhost', 'root' , 'password' ,'php_mvc');
      }
        return self::$instance;
    }
 }
?>
