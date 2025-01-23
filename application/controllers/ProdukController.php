<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Produk_model', 'pm', TRUE);
        $this->load->library('form_validation');
    }

    public function index() {
        $data = [
            'produk' => $this->pm->get_all_produk(),
            'script' => [
                'script_produk_index.js',
            ],
        ];
        $this->template->bs5('produk/index', $data);
    }

    public function fetch_data() {
        $url = 'https://recruitment.fastprint.co.id/tes/api_tes_programmer';
        $username = 'tesprogrammer220125C15';
        $password = md5('bisacoding-' . date('d') . '-' . date('m') . '-' . substr(date('Y'), -2));

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, [
            'username' => $username,
            'password' => $password
        ]);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }

        curl_close($ch);

        $data = json_decode($response, true);

        if (isset($data['data'])) {
            foreach ($data['data'] as $item) {
                $produk_data = array(
                    'id_produk' => $item['id_produk'],
                    'nama_produk' => $item['nama_produk'],
                    'kategori' => $item['kategori'],
                    'harga' => $item['harga'],
                    'status' => $item['status']
                );

                $this->pm->insert_produk($produk_data);
            }
        }

        redirect('');
    }

    public function create() {
        $data = [
            'kategori' => $this->pm->get_all_kategori(),
            'status' => $this->pm->get_all_status(),
            'script' => [
                'script_produk_create.js',
            ],
        ];
        $this->template->bs5('produk/create', $data);
    }

    public function edit($id) {
        $data = [
            'kategori' => $this->pm->get_all_kategori(),
            'status' => $this->pm->get_all_status(),
            'produk' => $this->pm->get_produk_by_id($id),
            'script' => [
                'script_produk_edit.js',
            ],
        ];
        $this->template->bs5('produk/edit', $data);
    }

    public function store() {
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            redirect('produk/create');
        } else {
            $data = array(
                'nama_produk' => $this->input->post('nama_produk'),
                'harga' => $this->input->post('harga'),
                'kategori_id' => $this->input->post('kategori'),
                'status_id' => $this->input->post('status')
            );
            $this->pm->insert($data);
            redirect('');
        }
    }

    public function update($id) {
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            redirect('produk/edit/'.$id);
        } else {
            $data = array(
                'nama_produk' => $this->input->post('nama_produk'),
                'harga' => $this->input->post('harga'),
                'kategori' => $this->input->post('kategori'),
                'status' => $this->input->post('status')
            );
            $this->pm->update_produk($id, $data);
            redirect('');
        }
    }

    public function delete($id) {
        $this->pm->delete_produk($id);
        redirect('');
    }
}