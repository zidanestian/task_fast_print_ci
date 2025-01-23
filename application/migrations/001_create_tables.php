<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_tables extends CI_Migration {

    public function up() {
        // Kategori Table
        $this->dbforge->add_field(array(
            'id_kategori' => array(
                'type' => 'SERIAL',
                'null' => FALSE,
                'auto_increment' => TRUE
            ),
            'nama_kategori' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
        ));
        $this->dbforge->add_key('id_kategori', TRUE);
        $this->dbforge->create_table('kategori');

        // Status Table
        $this->dbforge->add_field(array(
            'id_status' => array(
                'type' => 'SERIAL',
                'null' => FALSE,
                'auto_increment' => TRUE
            ),
            'nama_status' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
        ));
        $this->dbforge->add_key('id_status', TRUE);
        $this->dbforge->create_table('status');

        // Produk Table
        $this->dbforge->add_field(array(
            'id_produk' => array(
                'type' => 'SERIAL',
                'null' => FALSE,
                'auto_increment' => TRUE
            ),
            'nama_produk' => array(
                'type' => 'VARCHAR',
                'constraint' => '250',
            ),
            'harga' => array(
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ),
            'kategori_id' => array(
                'type' => 'INT',
            ),
            'status_id' => array(
                'type' => 'INT',
            ),
        ));
        $this->dbforge->add_key('id_produk', TRUE);
        $this->dbforge->create_table('produk');
    }

    public function down() {
        $this->dbforge->drop_table('produk');
        $this->dbforge->drop_table('status');
        $this->dbforge->drop_table('kategori');
    }
}