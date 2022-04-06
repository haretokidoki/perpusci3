<?php  

/**
 * 
 */
class User_model extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}

	function getUser()
	{
		$query = $this->db->query("SELECT * FROM user");
		return $query->result();
	}

	function getUserByID($id){
		$query = $this->db->query("SELECT * FROM user WHERE id_user = '$id' LIMIT 1");
		return $query->row_array();
	}

	function addUser($id){
        $date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
        $now = $date->format('Y-m-d H:i:s');

		$data = [
            'nama' => $id['nama'],
            'email' => $id['email'],
            'password' => md5($id['password']),
            'alamat' => $id['alamat'],
            'telp' => $id['telp'],
            'created_at' => $now,
            'updated_at' => $now
        ];
        return $this->db->insert('user',$data);
	}

	function deleteUser($id){
    	$this->db->where('id_user',$id);
    	return $this->db->delete('user');
    }

	function updateUser($a,$id){
		$data = [
            'nama' => $a['nama'],
            'email' => $a['email'],
            'password' => $a['password'],
            'alamat' => $a['alamat'],
            'telp' => $a['telp'],
            'created_at' => $a['created_at'],
            'updated_at' => now()
        ];
        return $this->db->update('user',$data);
	}

	function updateGambar($a, $id)
    {
        $data = [
            'gambar' => $a
        ];
        $this->db->where('id_user', $id);
        return $this->db->update('user', $data);
    }

    function auth($email, $pwd){
    	$this->db->where('email',$email);
    	$this->db->where('password',$pwd);
    	if ($this->db->get('user')->num_rows()==1) {
    		return TRUE;
    	}else{
    		return FALSE;
    	}
    }

    function get_detail($email){
    	$this->db->where('email', $email);
    	return $this->db->get('user')->row_array();
    }

    function update_cookie($key,$id){
    	$data = [
    		'cookie' => $key
    	];
    	$this->db->where('id_user',$id);
    	return $this->db->update('user',$data);
    }

    function get_detail_by_cookie($cookie)
    {
    	$this->db->where('cookie',$cookie);
    	return $this->db->get('user')->row_array();
    }
}

?>