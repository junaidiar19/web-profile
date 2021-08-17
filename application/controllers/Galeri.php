<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        $this->load->model(['model']);
    }
 
	public function index()
	{
		$this->data['content'] = "galeri";
        $this->data['galeri'] = $this->db->query("SELECT * FROM galeri order by id desc");

		$this->load->view('main', $this->data);
	}

	public function tambah_komentar(){

		$attr = [
		'id_galeri' => $this->input->post('id'),
		'id_user' => $this->input->post('email'),
        'isi_komen' => $this->input->post('komentar'),
            ];

        $this->db->insert('komentar', $attr);
        redirect($_SERVER['HTTP_REFERER']);
	}

	public function detail($id)
	{
		$this->data['content'] = "content_galeri";
		$this->data['page'] = "berita";

        $this->data['d'] = $this->db->get_where('galeri', ['id' => $id])->row();
        $this->data['komen'] = $this->db->where('foreign_id', $id)->where('jenis', 'galeri')->where('status', 1)->get('komentar');

		$this->load->view('main', $this->data);
	}
}