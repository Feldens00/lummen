<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class irrigationModel extends CI_Model {

	public $table = "irrigation";
	public $tp = "products";

	public function create_product($product){
	return $this->db->insert($this->tp, $product);
	}


	public function get(){
		$this->db->order_by('name_entitie','asc');
		return $this->db->get($this->table)->result_array();
	}
}
	