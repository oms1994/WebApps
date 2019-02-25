<?php

class PetStoreDbmod extends CI_Model
{


	public function insert_data()
	{ 

		$this->load->database();

		$data = array(
        'Firstname' => $_POST["FName"],
        'Lastname' => $_POST["LName"],
         'email' => $_POST["emailid"],
         'phone'=>$_POST["Phno"],
         'Comments'=>$_POST["Tarea"]	
		);

		$data = $this->db->insert('enquiry',$data);


	}	

	public function insert_data_client()
	{  
			$this->load->database();
			$id=(uniqid());
                    $pwd=(string)(substr("$id",-4,6));
                    $uniqid=substr(("$id"),4,-6);
                
                   $data = array(
      				  'userid' =>"Petstr_".$uniqid,
        			  'password' => "wdm@".$pwd,
         			  'email'=>$_POST["emailid"],
         			  'roleid'=>1
         	
					);

					$data = $this->db->insert('user_data',$data);
                  



		

		$data = array(
        'fname' => $_POST["FName"],
        'lname' => $_POST["LName"],
         'phone' =>$_POST["Phno"],
         'email'=>$_POST["emailid"],
         'userid'=>("Petstr_".$uniqid),
         'client_ID'=>''
         	
		);

		$data = $this->db->insert('client_data',$data);


	}	

	public function insert_data_service()
	{
			$this->load->database();

			$id=(uniqid());
            $pwd=(string)(substr("$id",-5,7));
            $uniqid=substr(("$id"),-6,-2);	
            $value=rand(12156,99999);
            $Sid=rand(100,900);
       	

                 $data = array(
                 'b_id' => $value,
       			'fname' => $_POST["FName"],
        		'lname' => $_POST["LName"],
         		'phone'=>$_POST["Phno"],
         		'email'=>$_POST["emailid"],
         		'userid'=>("Petstr_".$uniqid),
         		'bname'=>$_POST["BName"]  
         		);	
                 $data = $this->db->insert('service_data',$data);

                 $data1=array(
				'service_id'=>$Sid,
				'service_description'=>'',
				'b_id'=>$value
				); 
                 $data1=$this->db->insert('services',$data1);

                  $data2 = array(
      				  'userid' =>"Petstr_".$uniqid,
        			  'password'=> "wdm@".$pwd,
         			  'email'=>$_POST["emailid"],
         			  'roleid'=>2
         	
					);

					$data2 = $this->db->insert('user_data',$data2);



	}


		public  function authenticate_user()
		{
            $this->load->database();
		


        

        $user_email=$_POST['emailid'];
        $user_password=$_POST['pwd'];
        
        $query=$this->db->get("user_data");


              foreach ($query->result() as $row) 
              {
                    if($row->email==$user_email AND $row->password==$user_password)
                    {
                        $db_userid=($row->userid); 
                        $db_roleid=($row->roleid);
                        $flag_found=1;
                        /*print_r($row->email);
                        print_r($row->password);
                        print($db_roleid);
                        print($db_userid);*/
              
                        //$CI=&get_instance();
                    }
                    
            }

            if(empty($db_roleid))
            {
                $db_roleid=0;
                $flag=0;
                
            }

            if($db_roleid==1)
            {
                 $query1=$this->db->get("client_data");

                  foreach ($query->result() as $row) 
            {            
                  if($db_userid==$row->userid)
                {

                    $flag=1;

                }

            }    

            }
            else if($db_roleid==2)
            {

                $query1=$this->db->get("service_data");

                  foreach ($query->result() as $row) 
            {            
                  if($db_userid==$row->userid)
                {

                    $flag=2;
                }

            }    




            

            }
      
              


            return($flag);
            }
		}
	
		
?>