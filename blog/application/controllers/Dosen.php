<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	// untuk menmapilakn sluruh data
	public function index()
	{
		//load model & bikin objek
        $this->load->model('dosen_model', 'dosen1');

        $this->dosen1->id = 1;
        $this->dosen1->nidn = '010001123';
        $this->dosen1->nama = 'Dadang Suherman';
        $this->dosen1->gender = 'L';
        $this->dosen1->tmp_lahir = 'Jakarta';
        $this->dosen1->tgl_lahir = '24 April 1982';
        $this->dosen1->pendidikan = 'S1';

        //load model & bikin objek
        $this->load->model('dosen_model', 'dosen2');
        $this->dosen2->id = 2;
        $this->dosen2->nidn = '020001345';
        $this->dosen2->nama = 'Sri Pujiastuti';
        $this->dosen2->gender = 'P';
        $this->dosen2->tmp_lahir = 'Blitar';
        $this->dosen2->tgl_lahir = '25 Agustus 1971';
        $this->dosen2->pendidikan = 'S3';

        //load model & bikin objek
        $this->load->model('dosen_model', 'dosen3');
        $this->dosen3->id = 3;
        $this->dosen3->nidn = '030001908';
        $this->dosen3->nama = 'Utami';
        $this->dosen3->gender = 'P';
        $this->dosen3->tmp_lahir = 'Jakarta';
        $this->dosen3->tgl_lahir = '1 Juni 1972';
        $this->dosen3->pendidikan = 'S3';

        //load model & bikin objek
        $this->load->model('dosen_model', 'dosen4');
        $this->dosen4->id = 4;
        $this->dosen4->nidn = '040001125';
        $this->dosen4->nama = 'Malik Ahmad';
        $this->dosen4->gender = 'L';
        $this->dosen4->tmp_lahir = 'Bandung';
        $this->dosen4->tgl_lahir = '29 Februari 1972';
        $this->dosen4->pendidikan = 'S2';

        // simpan data ke array
        $list_dosen = [$this->dosen1, $this->dosen2, $this->dosen3, $this->dosen4];

        //siapkan data untuk dikirm ke array
        $data["list_dosen"] = $list_dosen;

        //untuk mengirim data & menampilkan ke view
        // $this->load->view('header');
        // $this->load->view('dosen/index', $data);
        // $this->load->view('footer');
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/index', $data);
        $this->load->view('layout/footer');

	}

    public function create(){
        $data["judul"] = "Form Kelola Dosen";
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/create', $data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('dosen_model', 'dsn');

        $this->dsn->nidn = $this->input->post('nidn');
        $this->dsn->nama = $this->input->post('nama');
        $this->dsn->gender = $this->input->post('gender');
        $this->dsn->tmp_lahir = $this->input->post('tmp_lahir');
        $this->dsn->tgl_lahir = $this->input->post('tgl_lahir');
        $this->dsn->pendidikan = $this->input->post('pendidikan');

        $data['dsn'] = $this->dsn;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/view', $data);
        $this->load->view('layout/footer');
    }
}
