<?php
class Siswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-siswa-new');
    }
    public function simpan()
    {
        $data = [
            'nis' => $this->input->post('nis'),
            'nama' => $this->input->post('nama'),
            'kelas' => $this->input->post('kelas'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'tmp_lahir' => $this->input->post('tmp_lahir'),
            'alamat' => $this->input->post('alamat'),
            'jk' => $this->input->post('jk'),
            'agama' => $this->input->post('agama')
        ];
        $this->ModelSiswa->simpanData($data);
        header("Location: " . base_url() . "siswa/tampil");
    }
    public function tampil()
    {
        $this->load->model('ModelSiswa');
        $data['records'] = $this->ModelSiswa->getData();
        $this->load->view('view-data-siswa-new', $data);
    }
}
