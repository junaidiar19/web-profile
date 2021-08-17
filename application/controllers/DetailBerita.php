<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailBerita extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model(['model']);
    }

	public function index($id) {
        $this->data['content'] = "content_berita";
        $this->data['page'] = "berita";

        $this->data['d'] = $this->db->get_where('kegiatan', ['id' => $id])->row();
        $this->data['komen'] = $this->db->where('foreign_id', $id)->where('jenis', 'berita')->where('status', 1)->get('komentar');

        $this->load->view('main', $this->data);
    }
} 