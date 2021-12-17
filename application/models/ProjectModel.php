<?php
class ProjectModel extends CI_Model
{
	function saverecords($data)
	{
		// $this->db->select('*');
		// $this->db->from('user_detail');
		// $this->db->where('email',$email);
		// $query=$this->db->get();
		// return $query->result_array();
		// if($query->num_rows()==0) 
		// {
		$query = $this->db->insert('user_detail', $data);
		if ($query) {
			return true;
		} else {
			return false;
		}
		//}
		// 	else
		// 	{
		// 		//echo "already exsists";
		// 	}
	}
	function logindetail($email, $password)
	{
		$this->db->select('*');
		$this->db->from('user_detail');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$query = $this->db->get();
		return $query->result_array();
		if ($query->num_rows()) {
			return true;
		} else {
			return false;
		}
	}
	function updaterecordbyid($id)
	{
		$this->db->select('*');
		$this->db->from('user_detail');
		$this->db->where('email', $id);
		$query = $this->db->get();
		return $query->result_array();
	}
	function updaterecords($data, $id)
	{
		$this->db->where('id', $id);
		if ($this->db->update('user_detail', $data)) {
			return true;
		} else {
			return false;
		}
	}
	function passwordrecords($currentpass, $id)
	{
		//echo $currentpass,$id;
		$sql = $this->db->query("UPDATE `user_detail` SET `password`='$currentpass' WHERE email='$id'");
		if ($sql) {
			return true;
		} else {
			return false;
		}
	}
	function resetpassdata($confpass, $email)
	{
		$sql = $this->db->query("UPDATE `user_detail` SET `password`='$confpass' WHERE email='$email'");
		if ($sql) {
			return true;
		} else {
			return false;
		}
	}
	function feedbackdata($data)
	{
		$query = $this->db->insert('feedback', $data);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}
	function displayrecord($email)
	{
		$this->db->select('*');
		$this->db->from('create_class');
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->result_array();
		if ($query->num_rows()) {
			return true;
		} else {
			return false;
		}
	}
	function createdetail($data)
	{
		// $this->db->select('*');
		// $this->db->from('create_class');
		// $this->db->where('class_name',$class_name);
		// $query=$this->db->get();
		// return $query->result_array();
		// if($query->num_rows()==0) 
		// {
		$query = $this->db->insert('create_class', $data);
		if ($query) {
			return true;
		} else {
			return false;
		}
		//}
		// else
		// {
		//echo "Class name already Exsist";
		//}
	}
	function joindetail($class_name, $classcode)
	{
		$this->db->select('*');
		$this->db->from('create_class');
		$this->db->where('classname', $class_name);
		$this->db->where('classcode', $classcode);
		$query = $this->db->get();
		return $query->result_array();
		if ($query->num_rows()) {
			return true;
		} else {
			return false;
		}
	}
	function deleteclassdata($id)
	{
		$this->db->where('id', $id);
		if ($this->db->delete('create_class')) {
			return true;
		} else {
			return false;
		}
	}
	function teachstreamdata()
	{
		$this->db->select('*');
		$this->db->from('class_detail');
		$query = $this->db->get();
		return $query->result_array();
	}
	function teachinsertstreamdata($data)
	{
		$query = $this->db->insert('class_detail', $data);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}
	function stustreamdata()
	{
		$this->db->select('*');
		$this->db->from('class_detail');
		$query = $this->db->get();
		return $query->result_array();
	}
	function stuinsertstreamdata($data)
	{
		$query = $this->db->insert('class_detail', $data);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}
	function teachclassworkdata()
	{
		$this->db->select('*');
		$this->db->from('classwork');
		$query = $this->db->get();
		return $query->result_array();
	}
	function teachinsertclassworkdata($data)
	{
		$query = $this->db->insert('classwork', $data);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}
	function stuclassworkdata()
	{
		$this->db->select('*');
		$this->db->from('classwork');
		$query = $this->db->get();
		return $query->result_array();
	}
	function studentmail($data)
	{
		$query = $this->db->insert('student', $data);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}
	function peopledata()
	{
		$this->db->select('*');
		$this->db->from('student');
		$query = $this->db->get();
		return $query->result_array();
	}
	function remarkdata($data, $id1)
	{
		$this->db->where('email', $id1);
		if ($this->db->update('student', $data)) {
			return true;
		} else {
			return false;
		}
	}
}
