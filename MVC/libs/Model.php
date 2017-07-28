<?php 

class Model
{ 
   public function __construct()
   {

   }
   	
	public function getArray()
   {	    
		return array('%TITLE%'=>'Contact Form', '%ERRORS%'=>'Empty field');	
   }
	
	public function checkForm()
	{
		return true;			
	}
   
	public function sendEmail()
	{
      //testiruyyy///   
        
        echo "EMAIL";
        mail($_POST['email'], $_POST['subject'], $_POST['message']);
        
        
        // return mail()
	}		
}
