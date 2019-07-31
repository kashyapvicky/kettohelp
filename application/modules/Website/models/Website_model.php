<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Website_model extends CI_Model
{

	public function register_data($data)
	{
		$bool = $this->db->insert('users',$data);
		return $this->db->insert_id();
	}
	public function check_login_credentials($username,$password)
	{
		$this->db->select('*');
		$this->db->where('email',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('users');
		return $query->row_array();
	}
	public function check_username($user_name)
	{
		$this->db->select('*');
		$this->db->where('email',$user_name);
		$query = $this->db->get('users');
		return $query->row_array();

	}
	public function get_country()
	{
		$this->db->select('*');
		$query = $this->db->get('countries');
		return $query->result_array();
	}
	public function get_state_by_country_id($country_id)
	{
		$this->db->select('*');
		$this->db->where('country_id',$country_id);
		$query = $this->db->get('states');
		return $query->result_array();
	}
	public function get_city_by_country_id($state_id)
	{
		$this->db->select('*');
		$this->db->where('state_id',$state_id);
		$query = $this->db->get('cities');
		return $query->result_array();
	}
	public function get_lts_leaf($sponser_id)
	{
		$sponsor = $sponser_id;
		// echo $sponser_id; die;
		$this->db->select('id,email');
		// if($position)
		// {
		// 	$this->db->where('position',$position);
		// }
		$this->db->where('sponser_id',$sponsor);
		$query = $this->db->get('users');
		  // echo $this->db->last_query(); die;
		$row = $query->row_array();
		  // print_r($row); die;
		if(empty($row))
		{
			$leaf = $sponsor;
			//  echo $leaf; die;
			// $array = array('leaf'=>$leaf);
			// return $array;
			$this->session->set_flashdata('leaf',$leaf);

		}
		else
		{

			$this->get_lts_leaf($row['email']);
			 // echo $this->db->last_query(); die;

		}

		// return $leaf;
	}
	function find_position($snode,$pos) 
	{

      global $s_dbid,$downlineuser,$position;



        $sql  = "SELECT username FROM `join` WHERE `sponsor` = '$snode' and `position` = '$pos'";

        $result = mysqli_query($s_dbid,$sql);

		if(mysqli_num_rows($result)==0)

		{

			$downlineuser = $snode;



		}

		else

		{

			list($user) = mysqli_fetch_row($result);

			find_position($user,$pos);

		}		 
   }
   public function check_username_for_reg($username)
   {
   	$this->db->select('*');
   	$this->db->where('email',$username);
   	$query = $this->db->get('users');
   	return $query->row_array();

   } 
   public function get_directs_count($sponser_id)
   {
   	$this->db->where('dreferal',$sponser_id);
   	$query  = $this->db->get('users');
   	return $query->num_rows();
   }
   public function check_sponser_for_reg($sponser)
   {
   	$this->db->select('*');
   	$this->db->where('email',$sponser);
   	$query = $this->db->get('users');
   	return $query->row_array();

   }
   public  function get_second_level_reciever($sponsor)
   {
   		$this->db->select('id,email');
   		$this->db->where('email',$sponsor);
   		$query  = $this->db->get('users');
   		return $query->row_array();
   }
   public function insert_donation($data)
   {
   		$this->db->insert_batch('donations',$data);
   		return $this->db->insert_id();
   }

   public function check_pin($pin)
   {
   	$this->db->select('id');
   	$this->db->where('pin_hash',$pin);
   	$query  = $this->db->get('pins');
   	return $query->row_array();
   }
   public function update_pin_as_used($id)
   {
   	$this->db->where('id',$id);
   	$this->db->set('status',2);
   	$this->db->update('pins');

   }
   
}


?>