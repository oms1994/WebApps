<?php
class Store_controller extends CI_Controller 
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$this->load->library('form_validation');


		if(isset($_GET["pagename"]))
		{
								$this->load->helper('url');
								$this->load->view('header');
								$this->load->view('Navigation');

									
				switch ($_GET["pagename"]) 

				{
							case 'AboutUs':
									
									$this->load->view('AboutUs_Content');
									
								break;
							
							case 'ContactUs':
									
									$this->load->helper(array('form', 'url'));

               						 $this->load->library('form_validation');

               						 if ($this->cformvalidation() == FALSE)
               						 {
                								
                      						  $this->load->view('ContactUs_content');
               						 }
               						 else
               						 {
               						 	$this->load->model('PetStoreDbmod');
               						 	$this->PetStoreDbmod->insert_data();
               						 	$this->load->view('ContactUs_content');
               						 	echo "<script>
										alert('Thankyou will get back to you soon'); // Javascript
											</script>";


               						 }
									
											
					
								break;
							case 'Client':

									$this->load->helper(array('form', 'url'));
									 $this->load->library('form_validation');
								
               						 if ($this->formvalidation() == FALSE)
               						 {
                								
                      						  $this->load->view('Client');
               						 }	
               						 else
               						 {
               						 	$this->load->model('PetStoreDbmod');
               						 	$this->PetStoreDbmod->insert_data_client();
               						 	$this->load->view('Client');
               						 	 echo "<script>
								alert('We will get back to yoy soon!'); // Javascript
								</script>";
               						 	

               						 
               						 }

								break;

							case 'Service':	
										$this->load->helper(array('form', 'url'));
									 $this->load->library('form_validation');
									
               						 if ($this->formvalidation() == FALSE)
               						 {
                								
                      						  $this->load->view('Service');
               						 }	
               						 else
               						 {
               						 	$this->load->model('PetStoreDbmod');

               						 	$this->PetStoreDbmod->insert_data_service();
               						 	echo "<script>
								alert('We will get back to yoy soon!'); // Javascript
								</script>";
								$this->load->view('Service');


               						 }
	
								break;

							case 'Login':

										$this->load->view('Login');
								break;

							case 'Clogin':
									$this->load->view('CLogin');
								break;
							case 'Blogin':
									$this->load->view('BLogin');
								break;	
							case 'Logout':
						
			
        
        					 echo "<script>
								alert('You have logged out successfully'); // Javascript
								</script>";

							
							   $this->load->view('Content');
								
									break;
				}		

					
				$this->load->view('footer');

		}
			else
		{


		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('Navigation');
		$this->load->view('Content');
		$this->load->view('Footer');

		}
		
		if(isset($_POST["formname"]))
		{
					


			switch ($_POST["formname"]) 
			{
			

					case 'cloginform':

				//	$this->load->helper(array('form', 'url'));
					$this->load->library('form_validation');
					$this->load->Model('PetStoreDbmod');

					$result=$this->PetStoreDbmod->authenticate_user();

					if($result==1)
					{
				//		  $this->load->helper('url'); 
		   				
		   				redirect('Store_controller/loadcuser');
		         
		          
						
					}
					if($result==2)
					{

						 $this->load->helper('url'); 
		   
		         	
		         		redirect('Store_controller/loadbuser');
					}
					if($result==0)

					{
						$this->load->helper(array('form', 'url'));
						$this->load->library('form_validation');

						if($this->invalidUser()==FALSE)
						{
					
						}
						
					}
					break;

			}



		


		}
	


	}


public function loadbuser()
{


$this->load->helper('url'); 
$this->load->view('header');
$this->load->view('Bnavigation');

$this->load->view('Blogin');
$this->load->view('footer');

}

public function loadcuser()
{
$this->load->helper('url'); 
$this->load->view('header');
$this->load->view('Cnavigation');
$this->load->view('Clogin');
//$this->load->view('Clogin');
$this->load->view('footer');

}

public function formvalidation()
{


$this->load->library('form_validation');
$this->form_validation->set_rules('FName','First Name','required|alpha');
$this->form_validation->set_rules('LName','Last Name','required|alpha');
$this->form_validation->set_rules('emailid','Email','required|valid_email');
$this->form_validation->set_rules('Phone','Phone','numeric|min_length[5]|max_length[12]');


$out=$this->form_validation->run();

return ($out);
}


public function cformvalidation()
{


$this->load->library('form_validation');
$this->form_validation->set_rules('FName','First Name','required|alpha');
$this->form_validation->set_rules('LName','Last Name','required|alpha');
$this->form_validation->set_rules('emailid','Email','required|valid_email');
$this->form_validation->set_rules('Phone','Phone','numeric|min_length[5]|max_length[12]');
$this->form_validation->set_rules('Tarea','Comments','required');



$out=$this->form_validation->run();

return ($out);


}




public function loadview()
{
$this->load->library('form_validation');

$this->load->helper('url');
$this->load->view('header');
$this->load->view('Navigation');
$this->load->view('ContactUs_content');
$this->load->view('footer');

}

public function invalidUser()
{

$this->load->library('form_validation');

echo "<script>
alert('Invalid User or password'); // Javascript
</script>";




}



}
?>