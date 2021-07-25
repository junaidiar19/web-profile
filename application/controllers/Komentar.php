<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model(['model']);
    }

    public function store($jenis)
    {
        $attr = [
			'foreign_id' 	=> $this->input->post('id'),
			'email' 		=> $this->input->post('email'),
			'isi' 			=> $this->input->post('isi'),
            'jenis'         => $jenis
        ];

        $this->db->insert('komentar', $attr);
        $this->session->set_flashdata('success', 'Komentar berhasil dikirim. Komentar Anda akan kami periksa terlebih dahulu.');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function balas($id)
    {
        $attr = [
            'user_id' => $this->input->post('user_id'),
            'balas'   => $this->input->post('balas'),
        ];

        $this->model->update('komentar', $attr, $id);
        $this->session->set_flashdata('success', 'Balasan telah dikirim.');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function update_status()
    {
        $attr = [
            'status' => $this->input->post('val'),
        ];

        $this->model->update('komentar', $attr, $this->input->post('id'));
    }

    public function delete()
    {
        $this->model->delete('komentar', $this->input->post('id'));
        $this->session->set_flashdata('success', 'Berhasil Menghapus Data');
    }
}