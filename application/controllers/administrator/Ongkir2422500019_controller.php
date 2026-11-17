<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Ongkir2422500019_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_admin_logged_in();
        $this->load->model('Ongkir2422500019_model');
    }

    public function index()
    {
        $data['list_ongkir'] = $this->Ongkir2422500019_model->get_all();
        $this->load->view('administrator/templates/header');
        $this->load->view('administrator/templates/sidebar');
        $this->load->view('administrator/Ongkir2422500019/index', $data);
        $this->load->view('administrator/templates/footer');
    }

    public function tambah_ongkir()
    {
        $data['title'] = 'Tambah Ongkir';
        $this->form_validation->set_rules('nama_ekspedisi019', 'Nama Ekspedisi', 'required');
        if ($this->form_validation->run() !== FALSE) {
            $this->_simpan_ongkir();
        } else {
            $this->load->view('administrator/templates/header', $data);
            $this->load->view('administrator/templates/sidebar');
            $this->load->view('administrator/Ongkir2422500019/tambah_ongkir');
            $this->load->view('administrator/templates/footer');
        }
    }

    private function _simpan_ongkir()
    {
        $data = [
            'nama_ekspedisi019'  => $this->input->post('nama_ekspedisi019'),
            'jenis_layanan019'   => $this->input->post('jenis_layanan019'),
            'tarif_per_kg019'    => $this->input->post('tarif_per_kg019'),
            'status019'          => $this->input->post('status019')
        ];
        $simpan = $this->Ongkir2422500019_model->tambah($data);
        if ($simpan) {
            $this->session->set_flashdata('message', '
<div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
<div>Berhasil menambahkan ongkir!!</div>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
        } else {
            $this->session->set_flashdata('message', '
<div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
<div>Gagal menambahkan ongkir!!</div>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
        }
        redirect('administrator/Ongkir2422500019');
    }

    public function hapus_ongkir($id)
    {
        $ongkir = $this->Ongkir2422500019_model->get_by_id($id);
        if ($ongkir) {
            $hapus = $this->Ongkir2422500019_model->hapus($id);
            if ($hapus) {
                $this->session->set_flashdata('message', '
<div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
<div>Berhasil menghapus ongkir!!</div>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
            } else {
                $this->session->set_flashdata('message', '
<div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
<div>Gagal menghapus ongkir!!</div>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
            }
            redirect('administrator/Ongkir2422500019');
        } else {
            $this->session->set_flashdata('message', '
<div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
<div>Data ongkir tidak ditemukan!!</div>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
            redirect('administrator/Ongkir2422500019');
        }
    }

    public function ubah_ongkir($id)
    {
        $ongkir = $this->Ongkir2422500019_model->get_by_id($id);
        if ($ongkir) {
            $this->form_validation->set_rules('nama_ekspedisi019', 'Nama Ekspedisi', 'required');
            if ($this->form_validation->run() !== FALSE) {
                $this->_ubah_ongkir($id);
            } else {
                $data['title'] = 'Ubah Ongkir';
                $data['ongkir'] = $ongkir;
                $this->load->view('administrator/templates/header', $data);
                $this->load->view('administrator/templates/sidebar');
                $this->load->view('administrator/Ongkir2422500019/ubah_ongkir', $data);
                $this->load->view('administrator/templates/footer');
            }
        } else {
            $this->session->set_flashdata('message', '
<div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
<div>Data ongkir tidak ditemukan!!</div>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
            redirect('administrator/Ongkir2422500019');
        }
    }

    private function _ubah_ongkir($id)
    {
        $data = [
            'nama_ekspedisi019'  => $this->input->post('nama_ekspedisi019'),
            'jenis_layanan019'   => $this->input->post('jenis_layanan019'),
            'tarif_per_kg019'    => $this->input->post('tarif_per_kg019'),
            'status019'          => $this->input->post('status019')
        ];
        $ubah = $this->Ongkir2422500019_model->ubah($data, $id);
        if ($ubah) {
            $this->session->set_flashdata('message', '
<div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
<div>Berhasil mengubah ongkir!!</div>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
        } else {
            $this->session->set_flashdata('message', '
<div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
<div>Gagal mengubah ongkir!!</div>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
        }
        redirect('administrator/Ongkir2422500019');
    }
}
