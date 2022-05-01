<?php
defined('BASEPATH') OR exit('No direct script access alloweed');
class Mahasiswa {

    public function index()
    {
        $this->load->model('mahasiswa_model','mhs1');
        $this->mhs1->id=1;
        $this->mhs1->nim='0110221237';
        $this->mhs1->nama='Dwi Annisa Maharani';
        $this->mhs1->nim='0110221237';
        $this->mhs1->gender='P';
        $this->mhs1->ipk='3.85';

        $this->load->model('pasien_model','mhs2');
        $this->mhs1->id=2;
        $this->mhs1->kode='020001';
        $this->mhs1->nama='Minyak Wangi';
        $this->mhs1->gender='P';
        $this->mhs1->ipk='3.35';

        $list_mhs = [$this->mhs1, $this->mhs2];
        $data['list_mhs']=$list_mhs;

        $this->load->view('header');
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('footer');
    }
}
