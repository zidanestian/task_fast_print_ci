<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

    public function get_all_produk() {
        $this->db->select('produk.*, kategori.nama_kategori, status.nama_status');
        $this->db->from('produk');
        $this->db->join('kategori', 'kategori.id_kategori = produk.kategori_id', 'left');
        $this->db->join('status', 'status.id_status = produk.status_id', 'left');
        $this->db->where('status.nama_status', 'bisa dijual');
        return $this->db->get()->result();
    }

    public function insert($data)
    {
        return $this->db->insert('produk', $data);
    }

    public function insert_produk($data) {
        $kategori_id = $this->insert_kategori($data['kategori']);
        
        $status_id = $this->insert_status($data['status']);

        $produk_data = array(
            'id_produk' => $data['id_produk'],
            'nama_produk' => $data['nama_produk'],
            'harga' => $data['harga'],
            'kategori_id' => $kategori_id,
            'status_id' => $status_id
        );

        if (!$this->produk_exists($data['nama_produk'])) {
            $this->db->insert('produk', $produk_data);
        }
    }

    public function insert_kategori($nama_kategori) {
        $this->db->where('nama_kategori', $nama_kategori);
        $query = $this->db->get('kategori');

        if ($query->num_rows() == 0) {
            $this->db->insert('kategori', array('nama_kategori' => $nama_kategori));
            return $this->db->insert_id();
        } else {
            return $query->row()->id_kategori;
        }
    }

    public function insert_status($nama_status) {
        $this->db->where('nama_status', $nama_status);
        $query = $this->db->get('status');

        if ($query->num_rows() == 0) {
            $this->db->insert('status', array('nama_status' => $nama_status));
            return $this->db->insert_id();
        } else {
            return $query->row()->id_status;
        }
    }

    public function produk_exists($nama_produk) {
        $this->db->where('nama_produk', $nama_produk);
        $query = $this->db->get('produk');
        return $query->num_rows() > 0;
    }

    public function get_produk_by_id($id) {
        return $this->db->get_where('produk', array('id_produk' => $id))->row();
    }

    public function update_produk($id, $data) {
        $this->db->where('id_produk', $id);
        $this->db->update('produk', $data);
    }

    public function delete_produk($id) {
        $this->db->where('id_produk', $id);
        $this->db->delete('produk');
    }

    public function get_all_kategori() {
        return $this->db->get('kategori')->result();
    }
    
    public function get_all_status() {
        return $this->db->get('status')->result();
    }
}