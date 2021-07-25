<?php
class Model extends CI_Model{
	
	public function user()
	{
		return $this->db->where('level', 1)->get('users');
	}

	function update($table, $data, $id) {
    	return $this->db->where('id', $id)->update($table, $data);
    }

    function update_komen($table, $data, $id) {
        return $this->db->where('id_komen', $id)->update($table, $data);
    }

    function delete($table, $id) {
    	return $this->db->where('id', $id)->delete($table);
    }

    function delete_komen($table, $id) {
        return $this->db->where('id_komen', $id)->delete($table);
    }

	function get_where($table, $id) {
        $this->db->where('id', $id);
        return $this->db->get($table);
    }

    function kegiatan() {
        return $this->db->get('kegiatan');
    }


    function komentar_komen($id) {
        return $this->db->query("SELECT * FROM komentar WHERE id_galeri = '".$id."' AND status_komen='Aktif' ");
    }

    public function get_balasan($id)
    {
        return $this->db->where('komentar.id', $id)
                    ->join('users', 'user_id = users.id')
                    ->select('komentar.*, users.name, users.image')
                    ->where('balas !=', null)
                    ->get('komentar')
                    ->row();
    }

    function kegiatanduatabel() {
        $this->db->select('*');
        $this->db->from('kegiatan');
        $this->db->join('komentar','komentar.id_komen=kegiatan.id');
        $query = $this->db->get();
        return $query->result();
    }

    function prestasi() {
        return $this->db->get('prestasi');
    }

    function ekstra() {
        return $this->db->get('ekstrakulikuler');
    }

    function fasilitas() {
        return $this->db->get('fasilitas');
    }

    function jadwal() {
        return $this->db->get('jadwal');
    }
    
    function get_kelas($kelas) {
        $res = $this->db->query("SELECT * FROM jadwal WHERE kelas ='".$kelas."'");
        return $res->result();
    }

    function staff() {
        return $this->db->get('pegawai');
    }

    function galeri() {
        return $this->db->get('galeri');
    }

    function kritik() {
        return $this->db->get('kriitik');
    }

    function komentar() {
        return $this->db->get('komentar');
    }

    function komentarkegiatan() {
        $this->db->select('komentar.*, kegiatan.judul');
        $this->db->from('komentar');
        $this->db->join('kegiatan','kegiatan.id=komentar.foreign_id');
        $this->db->order_by('komentar.id desc');
        $this->db->where('jenis', 'berita');
        $query = $this->db->get();
        return $query->result();
    }

    function komentargaleri() {
        $this->db->select('komentar.*, galeri.caption');
        $this->db->from('komentar');
        $this->db->join('galeri','galeri.id=komentar.foreign_id');
        $this->db->order_by('komentar.id desc');
        $this->db->where('jenis', 'galeri');
        $query = $this->db->get();
        return $query->result();
    }

    function Is_already_register($id)
    {
        $this->db->where('login_oauth_uid', $id);
        $query = $this->db->get('chat_user');
        if($query->num_rows() > 0)
        {
        return true;
        }
        else
        {
        return false;
        }
    }

    function Update_user_data($data, $id)
    {
        $this->db->where('login_oauth_uid', $id);
        $this->db->update('chat_user', $data);
    }

        function Insert_user_data($data)
    {
        $this->db->insert('chat_user', $data);
        }
}
?>