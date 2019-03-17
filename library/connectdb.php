<?php


class Connection
{



   public  $cn;
   public  $servername="localhost";
   public  $username="root";
   public  $pass="";
   public  $db_name="emedicare";


   public function __construct() 
   {

          $this->cn=new mysqli($this->servername,$this->username,$this->pass,$this->db_name);

           if ( !$this->cn->connect_error)
           {
                //die('Error');
                // Are you sure the access info is correct ? you mean cdb connection? Yes . yes i was working with it
                // Why error now ?
                // Ops you chnged something
           }
           

           // wait 
           // let me tel
           // may i complete?
          // Sute


   }

}



 



?>