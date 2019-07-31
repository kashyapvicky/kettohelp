<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_panel extends MX_Controller
{
	function __construct()
	{
        parent::__construct();
        $this->load->model('user_panel_model');
        //$this->load->helper(array('form'));
			
	    //$this->load->library('form_validation');
        $userdata = $this->session->userdata('userdata');


        //print_r($userdata); die;
        if(empty($userdata['id']))
        {
        	redirect('website');
        }      
    }

	public function index()
	{
		$userdata = $this->session->userdata('userdata');
		$user_id = $userdata['id'];
		$email = $userdata['email'];
		$row = $this->user_panel_model->get_user_detail($user_id);
		$both_donation_info = $this->user_panel_model->get_give_donations($user_id);

		$direct_downline = $this->user_panel_model->get_directs_downline($email);

		$direct_count = count($direct_downline);


		$this->user_panel_model->get_downlines_ids($email,$a=array());
		$total_downlne_array = $this->user_panel_model->all_data;

		$total_team = count($total_downlne_array);
		$team_count = array('direct_count'=>$direct_count,'total_count'=>$total_team);

		//echo "<pre>";print_r($team_count); die;

		$data['team_count'] = $team_count;

		//echo $this->db->last_query(); die;
		//echo "<pre>";print_r($both_donation_info); die('here');
		$data['donations'] = $both_donation_info;
		$data['user_detail'] = $row;
		$this->user_template->load('user_template','user_dashboard',$data);
		//$this->load->view('user_dashboard');
	}
	public function spin()
	{
		$userdata = $this->session->userdata('userdata');
		$user_id = $userdata['id'];
		$row = $this->user_panel_model->get_wallet_amount($user_id);
		$wallet_amount = $row['btc'];
		$data['wallet_amount']=$wallet_amount;
		$this->load->view('spin',$data);
	}
	public function spinner_transaction()
	{
		$user_id = $this->input->post('id');
		$outcome = $this->input->post('winnumber');
		$result = $this->input->post('res');
		$data = array(
			'user_id'=>$user_id,
			'outcome'=>$outcome,
			'result'=>$result
		);

		$insert_id = $this->user_panel_model->insert_spinner_transactions($data);
		if($insert_id)
		{

			 
			return json_encode($insert_id);
		}
		else
		{
			return json_encode(0);
		}
	}
	public function update_wallet_amount()
	{
		$user_id = $this->input->post('id');
		 $amount = $this->input->post('amount');
		 // $int = (int)$amount;
		// echo json_encode($amount);
	 	$bool = $this->user_panel_model->add_sub_roullete_result($user_id,$amount);
	 	echo json_encode($bool);
	}
	public function direct_team()
	{
		$userdata = $this->session->userdata('userdata');
		$email = $userdata['email'];
		
		$direct_downline = $this->user_panel_model->get_directs_downline($email);
		$data['direct_downline'] = $direct_downline;
		// print_r($direct_downline);die;
		$this->user_template->load('user_template','direct_team',$data);
	}
	public function total_team()
	{
		$userdata = $this->session->userdata('userdata');
		$email = $userdata['email'];
		
		$this->user_panel_model->get_downlines_ids($email,$a=array());
		$total_downlne_array = $this->user_panel_model->all_data;

		//echo "<pre>";print_r($total_downlne_array); die;
		$data['total_team'] = $total_downlne_array;


		$this->user_template->load('user_template','total_team',$data);
	}
	public function plans()
	{
		$this->user_template->load('user_template','plan_view');
	}
	public function  plan_payment()
	{
		
		$userdata = $this->session->userdata('userdata');
		$user_id = $userdata['id'];
		$plan = $this->input->post('rdio');
		if(empty($plan) || !isset($plan))
		{
			$this->session->set_flashdata('select_plan','Please Select A Plan');
			redirect('user_panel/plans');
		}
		else
		{
				$date = date('Y-m-d');
			if($plan==1)
			{
				$newdate = strtotime(date("Y-m-d", strtotime($date)) . " +150 day");
				$exp_date =  date("Y-m-d", $newdate);
			}
			elseif($plan==2)
			{
				
				$newdate = strtotime(date("Y-m-d", strtotime($date)) . " +100 day");
				$exp_date =  date("Y-m-d", $newdate);
			}
			else
			{
				
				$newdate = strtotime(date("Y-m-d", strtotime($date)) . " +50 day");
				$exp_date =  date("Y-m-d", $newdate);
			}

			$amount = $this->input->post('amount');
			$data = array(
				"user_id"=>$user_id,
				"plan"=>$plan,
				"amount"=>$amount
			);
			$insert_id = $this->user_panel_model->insert_investmente($data);
			if($insert_id)
			{
				$bool = $this->user_panel_model->update_wallet_amount($amount,$user_id,$plan,$exp_date);
				if($bool)
				{

					$this->session->set_flashdata('insert',' PAYMENT SUCCESFULL');
					redirect('user_panel');
				}
				else
				{
					$this->session->set_flashdata('insert',' PAYMENT Error');
				}
			}
			else
			{
				$this->session->set_flashdata('insert',' PAYMENT Error');
			}
			$this->user_template->load('user_template','plan_view');
		}
	}
	public function withdraw_amount()
	{
		if($this->input->post('w_amount'))
		{
			 // echo"here";die;
			$userdata = $this->session->userdata('userdata');
			$user_id = $userdata['id'];
			$amount = $this->input->post('w_amount');
			$data = array(
			"user_id"=>$user_id,
			"amount"=>$amount
			);
			$insert_id = $this->user_panel_model->insert_withdraw_transactions($data);
			if($insert_id)
			{
				$insert_id = $this->user_panel_model->dec_wallet_amount($amount,$user_id);
				$this->session->set_flashdata('withdraw','SUCCESFULL');
				// echo"success"; die;
			}
			else
			{
				// echo"failure"; die;
				$this->session->set_flashdata('withdraw','  Error');
			}

		}
		// echo"herebb"; die;
		$this->user_template->load('user_template','withdraw_amount');
	}
	public function get_payees()
	{
		$userdata = $this->session->userdata('userdata');
		$user_id = $userdata['id'];

		 $payees_array = $this->user_panel_model->get_all_payees($user_id);
		 //echo "<pre>";print_r($payees_array); die;
		 $data['payees_array'] = $payees_array;
		$this->user_template->load('user_template','withdraw_history',$data);
	}
	public function genealogy()
	{
		// $this->load->view('genealogy');
		if(!empty($this->input->get('user')))
		{

			$session_user_name = $this->input->get('user');
			// echo $session_user_name; die;
			$session_array=array('username'=>$session_user_name);
			if($session_user_name=='add')
			{
				$userdata = $this->session->userdata('userdata');
				$session_name = $userdata['name'];
				// print_r($userdata); die;
				$session_id = $userdata['id'];
				$session_user_name = $userdata['user_name'];
				$session_array = array('name'=>$session_name,'username'=>$session_user_name,'sponser_id'=>$userdata['sponser_id']);
			}
		}
		else
		{

			$userdata = $this->session->userdata('userdata');
			$session_name = $userdata['name'];
			// print_r($userdata); die;
			$session_id = $userdata['id'];
			$session_user_name = $userdata['user_name'];
			$session_array = array('name'=>$session_name,'username'=>$session_user_name,'sponser_id'=>$userdata['sponser_id']);
		}
		$row = $this->user_panel_model->get_tree_structure_first_level($session_user_name);

		if(!empty($row))
		{

	
			foreach ($row as $key => $value)
			{
				// print_r($row); die;
				$position = $value['position'];
				if($position =='Left')
				{
					$name = $value['name'];
					$username = $value['user_name'];
					$sponser_id = $value['sponser_id'];
					$leftmost_array = array('name'=>$name,'username'=>$username,'sponser_id'=>$sponser_id);
				}
				else
				{
					$name = $value['name'];
					$username = $value['user_name'];
					$sponser_id = $value['sponser_id'];
					$rightmost_array = array('name'=>$name,'username'=>$username,'sponser_id'=>$sponser_id);
				}
			}
			if(isset($leftmost_array))
			{
				$username = $leftmost_array['username'];
				$left_childs_array = $this->user_panel_model->get_left_leafs($username);
				if($left_childs_array)
				{
					foreach ($left_childs_array as $key => $value) 
					{
						# code...
						$position = $value['position'];
						if($position =='Left')
						{
							$name = $value['name'];
							$username = $value['user_name'];
							$sponser_id = $value['sponser_id'];
							$left_of_left = array('name'=>$name,'username'=>$username,'sponser_id'=>$sponser_id);
						}
						else
						{
							$name = $value['name'];
							$username = $value['user_name'];
							$sponser_id = $value['sponser_id'];
							$right_of_left = array('name'=>$name,'username'=>$username,'sponser_id'=>$sponser_id);
						}
					}
				}
			}
			if(isset($rightmost_array))
			{
				$username = $rightmost_array['username'];
				$right_childs_array = $this->user_panel_model->get_right_leafs($username);
				if($right_childs_array)
				{
					foreach ($right_childs_array as $key => $value)
					{
						
						$position = $value['position'];
						if($position =='Left')
						{
							$name = $value['name'];
							$username = $value['user_name'];
							$sponser_id = $value['sponser_id'];
							$left_of_right = array('name'=>$name,'username'=>$username,'sponser_id'=>$sponser_id);
						}
						else
						{
							$name = $value['name'];
							$username = $value['user_name'];
							$sponser_id = $value['sponser_id'];
							$right_of_right = array('name'=>$name,'username'=>$username,'sponser_id'=>$sponser_id);
						}
					}
				}
			}
		}


		if(isset($leftmost_array))
		{

		}
		else
		{
			$leftmost_array=array();
		}
		if(isset($rightmost_array))
		{

		}
		else
		{
			$rightmost_array=array();
		}
		if(isset($left_of_left))
		{

		}
		else
		{
			$left_of_left=array();
		}
		if(isset($right_of_left))
		{

		}
		else
		{
			$right_of_left=array();
		}
		if(isset($left_of_right))
		{

		}
		else
		{
			$left_of_right=array();
		}
		if(isset($right_of_right))
		{

		}
		else
		{
			$right_of_right=array();
		}

		$data=array
		(
			'session_array'=>$session_array,
			'leftmost'=>$leftmost_array,
			'rightmost'=>$rightmost_array,
			'left_of_left'=>$left_of_left,
			'right_of_left'=>$right_of_left,
			'left_of_right'=>$left_of_right,
			'right_of_right'=>$right_of_right
		);
		$this->user_template->load('user_template','genealogy',$data);
	}
	public function crone_income()
	{
		$userdata = $this->session->userdata('userdata');
		$session_id = $userdata['id'];
		$income_detail = $this->user_panel_model->get_crone_income($session_id);
		$data['income_detail']=$income_detail;
		$this->user_template->load('user_template','income_history',$data);
	}

	public function edit_profile()
	{
		$userdata = $this->session->userdata('userdata');
		$session_id = $userdata['id'];
		$user_detail = $this->user_panel_model->get_user_detail($session_id);
		//echo "<pre>";print_r($user_detail); die;
		$data['users_detail'] = $user_detail;
		$this->user_template->load('user_template','edit_profile',$data);
	}
	public function update_info()
	{
		$user_id = $this->input->get('id');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone_number');
		$password= $this->input->post('password');
		$data = array(

			'name'=>$name,
			'email'=>$email,
			'password'=>$password,
			'mobile_number'=>$phone
		);
		$bool =$this->user_panel_model->update_basick_info($data,$user_id);
		if($bool)
		{
			$this->session->set_flashdata('update_s','Info Succesfully Updated');
			redirect('user_panel/edit_profile');
		}
		else
		{
			$this->session->set_flashdata('update_e','Something Went Wrong');
		}
		redirect('user_panel/edit_profile');
	}
	public function fund_transfe_history()
	{

	}
	public function purchase_pin()
	{
		$userdata = $this->session->userdata('userdata');
		$session_id = $userdata['id'];
		$user_detail = $this->user_panel_model->get_user_detail($session_id);
		$data['users_detail'] = $user_detail;
		$this->user_template->load('user_template','fundtransfer',$data);
	}
	public  function is_username_exist()
	{
		$user_name = $this->input->post('user_name');
		 // $user_name = 'vicky@001';

		$row = $this->user_panel_model->check_username_for_reg($user_name);
		// echo $this->db->last_query(); die;
		if(!empty($row))
		{
			$output = array('id'=>$row['id'],'username'=>$row['user_name'],'flag'=>1);
			echo json_encode($output);
		}
		else
		{
			echo json_encode(2);
		}
	}


	public function insert_slip()
	{
		//print_r($_POST);
		 //$this->load->library('upload', $config);
		$d_id = $this->input->post('d_id');
		//$slip = $this->input->post('slip');
		//print_r($slip); die;



		if(empty($d_id))
		{
			$this->session->set_flashdata('parameter_missing','Please Upload Slip');

			echo"fefr3"; die;
		}
		else
		{

				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 0;
                $config['max_width']            = 0;
                $config['max_height']           = 0;

                $this->load->library('upload', $config);
               // $slip = "slip";
                if (!$this->upload->do_upload('slip'))
                {
                    $error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('parameter_missing',$error['error']);


                        //$this->load->view('upload_form', $error);
                        //print_r($error); die;
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $file_name = $data['upload_data']['file_name'];
                       // echo "<pre>";print_r($data); die;
                        //$this->load->view('upload_success', $data);
                        $this->user_panel_model->update_bill($d_id,$file_name);
                       // echo $this->db->last_query(); die;
                        $this->session->set_flashdata('parameter_missing','Succesfull');

                }

		}

		redirect(base_url('user_panel'));
	}

	public function approve_donation()
	{
		$id = $this->input->get('id');
		$this->user_panel_model->update_r_status($id);
		$this->session->set_flashdata('approved_succesfully','Succesfull');
		redirect(base_url('user_panel/get_payees'));
		//echo $id; die;
	}

	public function make_pins()
	{
		$id = $this->input->post('uajax_id');
		$total_amount = $this->input->post('total_amount');
		$months = $this->input->post('months');
		$quantity = $this->input->post('quantity');
		if($months==1)
		{
			// 3 months
			$rate = 1000;
		}
		else
		{
			$rate = 2000;
		}
		
		for ($i=1; $i<= $quantity; $i++)
		{ 
			$array = array('1','9','#','0','K','4','3','5','2','V');
			$pin = shuffle($array);
			//print_r($array);die;
			$pin = implode('', $array);
			//echo $pin; die;
			$pin = $pin.'U'.$id.'';
			//echo $pin;die;

			$data = array('pin_hash'=>$pin,'user_id'=>$id,'amount'=>$rate,'month_flag'=>$months,'created_at'=>date('Y-m-d'));
			$insert_id = $this->user_panel_model->insert_pin($data);

		}

		if($insert_id)
		{
			$this->session->set_flashdata('pins','Pin Created Succesfuly');
			redirect(base_url('user_panel/pins'));
		}
		else
		{
			$this->session->set_flashdata('pins','Error in Pin');
			redirect(base_url('purchase_pin'));
		}

	}

	public function pins()
	{
		$userdata = $this->session->userdata('userdata');
		$session_id = $userdata['id'];
		$pins = $this->user_panel_model->get_pins($session_id);
		$data['pins']=$pins;
		$data['user_id'] = $session_id;
		$this->user_template->load('user_template','income_history',$data);
	}
			
}
