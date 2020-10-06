<?php

class User_model extends CI_Model {

  /**
   * Menambahkan user ke tabel login
   * 
   * @param Array $user => array (
   *  'username' => string,
	 *  'password' => sha1(string),
	 *  'status' => number
   * )
   */
  public function add_user($user) {
    return $this->db->insert('login', $user);
  }

  public function get_users() {
    return $this->db->get('login')->result();
  }

  public function check_user($user) {
    return $this->db->get_where('login', $user)->num_rows() > 0;
  }
}
