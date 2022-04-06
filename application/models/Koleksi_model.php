<?php  

/**
 * 
 */
class Koleksi_model extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}

	function getKoleksi()
	{
		$query = $this->db->query("SELECT * FROM koleksi");
		return $query->result();
	}

	function getDetail($id)
	{
		$query = $this->db->query("SELECT * FROM koleksi WHERE id_koleksi = '$id'");
		return $query->row_array();
	}

	function addKoleksi($id, $gambar)
    {
        $data = [
            'judul' => $id['judul'],
            'penulis' => $id['penulis'],
            'penerbit' => $id['penerbit'],
            'deskripsi' => $id['deskripsi'],
            'tahun_terbit' => $id['tahun_terbit'],
            'kategori' => $id['kategori'],
            'gambar' => $gambar
        ];
        return $this->db->insert('koleksi', $data);
    }

    function deleteKoleksi($id){
    	$this->db->where('id_koleksi',$id);
    	return $this->db->delete('koleksi');
    }

    function updateKoleksi($a,$id)
    {
        $data = [
            'judul' => $a['judul'],
            'penulis' => $a['penulis'],
            'penerbit' => $a['penerbit'],
            'deskripsi' => $a['deskripsi'],
            'tahun_terbit' => $a['tahun_terbit'],
            'kategori' => $a['kategori']
        ];
        $this->db->where('id_koleksi', $id);
        return $this->db->update('koleksi', $data);
    }

    function updateGambar($a, $id)
    {
        $data = [
            'gambar' => $a
        ];
        $this->db->where('id_koleksi', $id);
        return $this->db->update('koleksi', $data);
    }

}

?>