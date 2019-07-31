<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends MX_Controller
{
	function __construct()
	{
        parent::__construct();
        $this->load->model('website_model');
        $this->load->helper(array('form'));
			
	     /* Load form validation library */ 
	     $this->load->library('form_validation');
        // $userdata = $this->session->userdata('userdata');
        // if(empty($userdata['logged_in']))
        // {
        // 	redirect('login');
        // }      
    }

	public function index()
	{
		//$this->template->load('template', 'index');
		$this->load->view('index');
	}
	
	public function register()
	{
		//print_r($_POST); die;

	     /* Set validation rule for name field in the form */ 
	     $this->form_validation->set_rules('fees', 'fees', 'required'); 
	     $this->form_validation->set_rules('name', 'Name', 'required'); 
	     $this->form_validation->set_rules('l_name', 'Name', 'required'); 
	    // $this->form_validation->set_rules('user_name', 'User Id', 'required'); 
	     $this->form_validation->set_rules('sponser_id', 'Sponser Id', 'required'); 
	     //$this->form_validation->set_rules('ac_number', 'Account Number', 'required'); 
	     //$this->form_validation->set_rules('pos', 'Position', 'required'); 
	     $this->form_validation->set_rules('mobile_number', 'Mobile Number', 'required'); 
	     $this->form_validation->set_rules('password', 'password', 'required'); 
	     $this->form_validation->set_rules('upi', 'UPI ID', 'required'); 

	     //$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
			
	     if ($this->form_validation->run() == TRUE)
	     { 
			$name = $this->input->post('name');
			$l_name = $this->input->post('l_name');
			$email = $this->input->post('email');
			$ac_number = $this->input->post('ac_number');
			$fees = $this->input->post('fees');
			$sponser_id = $this->input->post('sponser_id');
			$mobile = $this->input->post('mobile_number');
			$password = $this->input->post('password');
			$amount = $this->input->post('plan_amt');
			$upi = $this->input->post('plan_amt');
			$pin = $this->input->post('pin');

			$last_pin_id = substr($pin, 13,14);
			$pin =  substr($pin, 0, 12);
			//echo $pin; die;


			$row = $this->website_model->check_pin($pin);
			if(empty($row) || $row['id'] !=$last_pin_id )
			{

				//echo "invalid";die;
				$this->session->set_flashdata('reg_error', 'Invalid Pin');
			}
			else
			{	
				//echo "working"; die;
				$pin_id = $row['id'];
				$sponser_detail = $this->website_model->check_sponser_for_reg($sponser_id);
				if($sponser_detail)
				{

					$direct_count  = $this->website_model->get_directs_count($sponser_id);
					if($direct_count  > 1)
					{
						//two members are already joined so lets find leaf node
						$this->website_model->get_lts_leaf($sponser_id);
						$leaf  =$this->session->flashdata('leaf');

						$data = array
						(
							'name'=>$name,
							'last_name'=>$l_name,
							'email'=>$email,
							'ac_number'=>$ac_number,
							//'user_name'=>$user_name,
							'sponser_id' =>$leaf,
							'upi' =>$upi,
							'mobile_number'=>$mobile,
							'dreferal'=>$sponser_id,
							'password'=>$password,
							'fees_type'=>$fees,
							'btc'=>$amount,
							'pin_id'=>$pin_id,
							'join_date'=>date('Y-m-d'),
						);
					}
					else
					{


						$data = array
						(
							'name'=>$name,
							'last_name'=>$l_name,
							'email'=>$email,
							'ac_number'=>$ac_number,
							//'user_name'=>$user_name,
							'sponser_id' =>$sponser_id,
							'mobile_number'=>$mobile,
							'dreferal'=>$sponser_id,
							'upi' =>$upi,
							'password'=>$password,
							'fees_type'=>$fees,
							'btc'=>$amount,
							'pin_id'=>$pin_id,
							'join_date'=>date('Y-m-d'),
						);

					}


					$is_username_email = $this->website_model->check_username($email);
					if($is_username_email)
					{
						$this->session->set_flashdata('reg_error', 'User Id  Already  Exist');
						//echo $this->session->flashdata('reg_error'); die;
					}
					else
					{
						$insert_id = $this->website_model->register_data($data);

						if($insert_id)
						{
							$inserted_drefferal = $data['dreferal'];
							$inserted_sponsor = $data['sponser_id']; //mail aayi h yaha

							if ($inserted_drefferal == $inserted_sponsor)
							{
								$reciever_id_1 = $sponser_detail['id'];
								$reciever_id_2_sponsor_id = $sponser_detail['sponser_id'];
								$row = $this->website_model->get_second_level_reciever($reciever_id_2_sponsor_id);
								$reciever_id_2 = $row['id'];
							}
							else
							{
								$reciever_id_1 = $sponser_detail['id'];
								$row = $this->website_model->get_second_level_reciever($inserted_sponsor);
								$reciever_id_2 = $row['id'];		

							}
							
							$help_amt = $amount/2;
							$data = array(
								array(
									'donator_id' => $insert_id ,
									'receiver_id' => $reciever_id_1,
									'amount' => $help_amt,
									'created_on'=>date('Y-m-d')
								),
								array
								(

									'donator_id' => $insert_id ,
									'receiver_id' => $reciever_id_2,
									'amount' => $help_amt,
									'created_on'=>date('Y-m-d')
								)
							);

							$insert_d_id = $this->website_model->insert_donation($data);

							$this->website_model->update_pin_as_used($pin_id);

							$this->session->set_flashdata('reg', 'REGISTRATION SUCCESSFULL');
							//redirect('website/login');
							// echo "<script>alert('Registration Successfull')</script>";
						}
						else
						{
							$this->session->set_flashdata('reg_error', 'Error');
						
						}
					}
			
				}
				else
				{
					$this->session->set_flashdata('reg_error', 'Sponsor Does Not Exist');
				}

			}
			
			
	     } 
		//$this->load->view('index');
	     redirect(base_url('website'));
	}
	public function login()
	{


	     $this->form_validation->set_rules('user_name', 'User Id', 'required'); 
	     $this->form_validation->set_rules('password', 'password', 'required'); 
	     

		if ($this->form_validation->run() == true)
		{ 
			$user_name = $this->input->post('user_name');
			$password = $this->input->post('password');
			$row = $this->website_model->check_login_credentials($user_name,$password);
		//	echo $this->db->last_query(); die;
			//print_r($row); die;
			if($row)
			{
				//print_r($row); die;
				$this->session->set_userdata('userdata',$row);
				redirect('user_panel');
			}
			else
			{
				$this->session->set_flashdata('login','CREDENTIALS DID NOT MATCH');
			}

		}

		//$this->template->load('template', 'login');
		redirect(base_url('website'));
	}
	public  function is_username_exist()
	{
		$user_name = $this->input->post('user_name');
		// $user_name = 'vicky@001';

		$row = $this->website_model->check_username_for_reg($user_name);
		// echo $this->db->last_query(); die;
		if(!empty($row))
		{
			echo json_encode(1);
		}
		else
		{
			echo json_encode(2);
		}
	}
	public  function is_sponser_exist()
	{
		$sponser_id = $this->input->post('sponser_id');
		// $user_name = 'vicky@001';

		$row = $this->website_model->check_sponser_for_reg($sponser_id);
		// echo $this->db->last_query(); die;
		if(!empty($row))
		{
			echo json_encode(1);
		}
		else
		{
			echo json_encode(2);
		}
	}
}

