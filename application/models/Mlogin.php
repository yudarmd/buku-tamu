<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mlogin extends CI_Model {
  public function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
    }
}